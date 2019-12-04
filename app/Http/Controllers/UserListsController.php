<?php

namespace App\Http\Controllers;

use App\UserLists;
use Illuminate\Http\Request;

class UserListsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        // $user = User::where('email', $request->email)->first();

        $userLists = UserLists::where('user_id', $id)->pluck('mylists')->toArray();
        return $userLists;
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
        $userList = new UserLists();
        $userList->name = $request->name;
        $userList->mylists = $request->mylists;
        $userList->user_id = $request->user_id;
        $userList->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserLists  $userLists
     * @return \Illuminate\Http\Response
     */
    public function show(UserLists $userLists)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserLists  $userLists
     * @return \Illuminate\Http\Response
     */
    public function edit(UserLists $userLists)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserLists  $userLists
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserLists $userLists)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserLists  $userLists
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserLists $userLists)
    {
        //
    }
}
