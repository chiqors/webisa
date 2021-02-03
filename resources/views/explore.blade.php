@extends('layouts.app')

@section('content')
<x-navbar />

<div class="flex flex-row w-full md:flex-row-reverse md:min-h-screen">
    <x-sidebar>
        <x-slot name="avatar">
            <img src="https://ui-avatars.com/api/?name={{ Auth::user()->username }}" />
        </x-slot>
        <x-slot name="points">
            <span class="text-center text-black">{{ Auth::user()->nama_siswa }} ({{ Auth::user()->username }}) </span>
            <span class="text-center text-black">Total Point: {{ Auth::user()->total_skor_nilai }}</span>
        </x-slot>
    </x-sidebar>
    <div class="flex flex-row w-full text-gray-700 bg-red-500 dark-mode:text-gray-200 dark-mode:bg-gray-800">
        <div class="flex flex-col">
            <a href="{{ url('/') }}" class="w-24 px-4 py-2">
                <img src="{{ asset('/assets/img/back.png') }}" alt="">
            </a>
        </div>
        <div class="container flex flex-col m-auto">
            <div class="flex flex-row justify-center mb-5">
                <a href="{{ url('/explore/html') }}"
                    class="w-32 px-4 py-2 mx-2 text-3xl font-bold text-center text-white bg-blue-500 border-b-4 border-blue-900 rounded hover:border-b-2 hover:border-t-2 hover:border-blue">
                    HTML
                </a>
                <a href="{{ url('/explore/css') }}"
                    class="w-32 px-4 py-2 mx-2 text-3xl font-bold text-center text-white bg-blue-900 border-b-4 border-blue-900 rounded hover:border-b-2 hover:border-t-2 hover:border-blue">
                    CSS
                </a>
            </div>
            <div class="flex flex-row justify-center mb-5">
                <a href="{{ url('/explore/js') }}"
                    class="w-32 px-4 py-2 mx-2 text-3xl font-bold text-center text-white bg-blue-900 border-b-4 border-blue-900 rounded hover:border-b-2 hover:border-t-2 hover:border-blue">
                    JS
                </a>
                <a href="{{ url('/explore/php') }}"
                    class="w-32 px-4 py-2 mx-2 text-3xl font-bold text-center text-white bg-blue-900 border-b-4 border-blue-900 rounded hover:border-b-2 hover:border-t-2 hover:border-blue">
                    PHP
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
