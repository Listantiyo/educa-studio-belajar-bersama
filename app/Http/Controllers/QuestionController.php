<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use Illuminate\Support\Facades\DB;
use App\Tags;
use App\Likes;
use App\Dislikes;
use App\Question_Votes;
use Illuminate\Support\Facades\Auth;
use App\User;

class QuestionController extends Controller
{

    public function index()
    {
        return view('question.index');
    }
    
    public function detail($ids)
    {   
        if ($ids === "QD") {
            $question = Question::latest()->first();
            $id = $question->latest()->limit(1)->pluck('id');
            $view = $question->latest()->limit(1)->pluck('views');
            $views = data_get($view,'0');

            $question->views = $views+1;
            $question->update();

            

            return view('question.detail.index',compact('question','id'));
        }
        if ($ids === "MAD") {
            $question = Question::where('id_type',2)->latest()->first();
            $id = $question->where('id_type',2)->latest()->limit(1)->pluck('id');
            $view = $question->where('id_type',2)->latest()->limit(1)->pluck('views');
            $views = data_get($view,'0');
            
            $question->views = $views+1;
            $question->update();

            

            return view('question.detail.index',compact('question','id'));
        }
        if ($ids != "QD"||"MAD") {
            $id = $ids;
            $question = Question::find($ids);
            $view = Question::find($ids)->pluck('views');
            $views = data_get($view,'0');

            $question->views = $views+1;
            $question->update();
            
            return view('question.detail.index',compact('question','id'));
        }
    }

    public function ask()
    {   
        $id = Auth::id();
        $communities = User::find($id)->community;
        $tags = Tags::all();

        return view('question.ask.index',compact('communities','tags'));
    }

    public function search(Request $request)
    {
        $data = $request->data;
        $id = $request->id;
        $quest = Question::with('tag','user','community')
        ->withCount('likes','dislikes','votes','answers')->where('title','like','%'.$data.'%');

        $id = $request->id;
        if ($id == 1) {
            $question_all = $quest->paginate(6);
        }
        if ($id == 2) {
            $question_most = $quest->where('id_type',2)->paginate(6);    
        }
        if ($id == 3) {
            $question_unans = $quest->where('id_type',1)->paginate(6);   
        }
        if ($id == 4) {
            $question_feature = $quest->where('like','>', 1)->paginate(6);  
        }
        
        return compact('question_all','question_most','question_unans','question_feature','id');
    }

