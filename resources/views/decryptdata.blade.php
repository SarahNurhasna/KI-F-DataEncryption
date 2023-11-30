@extends('main')

@section('container')
    <h2>Your Decrypted Profile</h2>
    <table class="table table-striped table-hover">
        <tr>
            <td class="table-light">
                <h4>Name</h4>  
            </td>
            <td class="table-light">
                <h4>Email</h4>  
            </td>
            <td class="table-light">
                <h4>Phone Number</h4>  
            </td>
            <td class="table-light">
                <h4>Date of Birth</h4>  
            </td>
            <td class="table-light">
                <h4>Gender</h4>  
            </td>
            <td class="table-light">
                <h4>Address</h4>  
            </td>
        </tr>
        <tr>
<<<<<<< HEAD
            <td class="table-light">
                <p>decrypt name</p>  
            </td>
            <td class="table-light">
                <p>decrypt email</p>  
            </td>
            <td class="table-light">
                <p>decrypt phone</p>  
            </td>
            <td class="table-light">
                <p>decrypt date</p>  
            </td>
            <td class="table-light">
                <p>decrypt gende</p>  
            </td>
            <td class="table-light">
                <p>decrypt address</p>  
=======
        <td class="table-light">
                <p>{{$decryptedName}}</p>  
            </td>
            <td class="table-light">
                <p>{{$decryptedEmail}}</p>  
            </td>
            <td class="table-light">
                <p>{{$decryptedPhone}}</p>  
            </td>
            <td class="table-light">
                <p>{{$decryptedDob}}</p>  
            </td>
            <td class="table-light">
                <p>{{$decryptedGender}}</p>  
            </td>
            <td class="table-light">
                <p>{{$decryptedAddress}}</p>  
>>>>>>> 65da54a3456d3f3088fadf036f0d57d5d7e7a7a5
            </td>
        </tr>
    </table>

    <h2>Your Decrypted Data</h2>
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

