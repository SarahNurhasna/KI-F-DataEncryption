@extends('main')

@section('container')
<h2>Data Requested</h2>

<p>Data has been requested </br> Check your <a href="inbox">inbox</a> regularly and enter the symmetric key to get the data</p>
    <div class="form-group">
        <input type="age" id="age" required />
    </div>
    <button id="send-button" class="btn btn-rounded" type="submit">Submit</button>
@endsection