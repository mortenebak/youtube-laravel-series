<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $name = "John";
        return view('helloworld', [
            'name' => $name,
        ]);
    }
}
