<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use Illuminate\Foundation\Console\Presets\React;
use Illuminate\Support\Facades\DB;
use App\Communities;
use App\Tags;

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
    
    public function detail($id)
    {
        $question = Question::find($id);
        return view('question.detail.index',compact('question'));
    }

    public function ask()
    {   

        $communities = Communities::all();
        $tags = Tags::all();

        return view('question.ask.index',compact('communities','tags'));
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

    public function search(Request $request)
    {
        $data = $request->data;
        $id = $request->id;
        $quest = DB::table('tbl_questions')->where('title','like','%'.$data.'%')->get();

        $id = $request->id;
        if ($id == 1) {
            $question_all = $quest;
        }
        if ($id == 2) {
            $question_most = $quest->where('id_type',2);    
        }
        if ($id == 3) {
            $question_unans = $quest->where('id_type',1);   
        }
        if ($id == 4) {
            $question_feature = $quest->where('like','>', 1);  
        }
        
        return compact('question_all','question_most','question_unans','question_feature','id');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tag_array = $request->input('tag');

        $tag1 = array_get($tag_array,'0');
        $tag2 = array_get($tag_array,'1');
        $tag3 = array_get($tag_array,'2');
        $tag4 = array_get($tag_array,'3');
        $tag5 = array_get($tag_array,'4');

        dd( $tag1. $tag2. $tag3. $tag4. $tag5);

        $validation = $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:1024'
           ]);

        if ($request->hasFile('image')) {

            $name = $request->file('image')->getClientOriginalName();
            
            $path = $request->file('image')->store('photos');
        }else{
            $name=null;
            $path=null;
        }
            
        $quest = new Question();

        $quest->id_user_dil = 1;
        // $quest->id_user_dil = $request->user_id;
        // $quest->id_type = $request->type;
        $quest->id_comunity = $request->community;
        $quest->title = $request->title;
        $quest->question = $request->text;
        $quest->tags = $request->tag.',';
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
    public function show(Request $request)
    {
        $id = $request->id;
        if ($id == 1) {
            $question_all = DB::table('tbl_questions')->get(); 
        }
        if ($id == 2) {
            $question_most = DB::table('tbl_questions')->where('id_type',2)->get();    
        }
        if ($id == 3) {
            $question_unans = DB::table('tbl_questions')->where('id_type',1)->get();   
        }
        if ($id == 4) {
            $question_feature = DB::table('tbl_questions')->where('like','>', 1)->get();  
        }

        return compact('question_all','question_most','question_unans','question_feature','id');
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
