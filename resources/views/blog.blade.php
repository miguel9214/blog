@extends('template')


@section('content')
    @foreach ($posts as $post)
        <p>
            <strong>{{ $post->id }}</strong>
            <a href="{{route('post',$post->slug)}}">
                {{ $post->title }}
            </a>
            <br>
            <span>{{$post->user->name}}</span>
        </p>
    @endforeach

    {{-- Esto me ayuda a paginar los datos que vienen por consulta --}}
    {{$posts->links()}}
@endsection
