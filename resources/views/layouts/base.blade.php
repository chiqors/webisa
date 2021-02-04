<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @hasSection('title')

            <title>@yield('title') - {{ config('app.name') }}</title>
        @else
            <title>{{ config('app.name') }}</title>
        @endif

        <!-- Favicon -->
		<link rel="shortcut icon" href="{{ url(asset('favicon.ico')) }}">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ url(mix('css/app.css')) }}">
        @livewireStyles

        <!-- Scripts -->
        <script src="{{ url(mix('js/app.js')) }}" defer></script>
        <!-- Background Sound -->
        <audio id="back_audio" src="{{ asset('assets/audio/background.aac') }}" preload="none" loop="true" autobuffer>
        <!-- Misc Sound -->
        <audio id="clickSound" src="{{ asset('assets/audio/click.mp3') }}"></audio>
        </audio>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

    <body>
        @yield('body')

        <div
            class="fixed flex items-center justify-center w-16 h-16 bg-white bg-red-400 rounded-full shadow bottom-5 left-5" style="cursor: pointer;">
            <a id="toggle_music" onclick="toggleBG()" class="w-6 h-6 text-white">
            </a>
        </div>
        <script>
            function setCookie(c_name,value,exdays)
            {
                var exdate=new Date();
                exdate.setDate(exdate.getDate() + exdays);
                var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
                document.cookie=c_name + "=" + c_value;
            }

            function getCookie(c_name)
            {
                var i,x,y,ARRcookies=document.cookie.split(";");
                for (i=0;i<ARRcookies.length;i++)
                {
                x=ARRcookies[i].substr(0,ARRcookies[i].indexOf("="));
                y=ARRcookies[i].substr(ARRcookies[i].indexOf("=")+1);
                x=x.replace(/^\s+|\s+$/g,"");
                if (x==c_name)
                    {
                    return unescape(y);
                    }
                }
            }

            var song = document.getElementsByTagName('audio')[0];
            var played = 1;
            var tillPlayed = getCookie('timePlayed');

            var el = document.getElementById('toggle_music');
            var content = '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"></path></svg>';
            el.innerHTML = content;

            function update()
            {
                if(played == 1){
                    if(tillPlayed){
                        song.currentTime = tillPlayed;
                        song.play();
                        played = 2;
                    } else {
                        song.play();
                        played = 2;
                    }
                } else if(played == 3) {
                    song.pause();
                    setCookie('timePlayed', song.currentTime);
                } else {
                    setCookie('timePlayed', song.currentTime);
                }
            }
            var toggle_msc = 0;
            function toggleBG() {
                // re-continue play music on action
                if(toggle_msc == 1) {
                    played = 1
                    content = '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"></path></svg>';
                    toggle_msc -= 1;
                // stop music on action
                } else {
                    played = 3;
                    content = '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z" clip-rule="evenodd"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2"></path></svg>';
                    toggle_msc += 1;
                }
                el.innerHTML = content;
            }
            setInterval(update,10);

            function clickAction() {
                var sound = document.getElementById("clickSound");
                sound.play();
            }
        </script>
        @livewireScripts
    </body>
</html>
