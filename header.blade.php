<h1>Header Page</h1>

{{-- {{$name}} --}}

<br>
<ol>
@foreach ($names as $n)
<br> <li> {{$n }} </li>
    
@endforeach

</ol>

    {{-- key value code --}}

    {{-- @foreach ($names as $key => $values )
    {{$key}} - {{$values}}
        
    @endforeach --}}


    {{-- if array is empty then use this condtion in laraval --}}

    {{-- @forelse ($names as $key => $values)
    {{$key}} - {{$values}}
    @empty

    {{'No Data Is Found'}}
        
    @endforelse --}}