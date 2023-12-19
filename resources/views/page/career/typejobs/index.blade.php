@extends('layouts.main')

@section('content')
  <section class="section">
     <div class="container">
         ini halaman Type Jobs
         <h1>Jobs Type</h1>
   
        <a href="{{ url('typejobs/create') }}" class="btn add">Add Type Jobs</a>
        <a href="{{ url('jobs') }}" class="btn add">Page Career</a>

        <table class="table">
         <thead>
             <tr>
                 <th>#</th>
                 <th>Jobs Type</th>
                 <th>Action</th>
             </tr>
         </thead>
         <tbody>
             @foreach($typejobs as $item)
                 <tr>
                     <td>{{ $loop->iteration }}</td>
                     <td>{{ $item->type_job }}</td>
                     <td>
                         <div style="display: flex; gap:5px;">
                             {{-- <a href="{{ url('typejobs/show/'.$item->id) }}" class="btn">Details</a> --}}
                             <a href="{{ url('typejobs/edit/'.$item->id) }}" class="btn">Edit</a>
                             <form action="{{ url('typejobs/'. $item->id) }}" method="POST">
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