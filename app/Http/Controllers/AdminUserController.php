<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('Admin.user.index', compact('users'));
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
     */
    public function showUser()
    {
        $users = User::all();

        return datatables()
        ->of ($users)
        ->addIndexColumn()
        ->addColumn('aksi', function($users) {
            return  '
            <button onclick="editData(`'. $users->id .'`)" class="btn btn-sm btn-warning mr-2">
                <i class="nav-icon fa-solid fa-pen-to-square"></i>
            </button>
            <button onclick="deleteData(`'. $users->id .'`)" class="btn btn-sm btn-danger">
                <i class="nav-icon fa-solid fa-trash"></i>
            </button>
            ';
        })
        ->rawColumns(['aksi'])
        ->make(true);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function dataEdit(Request $request )
    {
        $id = $request->user_id;

        $data = User::find($id);

        return $data;
    
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
        $nama = $request->nama;
        $email = $request->email;


        $user = User::find($id);
        $user->name = $nama;
        $user->email = $email;

        $user->update();
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
        $user = User::find($id)->delete();
    }
}
