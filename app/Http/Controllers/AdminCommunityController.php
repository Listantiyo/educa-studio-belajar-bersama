<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Communities;

class AdminCommunityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comunities = Communities::all();
        return view('Admin.community.index',compact('comunities'));
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
        $com_name = $request->commu;

        $community = new Communities;

        $community->community = $com_name;
        $community->image = "jj";
        $community->path_img = "hh";
        $community->save();
        return "success";
    }

    public function showCommunities()
    {
        $communities = Communities::all();

        return datatables()
        ->of($communities)
        ->addIndexColumn()
        ->addColumn('aksi', function ($communities) {
            return '
            <div class="btn-group">
                <button onclick="detailData(`'. $communities->id .'`)" class="btn btn-sm btn-info"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                <button onclick="editData(`'. $communities->id .'`)" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></button>
                <button onclick="deleteData(`'.  $communities->id .'`)" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
            </div>
            ';
        })
        ->rawColumns(['aksi'])
        ->make(true);
    }
    ////////////////////////////////
    public function dataEdit(Request $request )
    {
        $id = $request->id;

        $data = Communities::find($id);

        return $data;
    
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
    public function update(Request $request)
    {
        $id = $request->id;
        $comunitty = $request->commu;

        $commu = Communities::find($id);
        $commu->community = $comunitty;

        $commu->update();
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
        $community = Communities::find($id)->delete();
    }
}
