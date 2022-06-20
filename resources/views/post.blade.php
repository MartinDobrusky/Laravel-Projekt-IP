@extends('layout')

@section('content')
    <article
        class="transition-colors duration-300 hover:bg-gray-200 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
        <div class="py-6 px-5">
            <div class="mt-8 flex flex-col justify-between">
                <header>
                    <div class="mt-4 mb-3">
                        <h1 class="text-3xl font-bold">
                            {{ $post->title }}
                        </h1>
                        <span class="mt-2 block text-gray-400 text-s">
                            Published: <time>{{ date_format($post->created_at, 'g:ia \o\n l jS F Y') }}</time>
                        </span>
                        <span class="mt-2 block text-gray-400 text-s">
                            Category: <a class="text-blue-600" href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
                        </span>
                    </div>
                </header>
                <div class="text-m mt-4">
                    <p>
                        {!! $post->body !!}
                    </p>
                </div>
                <footer class="flex justify-between items-center mt-8">
                    <div class="flex items-center text-sm">
                        <h5 class="font-bold">Written by: <a class="text-blue-600" href="#">Pepa Novák</a></h5>
                    </div>
                </footer>
                <a class="text-red-600 flex justify-between items-center mt-8" href="/">Go Back</a>
            </div>
        </div>
    </article>
@endsection

