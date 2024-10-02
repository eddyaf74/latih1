<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', function () {
    // dump(User::all());
    // return view('users', $users = User::all());
    foreach(User::all() as $user) {
        dump($user->name);
        // dump($user->email);
    }
    // return view('users', $users = User::all())
});
