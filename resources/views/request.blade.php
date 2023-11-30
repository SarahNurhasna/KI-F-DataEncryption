@extends('main')

@section('container')
    <h2>Request Data</h2>
    <div class="form-container">
    <form id="data-form">
        <div class="form-group">
            <label for="emailSender">Email Sender</label> </br>
            <input type="email" id="email" required />
        </div>
        <div class="form-group">
            <label for="passwordSender">Password Sender</label></br>
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
document.getElementById("send-button").addEventListener("submit", function (event) {
        // Mengarahkan pengguna ke halaman lain (ganti "dashboard.html" dengan halaman tujuan yang sesuai)
        window.location.href = "requested";
        });
</script>
@endsection