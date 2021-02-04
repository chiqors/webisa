<div @click.away="open = false"
    class="flex flex-col flex-shrink-0 w-full text-gray-700 bg-white md:w-64 dark-mode:text-gray-200 dark-mode:bg-gray-800"
    x-data="{ open: false }">
    <div class="flex flex-row items-center justify-center flex-shrink-0 px-8 py-4">
        {{ $avatar }}
    </div>
    <div class="flex flex-col mb-9">
        {{ $points }}
    </div>
    <div class="flex flex-col">
        <div class="flex flex-row items-center justify-center">
            <span class="text-sm font-bold text-gray-600">Highest Score</span>
        </div>
        @php
            $current_leaderboard = \App\Models\User::take(3)->orderBy('total_skor_nilai', 'desc')->get();
            $i = 1;
        @endphp
        @foreach($current_leaderboard as $user)
        <div class="px-6">
            <div
                class="flex flex-row items-center justify-between h-16 p-4 my-2 border border-gray-100 rounded-lg shadow-md">
                <div class="flex items-center">
                    <span class="mr-3 font-bold text-green-500 text-md">{{ $i }} |</span>
                    <div class="text-sm font-semibold text-gray-500">{{ $user->username }}</div>
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
