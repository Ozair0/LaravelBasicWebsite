@extends("layouts.app")

@section("content")
<h1>Home</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, placeat rem. Alias commodi consequatur cum inventore laboriosam possimus quidem similique. Ad alias autem deserunt esse non numquam, quam sapiente veniam!</p>
@endsection

@section("sidebar")
    @parent
    <p>This is append to sidebar</p>
@endsection