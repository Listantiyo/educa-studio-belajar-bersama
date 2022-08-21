<?php

namespace App\Http\Controllers;

use App\Dashboard;
use Illuminate\Http\Request;

use App\Answer;
use App\Classe;
use App\Mapel;
use App\Question;
use App\Type;
use App\User_Detail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $filc = Classe::all();
        $filt = Type::all();
        $film = Mapel::all();
        return view('dashboard.index',compact('filc','filt','film'));
    }

    public function filter(){
        $filc = Classe::all();
        $filt = Type::all();
        $film = Mapel::all();

        // return ($filc ->'class', $filt $film);
        return compact('filc','film','filt');
    }

    public function show_question(Request $request)
    {
        
        // if (request()->ajax()) {

        $clas = $request->clas;
        $mapel = $request->mapel;
        $type = $request->type;
        
        // $question = Question::all();
        $question = DB::table('questions')->orderBy('created_at', 'desc')->get();

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
    // }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $r = Auth::user();
        dd($r);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
    
            return redirect()->route('answer');
            // return response()->json("success");
            // return compact('qs','clas','typ','id_user','request');
    
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function show(Dashboard $dashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function edit(Dashboard $dashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dashboard $dashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dashboard $dashboard)
    {
        //
    }
}
