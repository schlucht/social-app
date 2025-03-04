<h1>Hello Laravel course</h1>
<p>My firstname is: {{ $firstname }}</p>
<p>My surname is: {{ $surname }}</p>
<p>This year: {{$year}}</p>
<p>@{{ variable }} {{$job}}</p>
<p>@{!! variable !!} {!! $job !!}</p>

<script>
    const h = {{ \Illuminate\Support\Js::from($hobbies) }}
    document.write(h['ski']);
</script>