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
    <div class="flex flex-row w-full text-gray-700 dark-mode:text-gray-200 dark-mode:bg-gray-800" style="background: url({{ asset('assets/img/map.jpg') }}); background-repeat: no-repeat; background-position: center; background-size: cover;">
        <div class="flex flex-col">
            <a href="{{ url('/leaderboards') }}" class="w-32 px-4 py-2">
                <img src="{{ asset('/assets/img/leaderboard.png') }}" alt="">
            </a>
            <a href="{{ url('/daily_quests') }}" class="w-32 px-4 py-2">
                <img src="{{ asset('/assets/img/quest.png') }}" alt="">
            </a>
        </div>
        <div class="container flex flex-col m-auto">
            <div class="flex flex-row justify-center mb-5">
                <a href="{{ url('/explore') }}" onclick="playSound();"
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

@if(@$practice_judul)
<dialog id="practiceModal" class="relative z-0 w-screen h-screen bg-transparent">
    <div class="fixed top-0 left-0 z-50 flex items-center justify-center w-full h-full transition-opacity duration-300 bg-gray-900 bg-opacity-50 opacity-0 p-7">
        <div class="flex flex-col bg-white shadow-lg min-w-1xl rounded-xl">
            <div class="px-12 py-5">
                <h2 class="text-3xl font-semibold text-gray-800">Congratulations!</h2>
            </div>
            <div class="flex flex-col items-center w-full bg-gray-200">
                <div class="flex flex-col items-center py-6 space-y-3">
                    <span class="text-lg text-gray-800">You have earned score</span>
                    <div class="flex space-x-3">
                        <h1 class="text-2xl">{{ @$practice_score }}</h1>
                        <p class="text-lg">Time: <span class="font-bold">{{ @$practice_time }}</span></p>
                    </div>
                </div>
                <div class="flex flex-col w-3/4">
                    <!-- Start Regular with text version -->
                    <div
                        class="h-6 mt-5 bg-gray-200 rounded"
                        role="progressbar"
                        :aria-valuenow="width"
                        aria-valuemin="0"
                        aria-valuemax="100"
                        >
                        <div
                            class="h-6 text-sm text-center text-white transition bg-green-400 rounded"
                            :style="`width: ${width}%; transition: width 2s;`"
                            x-text="`${width}%`"
                            >
                        </div>
                    </div>
                    <!-- End Regular with text version -->
                    <button class="py-3 my-8 text-lg text-white bg-gradient-to-r from-purple-500 to-indigo-600 rounded-xl" onclick="closeModal('practiceModal')">Close</button>
                </div>
            </div>
        </div>
    </div>
</dialog>
<script>
    openModal('practiceModal');
    function openModal(key) {
        document.getElementById(key).showModal();
        document.body.setAttribute('style', 'overflow: hidden;');
        document.getElementById(key).children[0].scrollTop = 0;
        document.getElementById(key).children[0].classList.remove('opacity-0');
        document.getElementById(key).children[0].classList.add('opacity-100')
    }

    function modalClose(key) {
        document.getElementById(key).children[0].classList.remove('opacity-100');
        document.getElementById(key).children[0].classList.add('opacity-0');
        setTimeout(function () {
            document.getElementById(key).close();
            document.body.removeAttribute('style');
        }, 100);
    }
</script>
@endif
@endsection
