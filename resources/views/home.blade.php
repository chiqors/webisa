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
            <a href="#" class="w-32 px-4 py-2">
                <img src="{{ asset('/assets/img/leaderboard.png') }}" alt="">
            </a>
        </div>
        <div class="container flex flex-col m-auto">
            <div class="flex flex-row justify-center mb-5">
                <a href="{{ url('/explore') }}"
                    class="w-64 px-4 py-2 text-3xl font-bold text-center text-white bg-blue-500 border-b-4 border-blue-900 rounded hover:border-b-2 hover:border-t-2 hover:border-blue">
                    Explore
                </a>
            </div>
            <div class="flex flex-row justify-center mb-5">
                <a href="{{ url('/practice') }}"
                    class="w-64 px-4 py-2 text-3xl font-bold text-center text-white bg-blue-500 border-b-4 border-blue-900 rounded hover:border-b-2 hover:border-t-2 hover:border-blue">
                    Practice
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
