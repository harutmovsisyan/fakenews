@extends('layouts.base')

@section('content')
    <div class="page_layout clearfix">
        @foreach($post as $item)
            <p> {{$item->id.' '.$item->title}}</p>
        @endforeach
    </div>
    {{ $post->links() }}


@endsection
