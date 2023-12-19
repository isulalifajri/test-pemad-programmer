@extends('layouts.main')

@section('content')
  <section class="section">
     <div class="container">
         ini halaman kliens
         <h1>Client List</h1>
    
        <a href="{{ url('kliens/create') }}" class="btn add">Add Clients</a>

        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Images</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($kliens as $klien)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $klien->name }}</td>
                        <td>{{ $klien->email }}</td>
                        <td>
                            @if($klien->images)
                            <img src="{{ asset('asset/images/kliens/'.$klien->images)}}" width="90px" height="auto" alt="{{ $klien->images }}">
                            @else
                                <img src="{{ asset('asset/images/no-image-available.png') }}" width="90px" height="auto" alt="default-image">
                            @endif
                        </td>
                        <td>
                            <div style="display: flex; gap:5px;">
                                {{-- <a href="{{ url('kliens/show/'.$klien->id) }}" class="btn">Details</a> --}}
                                <a href="{{ url('kliens/'.$klien->id.'/edit') }}" class="btn">Edit</a>
                                <form action="{{ url('kliens/'. $klien->id) }}" method="POST">
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