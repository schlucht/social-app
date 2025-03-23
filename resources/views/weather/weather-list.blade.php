<x-layouts.dashboard>

    <h2 class="text-2xl font-bold py-8 ml-6">{{$title}}</h2>
    <a href="/weather/new" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 ml-6 cursor-pointer">Neuer Eintrag</a>

    <div class="m-6">
        <table class="min-w-full border-collapse border border-gray-200 shadow-md">
            <thead>
                <tr class="bg-gray-100">
                    <th class="border border-gray-300 px-4 py-2 text-left">Datum</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Wetter</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Icon</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Beschreibung</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Aktionen</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $weather)
                    <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2">{{ $weather->created_at }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $weather->type }}</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $weather->icon }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $weather->description }}</td>
                        <td class="border border-gray-300 px-4 py-2">
                            <a href="/weather/{{ $weather->id }}/edit" class="text-blue-500 hover:underline">Bearbeiten</a>
                            <form action="/weather/{{ $weather->id }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:underline ml-2">Löschen</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-layouts.dashboard>
