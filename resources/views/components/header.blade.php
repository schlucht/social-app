@php
use App\Helpers\Helpers;
@endphp
<header class="bg-violet-900 h-[10vh] flex">
    <nav class="flex flex-row justify-between items-center pl-8">
        <div class="bg-yellow-200">
            <a href="/">
                <img class="inline-block" src="{{Helpers::assets('logos/jago-logo.svg')}}" alt="jagolo">
                <span class="text-white text-2xl font-bold">JAGOLO</span>
            </a>
        </div>
        <div class="flex flex-row justify-between bg-red-200">
            <ul>
                <li><a href="/">Startseite</a></li>
            </ul>
            <ul class="flex justify-around gap-5 py-5">
                <li><x-shared.menu-link path="/" label="Einloggen" /></li>
                <li><x-shared.menu-link path="/" label="Anmelden" /></li>
            </ul>
        </div>
    </nav>
</header
>
