@extends('main')

@section('container')
    <h2>Request Data</h2>
    <div class="form-container">
    <form id="data-form">
        <div class="form-group">
<<<<<<< HEAD
            <label for="emailSender">Your Email</label> </br>
            <input type="email" id="email" required />
        </div>

        <div class="form-group">
            <label for="passwordSender">Your Password</label></br>
=======
            <label for="emailSender">Email Sender</label> </br>
            <input type="email" id="email" required />
        </div>
        <div class="form-group">
            <label for="passwordSender">Password Sender</label></br>
>>>>>>> 65da54a3456d3f3088fadf036f0d57d5d7e7a7a5
            <input type="password" id="age" required />
        </div>
        <div class="form-group">
            <label for="emailReceiver">Email Receiver</label></br>
            <input type="email" id="age" required />
        </div>
    </form>
</div>
<button id="send-button" class="btn btn-rounded" type="submit">Send</button>
<script>
<<<<<<< HEAD
    document.getElementById("send-button").addEventListener("click", function (event) {
=======
document.getElementById("send-button").addEventListener("submit", function (event) {
>>>>>>> 65da54a3456d3f3088fadf036f0d57d5d7e7a7a5
        // Mengarahkan pengguna ke halaman lain (ganti "dashboard.html" dengan halaman tujuan yang sesuai)
        window.location.href = "datarequested";
        });
</script>
@endsection