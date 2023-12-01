@extends('main')

@section('container')
    {{-- @foreach ($latestData as $item) --}}
        <h1>Welcome !</h1>
            {{-- <div class="data-row">
                <label for="name">Name:</label>
                <p>name</p>
            </div>
            <div class="data-row">
                <label for="gender">Gender:</label>
                <p>gender</p>
            </div>
            <div class="data-row">
                <label for="phone">Phone Number:</label>
                <p>phone</p>
            </div>
            <div class="data-row">
                <label for="dob">Date of Birth:</label>
                <p>date</p>
            </div>
            <div class="data-row">
                <label for="address">Address:</label>
                <p>address</p>
            </div>
            <div class="data-row">
                <label for="email">Email Address:</label>
                <p>email</p>
            </div> --}}
    {{-- @endforeach --}}
    <form action="/action_page.php">
        <input type="file" id="myFile" name="filename">
        <input type="submit" id="submit-button">
    </form>  
@endsection