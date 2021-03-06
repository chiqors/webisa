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
            <span class="text-center text-black">Total Point: <span class="font-bold">{{ Auth::user()->total_skor_nilai }} pts</span></span>
        </x-slot>
    </x-sidebar>
    <div class="flex flex-row w-full text-gray-700 bg-red-500 dark-mode:text-gray-200 dark-mode:bg-gray-800">
        <div class="flex flex-col">
            <a href="{{ url('/practice') }}" class="w-24 px-4 py-2" onclick="soundClick();">
                <img src="{{ asset('/assets/img/back.png') }}" alt="">
            </a>
        </div>
        <div class="container flex flex-col items-center justify-center m-auto">
            <h1 class="mb-10 text-3xl font-bold text-white uppercase">{{ $title }}</h1>
            <div class="grid grid-cols-2">
                @foreach ($practices as $prac)
                @php
                $verify = \App\Models\Answer_Practice::where('user_id', Auth::user()->id)->where('practice_id', $prac->id)->get();
                @endphp
                @if($verify->isEmpty())
                <div class="m-5">
                    <a href="{{ url('practice_question/'.$prac->id) }}" onclick="soundClick();"
                        class="px-4 py-2 mx-2 text-lg font-bold text-center text-white bg-blue-500 border-b-4 border-blue-900 rounded w-44 hover:border-b-2 hover:border-t-2 hover:border-blue">
                        {{ $prac->judul_practice }}
                    </a>
                </div>
                @else
                <div class="m-5">
                    <a
                        class="px-4 py-2 mx-2 text-lg font-bold text-center text-white bg-blue-900 border-b-4 border-blue-900 rounded w-44 hover:border-b-2 hover:border-t-2 hover:border-blue">
                        {{ $prac->judul_practice }}
                    </a>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
