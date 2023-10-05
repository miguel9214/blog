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
                    <div class="flex items-center gap-1 text-xs text-gray-900 opacity-75">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                            <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z" clip-rule="evenodd" />
                          </svg>
                          

                        {{$post->user->name}}
                    </div>
                </a>
            @endforeach
        </div>
        {{ $posts->links() }}
    </div>
@endsection
