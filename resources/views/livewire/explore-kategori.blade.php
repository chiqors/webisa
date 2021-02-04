<div>
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
                <span class="text-center text-black">{{ Auth::user()->nama_siswa }} ({{ Auth::user()->username }})
                </span>
                <span class="text-center text-black">Total Point: {{ Auth::user()->total_skor_nilai }}</span>
            </x-slot>
        </x-sidebar>
        <div class="flex flex-row w-full text-gray-700 bg-red-500 dark-mode:text-gray-200 dark-mode:bg-gray-800">
            <div class="container flex flex-col mt-5">
                <div class="flex flex-col">
                    <a href="{{ url('/explore') }}" class="w-24 px-4 py-2" onclick="soundClick();">
                        <img src="{{ asset('/assets/img/back.png') }}" alt="">
                    </a>
                </div>
                <div class="grid grid-cols-3 m-5">
                    <div class="col-span-2">
                        <h1 class="pb-5 text-5xl font-bold uppercase">{{ $kategori }}</h1>
                        <div class="w-full p-5 bg-white rounded-lg shadow md:max-w-4xl">
                            <p>{!! @$isi_materi ? $isi_materi : 'Halaman utama materi' !!}
                            </p>
                        </div>
                    </div>
                    <div class="ml-5">
                        <div>
                            <ul>
                                <li class="p-5 mb-2 bg-gray-200 rounded-lg shadow">
                                    <a href="{{ url('/explore/'.$kategori) }}">Home</a>
                                </li>
                                @foreach ($explores as $ex)
                                <li class="p-5 mb-2 bg-gray-200 rounded-lg shadow">
                                    <a style="cursor: pointer" onclick="soundClick();"
                                        wire:click="show({{ $ex->id }})">{{ $ex->judul_materi }}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
