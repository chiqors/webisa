@extends('layouts.app')

@section('content')
<x-navbar />

{{-- <div class="fixed bottom-0 left-0 px-6 py-4 mb-4 ml-2 text-white bg-pink-500 border-0 rounded">
    <span class="inline-block mr-5 text-xl align-middle">
        <i class="fas fa-bell"></i>
    </span>
    <span class="inline-block mr-8 align-middle">
        <b class="capitalize">+20!</b> You have earned points!
    </span>
    <button
        class="absolute top-0 right-0 mt-4 mr-6 text-2xl font-semibold leading-none bg-transparent outline-none focus:outline-none"
        onclick="closeAlert(event)">
        <span>×</span>

    </button>
</div>
<script>
    function closeAlert(event) {
        let element = event.target;
        while (element.nodeName !== "BUTTON") {
            element = element.parentNode;
        }
        element.parentNode.parentNode.removeChild(element.parentNode);
    }

</script> --}}

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
            <a href="{{ url('/daily_quests') }}" class="w-24 px-4 py-2" onclick="soundClick();">
                <img src="{{ asset('/assets/img/back.png') }}" alt="">
            </a>
        </div>
        <div class="container flex flex-col m-5">
            <div class="flex flex-col">
                <div>
                    <div class="flex flex-row justify-between">
                        <h1 class="pb-5 text-5xl font-bold">{{ $daily_quest->judul_daily_quest }}</h1>
                        <span id="timer" class="p-5 text-lg font-semibold text-white">00:00:00</span>
                    </div>
                    <div class="p-5 bg-gray-200">
                        <p>{!! $daily_quest->pertanyaan !!}
                        </p>
                    </div>
                </div>
                <div>
                    <form method="POST" action="{{ route('daily_quest_answer', $daily_quest->id) }}">
                        @csrf
                        <div class="flex flex-col bg-white border rounded shadow box">
                            <div class="px-3 py-2 border-b box__title bg-grey-lighter"><h3 class="text-sm font-medium text-grey-darker">Answer</h3></div>
                            <input id="timer_hidden" type="hidden" name="timer">
                            <textarea class="flex-1 p-2 m-1 bg-transparent text-grey-darkest" name="answer"></textarea>
                            <button onclick="soundClick();" type="submit" class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>

    var h1 = document.getElementById('timer'),
        seconds = 0, minutes = 0, hours = 0,
        t;

    function add() {
        seconds++;
        if (seconds >= 60) {
            seconds = 0;
            minutes++;
            if (minutes >= 60) {
                minutes = 0;
                hours++;
            }
        }

        h1.textContent = (hours ? (hours > 9 ? hours : "0" + hours) : "00") + ":" + (minutes ? (minutes > 9 ? minutes : "0" + minutes) : "00") + ":" + (seconds > 9 ? seconds : "0" + seconds);
        document.getElementById("timer_hidden").value = h1.textContent;
        timer();
    }
    function timer() {
        t = setTimeout(add, 1000);
    }
    timer();

</script>
@endsection
