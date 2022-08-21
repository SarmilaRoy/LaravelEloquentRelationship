<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Phone;
use App\Models\Post;
use App\Models\Comment;


Route::get('/', function () {
    $phone=User::find(1);
    $phone=User::find(1)->phone;
    // return $phone;

    $user=Phone::find(1);
    $user=Phone::find(1)->user;
    //return $user;

    $users=User::all();
    $phones=Phone::all();
    //return $users;


    //one to many

    $comments=Post::find(1);
    $comments=Post::find(1)->comments;
     //return $comments;

    $post=Comment::find(1);
    $post=Comment::find(5)->post;
    //return $post;

    //$post=Post::all();
    $post=Post::with('comments')->get();
    $comments=Comment::all();
    //echo '<pre>';
   // print_r($post);
    //return $post;



    return view('welcome',compact('comments'));

});
