<?php

namespace App\Http\Controllers;

use App\Answer_Groups;
use App\Question_Groups;
use Illuminate\Http\Request;

class GroupAnswerController extends Controller
{
    public function show_answer(Request $request)
    {

            $id_user = $request->id_user;
            $id = $request->id_quest;
            $jumlah = $request->jumlah;

            if ($jumlah > 0) {
                $answer = Answer_Groups::with('user','user_detail')->withCount(['dislikes','likes',

                'likes as load_like' => function ($query) use ($id_user) {
                    $query->where('id_user',$id_user);
                },

                'dislikes as load_dislike' => function ($query) use ($id_user) {
                    $query->where('id_user',$id_user);
                },

                ])->where('id_question',$id)->limit($jumlah)->get();
            }else{
                $answer = Answer_Groups::with('user','user_detail')->withCount(['dislikes','likes',

                'likes as load_like' => function ($query) use ($id_user) {
                    $query->where('id_user',$id_user);
                },

                'dislikes as load_dislike' => function ($query) use ($id_user) {
                    $query->where('id_user',$id_user);
                },

                ])->where('id_question',$id)->get();
            }
            return response()->json(['answer' => $answer]);
    }

    public function store(Request $request)
    {   
        $id_user = $request->id_user;
        $id = $request->id_quest;
        $answer = new Answer_Groups();
        $quest = Question_Groups::find($id);
        $input_answer = $request->text;

        if ( $input_answer === null ) {
            return "kosong";
        };

        $answer->id_question = $request->id_quest;
        $answer->id_user_dil = $request->id_user;
        $answer->answer = $input_answer;

        $answer->save();

        $quest->id_type = 2;

        $quest->save();        

        $answer_show = Answer_Groups::with('user','user_detail')->withCount(['dislikes','likes',

        'likes as load_like' => function ($query) use ($id_user) {
            $query->where('id_user',$id_user);
        },

        'dislikes as load_dislike' => function ($query) use ($id_user) {
            $query->where('id_user',$id_user);
        },

        ])->where('id_question',$id)->get();
        return response()->json(['answer'=> $answer_show]);
    }
}
