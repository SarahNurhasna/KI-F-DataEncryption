@extends('main')

@section('container')
<<<<<<< HEAD
    <h1>Welcome, !</h1>
            <div class="data-row">
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
=======
    <h1>Welcome, {{ $decryptedName }}!</h1>
            <div class="data-row">
                <label for="name">Name:</label>
                <p>{{ $decryptedName }}</p>
            </div>
            <div class="data-row">
                <label for="gender">Gender:</label>
                <p>{{ $decryptedGender }}</p>
            </div>
            <div class="data-row">
                <label for="phone">Phone Number:</label>
                <p>{{ $decryptedPhone }}</p>
            </div>
            <div class="data-row">
                <label for="dob">Date of Birth:</label>
                <p>{{ $decryptedDob }}</p>
            </div>
            <div class="data-row">
                <label for="address">Address:</label>
                <p>{{ $decryptedAddress }}</p>
            </div>
            <div class="data-row">
                <label for="email">Email Address:</label>
                <p>{{ $decryptedEmail }}</p>
>>>>>>> 65da54a3456d3f3088fadf036f0d57d5d7e7a7a5
            </div>
    <form action="/action_page.php">
        <input type="file" id="myFile" name="filename">
        <input type="submit" id="submit-button">
    </form>  
@endsection