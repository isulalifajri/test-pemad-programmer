@extends('layouts.main')

@section('content')
  <section class="section">
     <div class="container">
         ini halaman users
         <h1>Users List</h1>
    
        <a href="{{ url('users/create') }}" class="btn add">Add Users</a>

        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <div style="display: flex; gap:5px;">
                                {{-- <a href="{{ url('users/show/'.$user->id) }}" class="btn">Details</a> --}}
                                <a href="{{ url('users/'.$user->id.'/edit') }}" class="btn">Edit</a>
                                <form action="{{ url('users/'. $user->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn" onclick="return confirm('Are you sure you want to delete?')">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
     </div>
  </section>
@endsection