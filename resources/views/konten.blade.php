@extends('template')

@section('container')
<article class="mb-5 pt-3">
    <h3>{{ $article->title }}</h3>
    <h6>By: <a href="/authors/{{ $article->author->username }}" class="text-decoration-none">{{ $article->author->name }}</a> 
        in <a href="/categories/{{ $article->category->slug }}" class="text-decoration-none">
        {{ $article->category->name }}</a>
    </h6>
    <p>{!! $article->body !!}</p>

    <a href="{{ route('article') }}" class='d-block mt-3'>Back</a>
</article>
@endsection