    public function store(Request $request)
    {
        $tags = json_encode($request->input('tag')); /* serialize != unserialize */
        // dd($request->input('tag'));
        
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:1024'
           ]);

        if ($request->hasFile('image')) {

            $name = $request->file('image')->getClientOriginalName();
            
            $path = $request->file('image')->store('photos');
        }else{
            $name = null;
            $path = null;
        }
            
        $quest = new Question();

        $quest->id_user_dil = $request->id;
        // $quest->id_user_dil = $request->user_id;
        // $quest->id_type = $request->type;
        $quest->id_comunity = $request->community;
        $quest->title = $request->title;
        $quest->question = $request->text;
        $quest->image = $name;
        $quest->path_img = $path;
        
        $quest -> save();
        
        $quest->quest_tag()->attach($request->tag);

        return "success";
    }

    public function show(Request $request)
    {
        $id = $request->id;
        if ($id == 1) {
            $question_all = Question::with('tag','user','community')
            ->withCount('likes','dislikes','votes','answers')->latest()->paginate(6); 
        }
        if ($id == 2) {
            $question_most = Question::with('tag','user','community')
            ->withCount('votes','answers')->latest()->where('id_type',2)->paginate(6);    
        }
        if ($id == 3) {
            $question_unans = Question::with('tag','user','community')
            ->withCount('likes','dislikes','votes','answers')->latest()->where('id_type',1)->paginate(6);   
        }
        if ($id == 4) {
            $question_feature = Question::with('tag','user','community')
            ->withCount('likes','dislikes','votes','answers')->having('likes_count','>', 0)->latest()->simplePaginate(6);  
        }

        return compact('question_all','question_most','question_unans','question_feature','id');
    }

    public function likedislikevote(Request $request)
    {
        $id_user = $request->id;
        $id_quest = $request->id_quest;

        $like = DB::table('tbl_likes')
            ->where('id_quest',$id_quest)->where('id_user',$id_user)->count();
            
        $dislike = DB::table('tbl_dislikes')
            ->where('id_quest',$id_quest)->where('id_user',$id_user)->count();

        $vote = DB::table('tbl_question_votes')
            ->where('id_quest',$id_quest)->where('id_user',$id_user)->count();
            
        if ($like > 0) {
            $disorlike = 'like';
        }
        if ($dislike > 0) {
            $disorlike = 'dislike';
        }
        if ($vote > 0) {
            $votes = 'vote';
        }else{
            $votes = 'unvote';
        }
        
        return response()->json([
            'disorlike' => $disorlike,
            'votes' => $votes
        ]);
    }

    public function likedislikestore(Request $request)
    {
        $id_user = $request->id;
        $id_quest = $request->id_quest;
        $type = $request->type;

        if ($type === 'like') {
            // rmdislike
            DB::table('tbl_dislikes')
            ->where('id_quest',$id_quest)->where('id_user',$id_user)->delete();
            // like
            $like = new Likes();

            $like->id_quest = $id_quest;
            $like->id_user = $id_user;
            $like->save();
        }
        if ($type === 'dislike') {
            // rmlike
            DB::table('tbl_likes')
            ->where('id_quest',$id_quest)->where('id_user',$id_user)->delete();
            // dislike
            $dislike = new Dislikes();

            $dislike->id_quest = $id_quest;
            $dislike->id_user = $id_user;
            $dislike->save();
        }
        if ($type === 'likeremove') {
            // rmlike
            DB::table('tbl_likes')
            ->where('id_quest',$id_quest)->where('id_user',$id_user)->delete();
        }
        if ($type === 'dislikeremove') {
            // rmdislike
            DB::table('tbl_dislikes')
            ->where('id_quest',$id_quest)->where('id_user',$id_user)->delete();
        }
        
        return response()->json("success");
    }
    
    public function fillter(Request $request)
    {
        $id = $request->type;
        $id_community = $request->id_community;
        if ($id == 1) {

            if ($id_community == 0) {
                $question_all = Question::with('tag','user','community')
                                ->withCount('likes','dislikes','votes','answers')
                                ->latest()
                                ->paginate(6); 
            }
            if (!$id_community == 0) {
                
                $question_all = Question::with('tag','user','community')
                                ->withCount('likes','dislikes','votes','answers')
                                ->where('id_comunity',$id_community)
                                ->latest()
                                ->paginate(6); 
            }
        }
        if ($id == 2) {
            if ($id_community == 0) {
                $question_most = Question::with('tag','user','community')
                                ->withCount('likes','dislikes','votes','answers')
                                ->where('id_type',2)
                                ->paginate(6);    
            }
            if (!$id_community == 0) {
                $question_most = Question::with('tag','user','community')
                                ->withCount('likes','dislikes','votes','answers')
                                ->where('id_type',2)
                                ->where('id_comunity',$id_community)
                                ->paginate(6);    
            }
        }
        if ($id == 3) {
            if ($id_community == 0) {
                $question_unans = Question::with('tag','user','community')
                                ->withCount('likes','dislikes','votes','answers')
                                ->where('id_type',1)
                                ->paginate(6);   
            }
            if (!$id_community == 0) {
                $question_unans = Question::with('tag','user','community')
                                ->withCount('likes','dislikes','votes','answers')
                                ->where('id_comunity',$id_community)
                                ->where('id_type',1)
                                ->paginate(6);   
            }
        }
        if ($id == 4) {
            if ($id_community == 0) {
                $question_feature = Question::with('tag','user','community')
                                ->withCount('likes','dislikes','votes','answers')
                                ->having('likes_count','>', 0)
                                ->simplePaginate(6); 
            }
            if (!$id_community == 0) {
                $question_feature = Question::with('tag','user','community')
                                ->withCount('likes','dislikes','votes','answers')
                                ->where('id_comunity',$id_community)
                                ->having('likes_count','>', 0)
                                ->simplePaginate(6);  
                
            }

        }

        return compact('question_all','question_most','question_unans','question_feature','id');
    }

    public function vote(Request $request)
    {
        $id_user = $request->id_user;
        $id_quest = $request->id_quest;
        $type = $request->type;

        if ($type === 'vote') {
            # code...
            $vote = new Question_Votes();
            $vote->id_quest = $id_quest;
            $vote->id_user = $id_user;
            $vote->save();

            $votes = 'succes vote';
        }
        if ($type === 'unvote') {
            # code...
            Question_Votes::where('id_quest',$id_quest)->where('id_user',$id_user)->delete();
            $votes = 'success unvote';
        }
        return response()->json([
            'vote' => $votes,
        ]);
    }

    public function quest_vote()
    {
        $voted = Question::has('votes')->get();

        return response()->json([
            'quest_voted' => $voted,
        ]);
    }
}
