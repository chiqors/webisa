<div @click.away="open = false"
    class="flex flex-col flex-shrink-0 w-full text-gray-700 bg-white md:w-64 dark-mode:text-gray-200 dark-mode:bg-gray-800"
    x-data="{ open: false }">
    <div class="flex flex-row items-center justify-center flex-shrink-0 px-8 py-4">
        {{ $avatar }}
    </div>
    <div class="flex flex-col">
        {{ $points }}
    </div>
</div>
