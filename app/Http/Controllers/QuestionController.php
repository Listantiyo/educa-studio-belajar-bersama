<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('question.index');
    }
    
    public function detail()
    {
        return view('question.detail.index');
    }

    public function ask()
    {
        return view('question.ask.index');
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
        $validation = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:1024'
           ]);
        $name = $request->file('image')->getClientOriginalName();
        
        $path = $request->file('image')->store('photos');

        $quest = new Question();

        $quest->id_user_dil = 1;
        // $quest->id_user_dil = $request->user_id;
        // $quest->id_type = $request->type;
        $quest->id_category = $request->category;
        $quest->title = $request->title;
        $quest->question = $request->text;
        $quest->tags = $request->tag;
        $quest->image = $name;
        $quest->path_img = $path;

        $quest -> save();

        return "success";
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
}
