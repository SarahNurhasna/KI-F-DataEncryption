@extends('layout.main')

@section('container')
    <h1>Hello {{ $name }}, welcome to dashboard!</h1>
    <form action="/action_page.php">
        <input type="file" id="myFile" name="filename">
        <input type="submit">
    </form>  
@endsection