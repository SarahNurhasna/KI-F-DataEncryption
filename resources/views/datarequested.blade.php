@extends('main')

@section('container')
    <div class="data-requested">
        <h2>Data Requested</h2>

        <p>Data has been requested </br> Check your email</a> regularly and enter the symmetric key to get the data</p>
        <div class="form-group">
            <input type="age" id="age" required />
        </div>
        <button id="send-button" class="btn btn-rounded" type="submit">Submit</button>  
    </div>
    
    <div class="data-user">
        <h2>Data User</h2>
        name	
        email	
        phone	
        dateofbirth	
        gender	
        address	
        picture	
        pdf	
        video
    </div>
    
@endsection