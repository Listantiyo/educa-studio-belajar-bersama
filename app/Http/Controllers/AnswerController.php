<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Answer;
use App\Question;
use App\Answer_Comment;
use App\Question_Comment;

class AnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        if ($id == "null") {
            # code...
            $quest = DB::table('tbl_questions')->latest()->first();
        }else{
            $quest = Question::find($id);
        }
        // dd($quest);
        return view('answer.index',compact('quest','id'));
    }

    public function show_answer(Request $request)
    {

            $id = $request->id;
            $answer = Answer::where('id_question',$id)->get();
            $comment = Answer_Comment::all();
            
            // dd($id);


            // cek
            // return response()->json($q_latest);
            // return $q_latest;
            return compact('answer','comment');
        
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $id = $request->id;
        $answer = new Answer();
        $quest = Question::find($id);
        $input_answer = $request->text;

        if ( $input_answer === null ) {
            # code...
            return "kosong";
        };

        $answer->id_question = $request->id;
        $answer->id_user_dil = $request->user;
        $answer->answer = $input_answer;

        $answer->save();

        $quest->id_type = 1;

        $quest->save();        
        return response()->json(['answer'=> $input_answer]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

    }
    public function storeComent(Request $request)
    {

        $commnet_quest = $request->commnet_quest;
        $id_user = $request->id;
        $id_quest = $request->id_quest;
        $id_answer = $request->id;
        $comment = $request->comment;

        if ($commnet_quest != null) {
            
            $qus_comment = new Question_Comment();

            $qus_comment->id_user = $request->id_user;
            $qus_comment->comment = $commnet_quest;
            $qus_comment->id_question = $id_quest;
            $qus_comment->save();

            $cek = "qus";
            $comment = Question_Comment::where('id_question',$id_quest)->get();

            return compact('comment','cek');
            // return ;

        }else{
            $ans_comment = new Answer_Comment();
    
            $ans_comment->id_user = $id_user;
            $ans_comment->id_question = $id_quest;
            $ans_comment->id_answer = $id_answer;
            $ans_comment->comment = $comment;
    
            $ans_comment->save();
    
            $comment = Answer_Comment::where('id_answer',$id_answer)->where('id_question',$id_quest)->get();
            
            
            return $comment ;

        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showComment(Request $request)
    {
        $id_user = $request->id_user;
        $id_answer = $request->id_answer;
        $id_quest = $request->id_quest;
        if ($id_answer == null) {
            # code...
            $comment = Question_Comment::where('id_user',$id_user)->where('id_question',$id_quest)->get();
            $cek = "one";
            return  compact('cek','comment');
        } else {
            # code...
            $comment = Answer_Comment::where('id_answer',$id_answer)->where('id_question',$id_quest)->get();
            $cek = "two";
            return compact('comment','id_answer','cek');
        }
        
    }
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function goToquest($data)
    {
        $input = $data;
        // dd($dnew);
        return redirect('/dashboard')->with([ 'data' => $input ]);
    }
}
