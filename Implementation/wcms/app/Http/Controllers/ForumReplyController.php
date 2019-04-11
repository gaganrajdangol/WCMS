<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ForumReply;

class ForumReplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=auth()->user();
        $forumreply = new ForumReply();
        $forumreplies = $forumreply->where('userid',$user->userid)->get();
        return view('woodcraft.forum',[
        'forumreply' => $forumreplies
    ]);  


    $order = new Order();
        
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
    public function store(Request $request, $id)
    {
        $forumreply = new ForumReply;
        $forumreply ->reply=$request->reply;
        $forumreply ->postid=$id;
        $forumreply ->userid=$request->userid1;
        $forumreply ->username=$request->username1;
        $forumreply->save();
        return redirect()->to('/post');
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
