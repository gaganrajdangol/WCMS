<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Forum;
use App\ForumReply;
use DB;


class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forum = DB::table("forum")->get();

        foreach ($forum as $forums) {
            $post_id = $forums->postid;

            $forumreply =  DB::table("forumreply")
             ->where('forumreply.postid','=',$post_id)
             ->get()
             ->toArray();
            return view('woodcraft.forum',compact(
        'forum','forumreply')); 
        }


        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('woodcraft.forum');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $forum = new Forum;
        $forum ->post=$request->post;
        $forum ->reply=$request->reply;
        $forum ->userid=$request->userid;
        $forum ->usernme=$request->usernme;
        $forum->save();
        return redirect()->to('/post')->with('success','Post Created');
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
