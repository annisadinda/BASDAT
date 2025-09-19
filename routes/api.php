<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/example', function () {
    return response()->json(['message' => 'API is working fine!']);
});

Route::get('/data', function () {
    return response()->json(['data' => 'Here is some data']);
});

Route::get('/user/{id}', function ($id) {
    return response()->json(['user' => 'User with ID ' . $id]);
});

Route::post('/submit', function (Request $request) {
    $name = $request->input('name');
    return response()->json(['message' => 'Data received', 'name' => $name]);
});
