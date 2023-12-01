@extends('main')

@section('container')
    <div class="data-requested">
        <h2>Data Requested</h2>

        <p>Data has been requested. Check your email regularly and enter the symmetric key to get the data</p>
        <div class="form-group">
            <label for="symmetric-key">Symmetric Key:</label>
            <input type="text" id="symmetric-key" required />
        </div>
        <button id="send-button" class="btn btn-rounded" type="submit">Submit</button>
    </div>

    <div class="data-user">
        <h2>Data User</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Date of Birth</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Picture</th>
                    <th>PDF</th>
                    <th>Video</th>
                </tr>
            </thead>
            {{-- <tbody> --}}
                {{-- Loop through $users to display user data --}}
                {{-- @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->dateofbirth }}</td>
                        <td>{{ $user->gender }}</td>
                        <td>{{ $user->address }}</td>
                        <td><img src="{{ asset($user->picture) }}" alt="User Picture" width="50"></td>
                        <td><a href="{{ asset($user->pdf) }}" target="_blank">View PDF</a></td>
                        <td>
                            <video width="50" height="50" controls>
                                <source src="{{ asset($user->video) }}" type="video/mp4">
                            </video>
                        </td>
                    </tr>
                @endforeach --}}
            {{-- </tbody> --}}
        </table>
    </div>
@endsection