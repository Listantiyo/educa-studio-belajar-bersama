<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Groups;
use Illuminate\Database\Eloquent\Builder;
use App\User;
use App\Group_Followers;
use App\Question_Groups;
use App\Tags as AppTags;

class GroupsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('groups.index');
    }

    public function join()
    {
        return view('groups.join.index');
    }

    public function detail($id)
    {
        $detail = Groups::find($id);
        
        return view('group_question.index',compact('id','detail'));
    }

    public function ask($id)
    {
        $tags = AppTags::all();
        return view('group_question.ask.index',compact('id','tags'));
    }

    public function detailQuest($ids)
    {
        $id = $ids;
        // $question = Question_Groups::find($ids);
        $question = Question_Groups::where('id',$ids)->with('tag','user','user_detail')
        ->withCount('likes','dislikes','answers')->first();
        
        $view = Question_Groups::find($ids)->pluck('views');
        $views = data_get($view,'0');
        $question->views = $views+1;
        $question->update();

        return view('group_question.detail.index',compact('question','id'));
    }

    public function showunjoin(Request $request)
    {
        $unjoin = Groups::whereDoesntHave('followers', function (Builder $query) use ($request) {
            $query->where('id_user',$request->id);
        })->get();

        return response()->json([
            'unjoin'=>$unjoin,
        ]);
    }

    public function showjoin(Request $request)
    {
        $id = $request->id;
        $join = User::find($id)->groups;
        
        return response()->json([
            'join'=>$join,
        ]);
    }

    public function search(Request $request)
    {
        $type = $request->type;
        if ($type === 'unjoin') {
            # code...
            $unjoin = Groups::where('group','like','%'.$request->data.'%')
            ->whereDoesntHave('followers', function (Builder $query) use ($request) {
                $query->where('id_user',$request->id);
            })->get();

            return response()->json([
                'unjoin'=>$unjoin,
            ]);
        }
        if ($type === 'join') {
            # code...
            $join = User::find($request->id)->groups()->where('group','like','%'.$request->data.'%')->get();
        
            return response()->json([
                'join'=>$join,
            ]);
        }

    }

    public function un_join(Request $request)
    {   
        $type = $request->type;
        $id = $request->id ;
        $id_user = $request->id_user ;
        if ($type == 'join') {

            $follow = new Group_Followers();
            $follow->id_user = $id_user;
            $follow->id_group = $id;
    
            $follow->save();
        }
        if ($type == 'unjoin') {

            $unfollow = Group_Followers::where('id_group',$id)->delete();
        }
        $alert = "success";
        return compact('id','alert');
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
    public function show(Request $request)
    {
        $id = $request->id_group;
        
        $question_all = Question_Groups::with('tag','user','user_detail')
        ->withCount('likes','dislikes','answers')->where('id_group',$id)->latest()->paginate(6);
        
        return $question_all;

        return compact('question_all');
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
