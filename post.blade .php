{{-- @include('pages.header',['name'=>'Abdullah']) --}}

{{-- instead of this we can also use arrays in include file --}}

@php
    $fruits=['Orange','Apple','Bannan','Grapes']
@endphp

{{-- @include('pages.header',['names'=>$fruits]) --}}


{{-- use condtion if true then include file --}}

   @includeWhen(true,'pages.header',['names'=>$fruits])



   {{-- if you want to show value or key both show in output you can write this code --}}

    {{-- @php
    $fruits=["one"=>Orange","two"=>"Apple","three"=>"Bannan"];
    @endphp --}}

   <h1>Wellcome Page</h1>

{{-- @include('pages/footer') --}}


   {{-- They can show opsite result --}}

    @includeUnless(true,'pages.footer' )




    @extends('layout.masterlayout')

    @section('content')
    <h2>home page</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas praesentium, consequatur consequuntur hic nulla accusantium qui voluptas iure distinctio voluptatum expedita quisquam fugiat amet, quam debitis minima ullam, enim ducimus.</p>
        
    @endsection