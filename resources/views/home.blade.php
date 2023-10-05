@extends('template')

@section('content')
<div class="relative px-20 py-16 mb-8 overflow-hidden bg-gray-900 rounded-lg">
    <span class="px-2 py-1 text-xs text-gray-700 uppercase bg-gray-400 rounded-full">Publicaciones.</span>
    <h1 class="mt-4 text-3xl text-white">Blog</h1>
    <p class="mt-2 text-sm text-gray-400">Las mejores publicaciones las encuentras en este lugar.</p>
    <img src="{{asset('images/blog2.png')}}" class="absolute -right-10 -bottom-20 opacity-20">
</div>


    <div class="px-4">
        <h1 class="mb-8 text-2xl text-gray-900">Contenido tecnico</h1>
        <div class="grid grid-cols-1 gap-4 mb-4">
            @foreach ($posts as $post)
                <a href="{{route('post', $post->slug )}}" class="px-6 py-4 bg-gray-100 rounded-lg">
                    <p class="flex items-center gap-2 text-xs">
                        <span class="px-2 py-1 text-gray-700 uppercase bg-gray-200 rounded-full ">Tutorial</span>
                        <span>{{ $post->created_at->format('d/m/y') }}</span>

                    </p>
                    <h2 class="mt-2 text-lg text-gray-900 ">{{ $post->title }}</h2>
                </a>
            @endforeach
        </div>
        {{ $posts->links() }}
    </div>
@endsection
