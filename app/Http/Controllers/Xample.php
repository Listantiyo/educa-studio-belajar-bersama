<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Classe;
use App\Mapel;
use App\Question;
use App\Type;
use App\User_Detail;

use Illuminate\Http\Request;

class Xample extends Controller
{
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
        
        $question = Question::all();

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
    //     $a = Classe::all();
    //     $aa = 1;
    //     $b = Answer::all();
    //     $c = Mapel::all();
    //     $cc = null;
    //     $question = Question::all();
    //     $e = Type::all();
    //     $ee = null;
    //     $f = User_Detail::all();

        
    //         return [$a,$question];
        
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
