<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Question;

class AdminQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::all();

        return view('Admin.question.index',compact('questions'));
        // return view('Admin.question.index');
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
    public function editQuest($id)
    {
        $qs = Question::find()->pluck('question');
        return "ssssssss";


    }
    public function showQuest()
    {
        $questions = DB::table('tbl_questions')
        ->leftjoin('users', 'tbl_questions.id_user_dil' , '=' ,'users.id')
        ->leftjoin('tbl_types', 'tbl_questions.id_type' , '=' ,'tbl_types.id')
        ->leftjoin('tbl_communities', 'tbl_questions.id_comunity' , '=' ,'tbl_communities.id')
        ->select('tbl_questions.*' , 'users.name', 'tbl_types.nama_type', 'tbl_communities.community')
        ->get();


        return datatables()
        ->of($questions)
        ->addIndexColumn()
        ->addColumn('aksi', function ($questions) {
            return '
            <div class="btn-group">
                <button onclick="detailData(`'. $questions->id .'`)" class="btn btn-sm btn-info"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                <button onclick="editData(`'. $questions->id .'`)" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></button>
                <button onclick="deleteData(`'.  $questions->id .'`)" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
            </div>
            ';
        })
        ->rawColumns(['aksi'])
        ->make(true);
    }
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
    public function dataEdit($id)
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
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $title = $request->title;
        $question = $request->question;
        $tags = $request->tags;
        $id = $request->id;


        $quest = Question::find($id);
        $quest->title = $title;
        $quest->question = $question;
        $quest->tags = $tags;

        $quest->update();
        return "success";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $questions = Question::find($id);
        $questions->delete();
        
        return $id;
    }
}
