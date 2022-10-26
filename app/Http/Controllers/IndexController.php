<?php

namespace App\Http\Controllers;

use App\Models\Post;
use http\Exception\BadConversionException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class IndexController extends Controller
{

    public function __invoke()
    {
        // TODO: Implement __invoke() method.

//        $post = Post::find(1);
//        $photos = $post->photo;
//        $category = $post->category;
//        $tags = $post->tags;
//
//        echo 'title is '.$post->title.'<br>';
//        foreach ($photos as $photo){
//            echo 'photo '.$photo->path.'<br>';
//        }
//        echo $category->name.'<br>';
//        foreach ($tags as $tag){
//            echo 'tags is  '.$tag->name.'<br>';
//        }

        $post = Post::paginate(15);
        return view('test', ['post' => $post]);


    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
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
