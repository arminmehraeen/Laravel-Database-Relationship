<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $users = [];
        if($request->has('posts')) {
            $users =  User::with('posts')->withCount('likedPosts')->get() ;
        }

        if($request->has('likes')) {
            $users = User::withCount('posts')->with('likedPosts')->get() ;
        }

        $users = User::withCount('posts')->withCount('likedPosts')->get() ;

        return view('users.index',compact('users')) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::with('posts')->find($id);
        return view('users.show',compact('user')) ;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
