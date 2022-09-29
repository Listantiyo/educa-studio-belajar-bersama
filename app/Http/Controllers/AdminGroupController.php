<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Groups;
use Illuminate\Support\Facades\Storage;

class AdminGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $group = Groups::all();
        return view('Admin.group.index',compact('group'));
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
        $gname = $request->namegroup;

        $request->validate([
            'image' => 'image|mimes:png,jpg,jpeg,gif|max:1024',
            'image_bg' => 'image|mimes:png,jpg,jpeg,gif|max:1024'
        ]);

        if($request->hasFile('image','image_bg')) {
            $img = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->store('photos');
            $imgbg = $request->file('image_bg')->getClientOriginalName();
            $pathbg = $request->file('image_bg')->store('photos');
        } else {
            $img = null;
            $path = null;
            $imgbg = null;
            $pathbg = null;
        }

        $grup = new Groups;
        $grup->group = $gname;
        $grup->image = $img;
        $grup->path_img = $path;
        $grup->image_bg = $imgbg;
        $grup->path_img_bg = $pathbg;

        $grup->save();
        return "success";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showGroup()
    {
        $group = Groups::all();

        return datatables()
        ->of($group)
        ->addIndexColumn()
        ->addColumn('aksi', function($group) {
            return '
                <button onclick="showDetail(`'.$group->id.'`)" class="btn btn-sm btn-info"><i class="fa-solid fa-eye"></i></button>
                <button onclick="editData(`'.$group->id.'`)" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></button>
                <button onclick="deleteData(`'.$group->id.'`)" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
            ';
        })
        ->rawColumns(['aksi'])
        ->make(true);
    }

    public function showDetail(Request $request)
    {
        $id = $request->id;

        $data = Groups::find($id);

        return $data;
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

    public function dataEdit(Request $request)
    {
        $id = $request->id;
        // $gname = $request->namegroup;
        $img = $request->image;
        $imgbg = $request->image_bg;

        $data = Groups::find($id);
        // $data->group = $gname;
        $data->image = $img;
        $data->image_bg = $imgbg;

        return $data;
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $grupname = $request->namegroup;

        $grp = Groups::find($id);

        // return $grupname;
        if($grp->path_img || $grp->path_img_bg != null){
            Storage::disk('public')->delete($grp->path_img);
            Storage::disk('public')->delete($grp->path_img_bg);
        }


         $request->validate([
            'image' => 'image|mimes:png,jpg,jpeg,gif|max:1024',
            'image_bg' => 'image|mimes:png,jpg,jpeg,gif|max:1024'
        ]);

        if($request->hasFile('image','image_bg')) {
            $image = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->store('photos');
            $imgbg = $request->file('image_bg')->getClientOriginalName();
            $pathbg = $request->file('image_bg')->store('photos');
            $grp->image = $image;
            $grp->path_img = $path;
            $grp->image_bg = $imgbg;
            $grp->path_img_bg = $pathbg;
        } else {
            $image = null;
            $path = null;
            $imgbg = null;
            $pathbg = null;
        }

        $grp->group = $grupname;
        
        $grp->update();

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
        $group = Groups::find($id);
        if ($group->path_img && $group->path_img_bg != null){
            Storage::disk('public')->delete($group->path_img);
            Storage::disk('public')->delete($group->path_img_bg);
        }

        $group->delete();

        return "success";
    }
}
