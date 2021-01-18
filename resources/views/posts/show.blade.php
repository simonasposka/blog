@extends('layouts.app')
@section('content')

<div class="bg-gray-50 py-16 px-4 sm:grid sm:grid-cols-12">
    <div class="sm:col-start-4 sm:col-span-6">
        <a href="/">
            <div class="bg-white text-center px-4 py-3 rounded-sm shadow-sm hover:shadow-md">Back</div>
        </a>

        <div class="bg-white mt-4 px-4 py-6 rounded-sm shadow-sm">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <img class="h-10 w-10 rounded-full" src="https://pbs.twimg.com/profile_images/1194113737092935681/63O1znGw.jpg" alt="author avatar">
                </div>

                <div class="ml-3">
                    <p class="text-sm leading-5 font-medium text-gray-900">John Doe</p>
                    <div class="flex text-sm leading-5 text-gray-500">
                        <time datetime="{{ $post->created_at }}">
                            {{ $post->created_at->diffForHumans() }}
                        </time>
                        <span class="mx-1">&middot;</span>
                        <span>{{ ceil(strlen($post->text) / 863) }} min read</span>
                    </div>
                </div>
            </div>

            <div class="mt-4 rounded-sm overflow-hidden">
                <img class="w-full object-cover" src="https://images.unsplash.com/photo-1602526430780-782d6b1783fa?ixid=MXwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80" alt="blog image">
            </div>

            <h2 class="mt-6 text-4xl leading-10 tracking-tight font-bold text-gray-900 text-center">{{ $post->title }}</h2>
            <p class="mt-6 leading-6 text-gray-500">{{ $post->text }}</p>
        </div>

    </div>
</div>

@endsection
