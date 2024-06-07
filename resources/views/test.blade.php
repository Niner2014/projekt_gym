<h1>{{$heading}}</h1>
@foreach($test as $value)
<<h2>
    {{$value['tytuł']}}
</h2>
<p>
    {{$value['opis']}}
</p>
@endforeach