@extends('main')

@section('container')
<h2>Data Requested</h2>

<p>Data has been requested </br> Enter symmetric key to open data</p>
    <div class="form-group">
        <input type="age" id="age" required />
    </div>
    <button id="send-button" class="btn btn-rounded" type="submit">Submit</button>
@endsection