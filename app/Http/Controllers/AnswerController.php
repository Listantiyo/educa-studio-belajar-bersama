<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Answer;
use App\Question;

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
            $quest = DB::table('questions')->latest()->first();
        }else{
            $quest = Question::find($id);
        }
        // dd($quest);
        return view('answer.index',compact('quest'));
    }

    public function show_answer(Request $request)
    {

            $id = $request->id;
            $answer = Answer::where('id_question',$id)->get();
            // dd($id);


            // cek
            // return response()->json($q_latest);
            // return $q_latest;
            return response()->json($answer);
        
        
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

        $quest->id_type = 2;

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
