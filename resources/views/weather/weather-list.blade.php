<x-layouts.dashboard>
    <h2>{{$title}}</h2>
    <table>
        <tr>
            <th>Datum</th>
            <th>Wetter</th>
            <th>Temperatur</th>
            <th>Description</th>
        </tr>
        <tr>
            <td></td>
            <td>schön</td>
            <td>5.5</td>
            <td>Wurde gegen Mittag schlechter</td>
        </tr>
    </table>
    @foreach($data as $weather)
        @php
            echo $weather->type . "<br>";
            echo $weather->created_at . "<br>";
        @endphp
    @endforeach
</x-layouts.dashboard>