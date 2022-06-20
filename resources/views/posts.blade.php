@extends('layout')

@section('content')
    <h1 class="text-4xl font-bold text-center text-underline text-uppercase p-4"><u>My Super Blog</u></h1>
    <div class="lg:grid lg:grid-cols-2">
    <?php if(!empty($posts)){
    foreach ($posts as $post) : ?>
    <article
        class="transition-colors duration-300 hover:bg-gray-200 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
        <div class="py-6 px-5">
            <div class="mt-8 flex flex-col justify-between">
                <header>
                    <div class="mt-4 mb-3">
                        <h1 class="text-3xl text-blue-600">
                            <a href="posts/{{ $post->id }}">{{ $post->title }}</a>
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
                        {{ $post->excerpt }}
                    </p>
                </div>
                <footer class="flex justify-between items-center mt-8">
                    <div class="flex items-center text-sm">
                        <h5 class="font-bold">Written by: <a class="text-blue-600" href="#">Pepa Novák</a></h5>
                    </div>
                </footer>
            </div>
        </div>
    </article>
    <?php endforeach;
    } ?>
    </div>
@endsection
