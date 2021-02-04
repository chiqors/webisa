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
        <div class="container flex flex-col m-auto">
            <div class="flex flex-row justify-center mb-5">
                <div class="w-full bg-white rounded-lg shadow md:max-w-4xl">
                    <div class="flex items-center justify-between h-12 m-4 border-b border-gray-200">
                        <div>
                            <div class="text-xl font-bold text-gray-700">Leaderboards</div>
                            <div class="text-sm text-gray-500 font-base">All Players</div>
                        </div>
                        <div>
                            <div class="flex items-center justify-center w-full rounded-full shadow-md">
                                <label htmlFor="toogleA" class="flex items-center cursor-pointer">
                                    <div class="flex items-center">
                                        <div
                                            class="absolute flex items-center justify-center w-10 h-10 bg-white bg-red-400 rounded-full shadow toggle__dot">
                                            <a class="w-6 h-6 text-white" href="{{ url('/') }}">
                                                <svg fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                    @php
                        $i = 1;
                    @endphp
                    @foreach($users as $user)
                    <div class="px-6">
                        <div
                            class="flex flex-row items-center justify-between h-16 p-4 my-6 border border-gray-100 rounded-lg shadow-md">
                            <div class="flex items-center">
                                <h1 class="mr-3 text-sm text-3xl font-bold text-green-500">{{ $i }} |</h1>
                                <img class="w-12 h-12 rounded-full" src="https://ui-avatars.com/api/?name={{ $user->username }}" alt="user"/>
                                <div class="ml-2">
                                    <div class="text-sm font-semibold text-gray-600">{{ $user->nama_siswa }}</div>
                                    <div class="text-sm font-light text-gray-500">{{ $user->username }}</div>
                                </div>
                            </div>
                            <div>
                                <span class="text-sm font-bold text-gray-600">{{ $user->total_skor_nilai }} pts</span>
                            </div>
                        </div>
                    </div>
                    @php
                        $i++;
                    @endphp
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
