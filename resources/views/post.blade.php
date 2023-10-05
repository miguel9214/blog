@extends('template')

@section('content')
<div class="max-w-3xl mx-auto">
    <h1 class="mb-8 text-5xl text-gray-900">{{ $post->title }}</h1>
    <p class="text-lg leading-loose text-gray-600 "> {{ $post->body }}</p>

</div>
@endsection
