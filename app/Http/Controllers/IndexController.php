<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Role;
use App\Models\Tag;
use App\Models\User;
use App\Models\UserInformation;
use http\Exception\BadConversionException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class IndexController extends Controller
{

    public function __invoke()
    {
        // TODO: Implement __invoke() method.
//        $user = User::findorfail(8);
//        $posts = $user->posts;


//        foreach ($posts as $post) {
//            echo $post->title . '<br>';
//            echo $post->content . '<br>';
//        }


//        $post = Post::findorfail(3);
//        $category = $post->category;
//            echo $post->title;
//            echo '<br> this is a '.$category->name;

//            $post = Post::find(4);
//            $tags = $post->tags;
//            $tag = Tag::find(2);
//
//            dd($post->tags);

        $post = Post::find(1);
        dd($post->photo);




    }

    public function index(){
//        return view('index');
//        return Http::get('harutmovsisyan.net');


    }
}
