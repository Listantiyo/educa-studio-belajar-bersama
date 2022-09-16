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
        return view('Admin.community.create');
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

        $request->validate([
            'image' => 'image|mimes:png,jpg,jpeg,gif|max:1024'
        ]);

        if($request->hasFile('image')) {
            $gmbr = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->store('photos');
        } else {
            $gmbr = null;
            $path = null;
        }

        $community = new Communities;

        $community->community = $com_name;
        $community->image = $gmbr;
        $community->path_img = $path;
        $community->save();
        return "success";
    }

    public function showCommunities()
    {
        $communities = Communities::all();

        return datatables()
        ->of($communities)
        ->addIndexColumn()
        ->addColumn('show_image', function($communities){
            if($communities->path_img == null){
                return "No Image";
            }else{
                return '<img src="/storage/'.$communities->path_img.'" style="width: 70%;" alt="" srcset="">';
            }
        })
        ->addColumn('aksi', function ($communities) {
            return '
                <button onclick="editData(`'. $communities->id .'`)" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></button>
                <button onclick="deleteData(`'.  $communities->id .'`)" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
            ';
        })
        ->rawColumns(['show_image','aksi'])
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
        // $id = $request->id;
        // $comunitty = $request->commu;

        // $request->validate([
        //     'image' => 'image|mimes:png,jpg,jpeg,gif|max:1024'
        // ]);

        // if($request->hasFile('image')) {
        //     $gmbr = $request->file('image')->getClientOriginalName();
        //     $path = $request->file('image')->store('photos');
        // } else {
        //     $gmbr = null;
        //     $path = null;
        // }

        $id = $request->id;

        $commu = Communities::find($id);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $store_path = "storage/photos";
            $name = $image->getClientOriginalName();
            $image->move(public_path('/' . $store_path), $name);
            $exist_image = $commu['image'];
            $update['image'] = $store_path . '/' . $name;

        }        
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
        $community = Communities::find($id);

        if ($community->path_img != null){
            unlink(public_path($community->path_img));
        }

        Communities::destroy($id);

        return "success";
    }
}
