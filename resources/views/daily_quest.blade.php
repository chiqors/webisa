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
                            <div class="text-xl font-bold text-gray-700">Daily Quests</div>
                            <div class="text-sm text-gray-500 font-base">Complete Tasks <span class="font-bold">({{ $count_answer }}/{{ $daily_quests->count() }})</span></div>
                        </div>
                        <div>
                            <div class="text-xl text-gray-700">Refreshes in {{ \Carbon\Carbon::now()->diff(\Carbon\Carbon::today()->addDay())->format('%H Hours %I Minutes') }}</div>
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
                    <div>
                        @php
                            $i = 1;
                        @endphp
                        @foreach($daily_quests as $dq)
                        <div class="px-6">
                            <div
                                class="flex flex-row items-center justify-between h-16 p-4 my-6 border border-gray-100 rounded-lg shadow-md">
                                <div class="flex items-center">
                                    <h1 class="mr-3 text-sm text-3xl font-bold text-green-500">{{ $i }} |</h1>
                                    <div class="ml-2">
                                        <div class="text-sm font-semibold text-gray-600">{{ $dq->judul_daily_quest }}</div>
                                        <div class="text-sm font-light text-gray-500">{!! $dq->pertanyaan !!}</div>
                                    </div>
                                </div>
                                <div>
                                    @php
                                    $status = App\Models\Answer_Daily_Quest::where('daily_quest_id', $dq->id)->where('user_id', Auth::user()->id)->get();
                                    @endphp
                                    @if($status->isEmpty())
                                    <a href="{{ url('daily_quests/question/'.$dq->id) }}" class="flex items-center justify-center p-2 bg-gray-400 rounded-full shadow-md hover:bg-gray-600">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                    </a>
                                    @else
                                    <span class="flex items-center justify-center p-2 bg-green-500 rounded-full shadow-md hover:bg-green-600">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                    </span>
                                    @endif
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
</div>
@endsection
