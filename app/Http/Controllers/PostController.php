<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function __invoke()
    {
        // TODO: Implement __invoke() method.
        echo 'hii';
        $data = User::find(1);
        dd($data);
    }
}
