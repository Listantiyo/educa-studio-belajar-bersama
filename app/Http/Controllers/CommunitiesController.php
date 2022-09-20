<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Communities;
use App\Community_Followers;
use Illuminate\Database\Eloquent\Builder;
use App\User;
use Illuminate\Support\Facades\Auth;

class CommunitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unfollow = Communities::whereDoesntHave('followers', function (Builder $query) {
            $query->where('id_user',Auth::id());
        })->get();
        return view('communities.index',compact('unfollow'));
    }
    
    public function follow()
    {
        $id = Auth::id();
        $follow = User::find($id)->community;
        return view('communities.followed.index',compact('follow'));
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
    public function showfollow(Request $request)
    {
        $follow = User::find(1)->community;
    }
    public function showunfollow(Request $request)
    {
        $unfollow = Communities::whereDoesntHave('followers', function (Builder $query) {
            $query->where('id_user', '1');
        })->get();
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
