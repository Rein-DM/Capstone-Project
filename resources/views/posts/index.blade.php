@extends('layouts.app1')
  
@section('title', 'Announcements')
  
@section('contents')


<link rel="stylesheet" href="{{ asset('admin_assets/css/style.css') }}">

<?php /*----------------------------------------Admin-------------------------------------------------------*/ ?>

@if (Auth::user()->role=='Admin')
    <a href="{{ route('posts.create') }}" class="btn btn-primary">Add Announcements</a>

@endif

<div class="bg-gray-50 py-16 px-4 sm:px-6 lg:px-8">
    <div class="text-center">
            <a href="{{ route('dashboard') }}"></a>
    </div><br>

    {{-- Success Alert --}}
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif


    {{-- Posts Wrapper --}}
    <div class="mt-12 grid gap-5 max-w-lg mx-auto lg:grid-cols-3 lg:max-w-none">
        @foreach ($posts as $post)
            {{-- Post --}}
            <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                {{-- Header --}}
                <div class="flex-shrink-0">
                </div>

                {{-- Content --}}
                <div class="flex-1 p-6 flex flex-col justify-between">
                    <div class="flex-1">
                        <a href="/posts/{{ $post->id }}"></a>

                            <h3 class="mt-2 text-xl leading-7 font-semibold text-gray-900">{{ $post->title }}</h3>
                        <p class="mt-3 text-base leading-6 text-black-500">
                            @if (strlen($post->text) > 200)
                                {{ substr($post->text, 0, 200) }}...
                            @else
                                {{ $post->text }}
                            @endif
                        </p>
                    </div>

                    <div class="mt-6 flex items-center">
                        <div class="flex-shrink-0">
                        </div>

                        <div class="ml-3">
                            <p class="text-sm leading-5 font-medium text-gray-900">Admin</p>
                            <div class="flex text-sm leading-5 text-black-500">
                                <time datetime="{{ $post->created_at }}">
                                    {{ $post->created_at->diffForHumans() }}
                                </time>
                                <span class="mx-1">&middot;</span>
                                <span>{{ ceil(strlen($post->text) / 863) }} min read</span><br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection






