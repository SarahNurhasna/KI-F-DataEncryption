@extends('main')

@section('container')
    <h2>Request Data</h2>
    <div class="form-container">
        {{-- from --}}
    <form id="data-form" action="{{ route('request', ['userId' => $userId])}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="emailSender">Your Email</label> </br>
            <input type="email" name="emailsender" id="email" required />
        </div>

        <div class="form-group">
            <label for="passwordSender">Your Password</label></br>
            <input type="password" name="password" id="age" required />
        </div>
        <div class="form-group">
            <label for="emailReceiver">Email Receiver</label></br>
            <input type="email" name="emailreceiver" id="age" required />
        </div>
    </form>
</div>
<button id="send-button" class="btn btn-rounded" type="submit">Send</button>
<script>
    // document.getElementById("send-button").addEventListener("click", function (event) {
    //     // Mengarahkan pengguna ke halaman lain (ganti "dashboard.html" dengan halaman tujuan yang sesuai)
    //     window.location.href = "datarequested";
    //     });
</script>
@endsection