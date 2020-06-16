@extends('layouts.main')

@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <img src="/img/parasite.jpg" alt="Parasite" class="w-64 md:w-96">
            <div class="ml-24">
                <h2 class="text-4xl font-semibold">Parasite (2019)</h2>
                <div class="flex flex-wrap items-center text-gray-400 text-sm">
                    <i class="fas fa-star fill-current text-yellow-500"></i>
                    <span class="ml-1">85%</span>
                    <span class="mx-2">|</span>
                    <span>Feb 20, 2020</span>
                    <span class="mx-2">|</span>
                    <span>Action, Thriller, Drama</span>
                </div>
                <p class="text-gray-300 mt-8">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur dicta, dolor et eum eveniet
                    exercitationem facilis fugit illum ipsum iure iusto laboriosam, modi mollitia nesciunt numquam quam
                    tempora. Harum ipsum necessitatibus nesciunt provident rem repudiandae tempora, temporibus! A
                    accusantium deserunt eum, excepturi fuga impedit inventore ipsa quae sit, suscipit voluptatibus?
                </p>
                <div class="mt-12">
                    <h4 class="text-white font-semibold">Featured Cast</h4>
                    <div class="flex mt-4">
                        <div>
                            <div>Bong Joon-ho</div>
                            <div class="text-sm text-gray-400">Screenplay, Director, Story</div>
                        </div>
                        <div class="ml-8">
                            <div>Han Jin-won</div>
                            <div class="text-sm text-gray-400">Screenplay</div>
                        </div>
                    </div>
                </div>
                <div class="mt-12">
                    <button
                        class="flex items-center bg-yellow-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-yellow-600 transition ease-in-out duration-150">
                        <i class="fas fa-play-circle"></i>
                        Play Trailer
                    </button>
                </div>
            </div>
        </div>
    </div>
<div class="movie-cast border-b border-gray-800">
    <div class="container mx-auto px-4 py-16">
        <h2 class="text-4xl font-semibold">Cast</h2>
    </div>
</div>
@endsection
