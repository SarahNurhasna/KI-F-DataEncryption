@extends('main')

@section('container')
    <h2>Sent Data</h2>
    <div class="form-container">
    <form id="data-form">
        <div class="form-group">
            <label for="emailSender">Your Email</label> </br>
            <input type="email" id="email" required />
        </div>

        <div class="form-group">
            <label for="passwordSender">Your Password</label></br>
            <input type="password" id="age" required />
        </div>
        <div class="form-group">
            <label for="emailReceiver">Email Receiver</label></br>
            <input type="email" id="age" required />
        </div>
        <div class="form-group">
            <label for="symmetrickey">Symmetric Key</label></br>
            <input type="symmetrickey" id="age" required />
        </div>
    </form>
</div>
<button id="send-button" class="btn btn-rounded" type="submit">Send</button>
<script>
    document.getElementById("send-button").addEventListener("click", function (event) {
        // Mengarahkan pengguna ke halaman lain (ganti "dashboard.html" dengan halaman tujuan yang sesuai)
        window.location.href = "datarequested";
        });
</script>
@endsection