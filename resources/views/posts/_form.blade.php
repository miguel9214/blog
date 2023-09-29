@csrf
<div class="mb-4">
    <label class="block text-gray-700 font-bold mb-2">Título</label>
    <span class="text-xs text-red-600">
        @error('title')
            {{ $message }}
        @enderror
    </span>
    <input type="text" name="title"
        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
        placeholder="Ingrese el título" value="{{ old('title', $post->title) }}">
</div>
<div class="mb-4">
    <label class="block text-gray-700 font-bold mb-2">Url amigable</label>
    <span class="text-xs text-red-600">
        @error('slug')
            {{ $message }}
        @enderror
    </span>
    <input type="text" name="slug"
        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
        placeholder="Ingrese el título" value="{{ old('slug', $post->slug) }}">
</div>
<div class="mb-6">
    <label class="block text-gray-700 font-bold mb-2">Contenido</label>
    <span class="text-xs text-red-600">
        @error('body')
            {{ $message }}
        @enderror
    </span>
    <textarea name="body"
        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" rows="5"
        placeholder="Ingrese el contenido">{{ old('body', $post->body) }}</textarea>
</div>
<div class="flex items-center justify-between">
    <a href="{{ route('posts.index') }}" class="text-indigo-600">Volver</a>
    <input type="submit"
        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline-blue active:bg-blue-800"
        value="Enviar">
</div>
