<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Communities;
use App\Community_Followers;
use App\Group_Followers;
use App\Question;
use App\Question_Tags;
use App\Question_Votes;
use App\User;
use App\User_Detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::id();
        $user = User::with('user_detail')->withCount('community','groups')->where('id',$id)->get();
        $user_detail = $user->makeHidden('password_showed');
        // return $user_detail;
        $quest = Question::where('id_user_dil',$id)->count();
        $answer = Answer::where('id_user_dil',$id)->count();
        $detail = User_Detail::where('id_user',$id)->get();
        // return $quest;
        return view('user_profile.index',compact('user_detail','quest','answer','detail'));
    }
    public function detail()
    {
        return view('user_profile.detail');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detailUser(Request $request)
    {
        $id_user = $request->id_user;

        $count_uanswer = Answer::find($id_user)->count();
        $count_uquest = Question::find($id_user)->count();
        $count_uvote = Question_Votes::where('id_user',$id_user)->count();
        $count_ugroup = Group_Followers::where('id_user',$id_user)->count();
        $count_ucommu = Community_Followers::where('id_user',$id_user)->count();
        $count_utag = DB::select(
                        'SELECT 
                        count(tbl_question_tags.id) AS total_tags,tbl_questions.id_user_dil 
                        FROM tbl_question_tags
                        LEFT JOIN tbl_questions 
                        ON tbl_questions.id = tbl_question_tags.id_quest
                        WHERE tbl_questions.id_user_dil = 1 
                        GROUP BY tbl_questions.id_user_dil
                        ');

        return response()->json([
            'count_answer' => $count_uanswer,
            'count_quest' => $count_uquest,
            'count_vote' => $count_uvote,
            'count_group' => $count_ugroup,
            'count_commu' => $count_ucommu,
            'count_tag' => $count_utag[0]->total_tags,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('user_profile.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
    public function shooow(Request $request)
    {
        $datau = User::with('user_detail')->get();
        $dataq = Question::where('id_user_dil',$request->id)->count();

        return response()->json([
            'datau' => $datau,
            'dataq' => $dataq,

        ]);
    }
}
