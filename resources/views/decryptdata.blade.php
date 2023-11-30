@extends('layout.main')

@section('container')
    <h1>Your Decrypted Profile</h1>
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
                <h4>Age</h4>  
            </td>
            <td class="table-light">
                <h4>Gender</h4>  
            </td>
            <td class="table-light">
                <h4>Address</h4>  
            </td>
        </tr>
        <tr>
            <td class="table-light">
                <h4>Sarah</h4>  
            </td>
            <td class="table-light">
                <h4>tes</h4>  
            </td>
            <td class="table-light">
                <h4>098765432</h4>  
            </td>
            <td class="table-light">
                <h4>20-20-20</h4>  
            </td>
            <td class="table-light">
                <h4>19</h4>  
            </td>
            <td class="table-light">
                <h4>Female</h4>  
            </td>
            <td class="table-light">
                <h4>jalan jalan</h4>  
            </td>
        </tr>
    </table>

    <h1>Your Decrypted Data</h1>
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
                <h4>2345678.jpg</h4>  
            </td>
            <td class="table-light">
                <a class="btn btn-primary" href="#" role="button">Download</a>
            </td>
        </tr>
    </table>
@endsection

