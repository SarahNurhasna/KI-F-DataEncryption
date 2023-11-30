@extends('main')

@section('container')
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
            </div>
    <form action="/action_page.php">
        <input type="file" id="myFile" name="filename">
        <input type="submit" id="submit-button">
    </form>  
@endsection