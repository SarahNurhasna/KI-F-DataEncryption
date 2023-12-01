@extends('main')

@section('container')
    <h2>Your Encrypted Profile</h2>
    <table class="table table-striped table-hover">
        @foreach ($latestData as $item)
        <tr>
           <td class="table-light">
                <h4>Name</h4>  
            </td> 
            <td class="table-light">
                <h4>{{ $item['name'] }}</h4>  
            </td> 
        </tr>
        <tr>
            <td class="table-light">
                <h4>Email</h4>  
            </td> 
            <td class="table-light">
                <h4>{{ $item['email'] }}</h4>  
            </td> 
        </tr>
        <tr>
            <td class="table-light">
                <h4>Phone Number</h4>  
            </td>
            <td class="table-light">
                <h4>{{ $item['phone'] }}</h4>  
            </td>
        </tr>
        <tr>
            <td class="table-light">
                <h4>Date of Birth</h4>  
            </td>
            <td class="table-light">
                <h4>{{ $item['dateofbirth'] }}</h4>  
            </td>
        </tr>
        <tr>
            <td class="table-light">
                <h4>Gender</h4>  
            </td>
            <td class="table-light">
                <h4>{{ $item['gender'] }}</h4>  
            </td>
        </tr>
        <tr>
            <td class="table-light">
                <h4>Address</h4>  
            </td>
            <td class="table-light">
                <h4>{{ $item['address'] }}</h4>  
            </td>
        </tr>
        @endforeach
    </table>

    <h2>Your Encrypted Data</h2>
    <table class="table table-striped table-hover">
        <tr>
            <td class="table-light">
                <h4>Filename</h4>  
            </td>
            <td class="table-light">
                <h4>Download file</h4>  
            </td>
        </tr>
        <tr>
            <td class="table-light">
                <p>2345678.jpg</p>  
            </td>
            <td class="table-light">
                <a class="btn btn-rounded" href="#" role="button">Download</a>
            </td>
        </tr>
    </table>
@endsection