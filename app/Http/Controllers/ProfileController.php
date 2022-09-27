<?php

namespace App\Http\Controllers;

use App\Answer;
use Illuminate\Http\Request;
use App\Question;
use App\User_Detail;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ex_profile.index');
    }
    public function editShow()
    {
        return view('ex_edit.index');
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
    public function showQuest(Request $request)
    {
        $quest = DB::table('questions')->where('id_user_dil',$request->id)->paginate(3);
        $answer = DB::table('answers')->where('id_user_dil',$request->id)->paginate(3);
        $count_quest = DB::table('questions')->where('id_user_dil',$request->id)-> count();
        $count_answer = DB::table('answers')->where('id_user_dil',$request->id)-> count();
        // dd($answer);
        return compact('quest','count_quest','answer','count_answer');

    }

    public function storeProfile(Request $request)
    {

        $id = $request->id;
        $nama = $request->nama;
        $gender = $request->gender;
        $kelas = $request->kelas;

        $nama_new = User::find($id);
        $cek = User_Detail::where('id_user',$id)->first();
        
        if ($cek == null) {
            $profile_new = new User_Detail();

            
                # code...
                if ($gender != null) {
                    # code...
                    
                    $profile_new->gender = $gender;
                    
                }
                if ($kelas != null) {
                    # code...
                    
                    $profile_new->kelas = $kelas;
                    
                }


                $profile_new->id_user = $id;
            

            $profile_new->save();
            
            if ($nama != null) {
                # code...
                $nama_new->name = $nama;
                $nama_new->save();
                
            }

            return "success";

        }else{

                $nama_user = User::find($id);
                $idn = User_Detail::where('id_user',$id)->pluck('id');
                foreach ($idn as $idn ) {
                    # code...
                }
        
                $profile_update = User_Detail::find($idn);

                if ($gender != null) {
                    # code...
                    
                    $profile_update->gender = $gender;
                    
                }
                if ($kelas != null) {
                    # code...
                    
                    $profile_update->kelas = $kelas;
                    
                }


                $profile_update->save();

                

                if ($nama != null) {
                    # code...

                    // $nama = "Joko";
                    $nama_user->name = $nama;
                    $nama_user->save();
                    
                }
            
                
            
            return "faild";

        }



        return $request;
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
    public function updateProfile(Request $request)
    {
        if ($request->type === 'pw') {
            $password = User::find($request->id);
            $p = User::find($request->id)->pluck('password');
            $pass = $p[0];
            if (Hash::check($request->password,$pass)) {
                $new_pass = bcrypt($request->new_password);
                $password->password = $new_pass;
                $password->password_showed = $request->new_password_again;

                $password->update();
                return "pass sc";

            }else{
                return "pass ggl";
            }

        }elseif ($request->type === 'em') {

            $email = User::find($request->id);
            $email->email = $request->email;
            $email->update();
            return "ema";

        }else {
            
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
                
            $u_dil = User_Detail::find($request->id);
            if ($u_dil == null) {
                $u_dil = new User_Detail();
            }

            $u_dil->id_user = $request->id;
            $u_dil->detail = $request->text;
            $u_dil->image = $name;
            $u_dil->path_img = $path;
            
            $u_dil -> save();
        };
    

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
        //
    }
}
