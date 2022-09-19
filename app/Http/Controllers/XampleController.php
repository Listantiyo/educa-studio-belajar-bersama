<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Classe;
use App\Mapel;
use App\Question;
use App\Type;
use App\User_Detail;
use App\User;
use App\Answer_Comment;
use App\Question_Comment;
use App\Question_Tags;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Communities;

use Illuminate\Http\Request;

class XampleController extends Controller
{
    public function my()
    {    
    // $like = DB::table('tbl_likes')
        // ->where('id_quest',7)->where('id_user',1)->count();
        // $dislike = DB::table('tbl_dislikes')
        // ->where('id_quest',7)->where('id_user',1)->count();
        // $l = DB::table('tbl_likes')->whereRaw('id_user','=',1,'and','id_quest','=',7)->count();
        // Storage::disk('public')->delete('photos/qGp7Q0rMgnfuA0pNSGsFaBJF4HgplHh4qgUnZTUS.png');
        // return Storage::files('photos');
        // $id = 1;
        // $kelas = "s";
        // $getid = DB::table('tbl_user_details')->where('id_user',$i)->get();
        // $id = User_Detail::where('id_user',$i)->pluck('id');

        // $id = DB::table('users')->orderBy('level', 'desc')->limit(1)->pluck('level');

        // foreach ($id as $all ) {
        //     # code...
        // }
        
        // $all = User::find($id);
                
        // if ($gender != null) {
        //     # code...
            
        //     $all = $gender;
            
        // }
        // if ($kelas != null) {
        //     # code...
            
        //     $all = $kelas;
            
        // }
        // $a = Question::pluck('tags');
    //     $a = Question::join('tbl_tags', function ($join) {
    //     $join->on(DB::raw('find_in_set(json_decode(tbl_questions.tags), tbl_tags.id)'), DB::raw(''), DB::raw(''));
    // })
    // ->get(); 
    // foreach ($a as $a) {
        //     $all =  json_decode($a);
        //     // $all1 = $al[0];
        //     // $all2 = $al[1];
        //     // $all3 = $al[2];
        //     // $all4 = $al[3];
        //     // $all5 = $al[4];
        // }
        // $all = Answer_Comment::where('id_answer',18)->where('id_question',44)->get();
        // return $all;
        // $name_mapel = Question::find(1)->mapel;
        // dd($all1.$all2.$all3.$all4.$all5);
        // $a = $al->quest_tag;
        // $a = Question_Tags::fild(1);
        // $a->save();
        // $al = /* Question::with('tag')->get(); */DB::table('tbl_questions')->with('tag')->get();
        
        // foreach ($al as $it) {
        //     # code...
        //     $sit = $it->tag;
        // }
        // dd($al);
        // $all = $al;

    // $al = Question::find(24)->pluck('path_img');
    $var = User::find(1)->community;
    // $var = Question::find(1)->tag;
        return $var;
    }
    public function filter(){
        $filc = Classe::all();
        $filt = Type::all();
        $film = Mapel::all();

        // return ($filc ->'class', $filt $film);
        return compact('filc','film','filt');
    }
    /**
     * Display a listing of the resource.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show_question(Request $request)
    {
        
        if (request()->ajax()) {

        $clas = $request->clas;
        $mapel = $request->mapel;
        $type = $request->type;
        
        // $question = Question::all();
        $question = DB::table('tbl_questions')->get();

        if (($clas)!=null) {
            # code...
            $question = $question->where('id_kelas',$clas);
        }
        if (($mapel)!=null) {
            # code...
            $question = $question->where('id_mapel',$mapel);
        }
        if (($type)!=null) {
            # code...
            $question = $question->where('id_type',$type);
        }

            return $question;
    }
        
    }

    // public function show_answer()
    // {
    //         $q_latest = DB::table('tbl_questions')->latest()->first();

    //         // cek
    //         // return response()->json($q_latest);
    //         return response()->json("success");

        
    // }

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
        $quest = DB::table('tbl_questions')->where('question','like','%'.$data.'%')->get();
        // dd($quest);
        return $quest;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id_user = $request->user;
        $qs = $request->text;
        $clas = $request->clas;
        $typ = $request->typ;

        if ( $qs === null ) {
            # code...
            return "kosong";
        };
        
        if ( $typ === null ) {
            # code...
            return "kopsong";
        };

        if ( $clas === null ) {
            # code...
            return "kopong";
        };
        
        
        $quest = new Question;
        
        $quest->question = $qs;
        $quest->id_kelas = $clas;
        $quest->id_mapel = $typ;
        $quest->id_user_dil = $id_user;
        $quest->id_type = "0";
        
        $quest->save();

        // return redirect()->route('answer');
        // return response()->json("success");
        // return compact('qs','clas','typ','id_user','request');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * @param  \Illuminate\Http\Request  $request
     */
    public function show(Request  $request)
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
