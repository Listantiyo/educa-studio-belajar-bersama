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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show_question()
    {
        $a = Classe::all();
        $aa = 1;
        $b = Answer::all();
        $c = Mapel::all();
        $cc = null;
        $d = Question::all();
        $e = Type::all();
        $ee = null;
        $f = User_Detail::all();

        if (($aa)!=null) {
            # code...
            $d = $d->where('id_kelas',$aa);
        }
        if (($cc)!=null) {
            # code...
            $d = $d->where('id_mapel',$cc);
        }
        if (($ee)!=null) {
            # code...
            $d = $d->where('id_type',$ee);
        }
            return [$a,$d];
        
    }
    public function show_answer()
    {
        $a = Classe::all();
        $aa = 1;
        $b = Answer::all();
        $c = Mapel::all();
        $cc = null;
        $d = Question::all();
        $e = Type::all();
        $ee = null;
        $f = User_Detail::all();

        if (($aa)!=null) {
            # code...
            $d = $d->where('id_kelas',$aa);
        }
        if (($cc)!=null) {
            # code...
            $d = $d->where('id_mapel',$cc);
        }
        if (($ee)!=null) {
            # code...
            $d = $d->where('id_type',$ee);
        }
            return [$a,$d];
        
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
