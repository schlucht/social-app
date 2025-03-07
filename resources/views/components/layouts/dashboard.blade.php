<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="{{secure_asset('css/style.css')}}">
    <title>Dashboard</title>
</head>
<body class="text-gray-800 font-inter">
    <div class="fixed left-0 top-0 w-64 h-full bg-gray-900 p-4">
        <a href="/dashbaord" class="flex items-center pb-4 border-b border-b-gray-800">
            <img src="https://placehold.co/32x32" alt="logo" class="w-8 h-8 rounded object-cover">
            <span class="text-lg font-bold text-white ml-3">Logo</span>
        </a>
        <ul>
            <li>
                <x-dashboard.dashboard-link href="/dashboard">Dashboard</x-dashboard.dashboard-link>
                <hr class="bg-gray-400 h-1">
            </li>
            <li>
                <x-dashboard.dashboard-link href="/dashboard">Wetter</x-dashboard.dashboard-link>
                <ul>
                    <li class="text-gray-300 pl-8 ">
                        <a href="/weather-list">
                            <i class="ri-file-list-line"></i>
                            Liste
                        </a>
                    </li>
                    <li class="text-gray-300 pl-8 pb-4">
                        <a href="#">
                            <i class="ri-file-add-line"></i>
                            Neu
                        </a>
                    </li>
                    <hr class="bg-gray-400 h-1">
                </ul>
            </li>
        </ul>
    </div>
    <div class="w-[calc(100%-256px)] ml-64 bg-gray-200 min-h-screen">
        {{ $slot }}
    </div>
</body>
</html>