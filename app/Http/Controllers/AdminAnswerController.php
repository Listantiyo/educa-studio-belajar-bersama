<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Answer;

class AdminAnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $answers = Answer::all();
        return view('Admin.answer.index',compact('answers'));
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
    public function editAnswer($id)
    {
        $qs = Question::find()->pluck('answer');
        return "ssssssss";


    }
    public function showAnswer()
    {    
        $answers = DB::table('tbl_answers')
        ->join('users', 'tbl_answers.id_user_dil' , '=' ,'users.id')
        ->join('tbl_questions', 'tbl_answers.id_question' , '=' ,'tbl_questions.id')
        ->select('tbl_answers.*' , 'users.name', 'tbl_questions.question')
        ->get();

        return datatables()
        ->of($answers)
        ->addIndexColumn()
        ->addColumn('aksi', function ($answers) {
            return '
            <div class="btn-group">
                <button onclick="detailData(`'. $answers->id .'`)" class="btn btn-sm btn-info"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                <button onclick="editData(`'. $answers->id .'`)" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></button>
                <button onclick="deleteData(`'.  $answers->id .'`)" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
            </div>
            ';
        })
        ->rawColumns(['aksi'])
        ->make(true);
    }
    ///////////////////////////////////////////////
    public function store(Request $request)
    {
        //
    }

    public function innerJoin()
    {
    
    $result = DB::table('tbl_answers')
        ->join('users', 'tbl_answers.id_user_dil' , '=' ,'users.id')
        ->join('tbl_questions', 'tbl_answers.id_question' , '=' ,'tbl_questions.id')
        ->select('tbl_answers.*' , 'users.name', 'tbl_questions.question')
        ->get();

    dd($result);

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
