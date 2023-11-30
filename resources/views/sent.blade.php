@extends('layout.main')

@section('container')
    <h1>Sent Your Private Data</h1>
    <div class="form-group">
        <label for="age">Email Sender</label>
        <input type="age" id="age" required />
    </div>
    <div class="form-group">
        <label for="age">Password Sender</label>
        <input type="age" id="age" required />
    </div>
    <div class="form-group">
        <label for="age">Email Receiver</label>
        <input type="age" id="age" required />
    </div>
    <div class="form-group">
        <label for="age">Symetric key</label>
        <input type="age" id="age" required />
    </div>
    <input class="btn btn-primary" type="submit" value="Sent">
@endsection