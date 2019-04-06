@extends("layouts.app")

@section("content")
<h1>Home</h1>
@endsection

@section("sidebar")
    @parent
    <p>This is append to sidebar</p>
@endsection