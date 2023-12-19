@extends('layouts.main')

@section('content')
  <section class="section">
     <div class="container">
         ini halaman Languages
         <h1>List Languages</h1>
    
        
        <a href="{{ url('languages/create') }}" class="btn add">Add language</a>
        <a href="{{ url('projects') }}" class="btn add">Page Projects</a>

        <table class="table">
         <thead>
             <tr>
                 <th>#</th>
                 <th>Language</th>
                 <th>Action</th>
             </tr>
         </thead>
         <tbody>
             @foreach($language as $item)
                 <tr>
                     <td>{{ $loop->iteration }}</td>
                     <td>{{ $item->name_language }}</td>
                     <td>
                         <div style="display: flex; gap:5px;">
                             <a href="{{ url('languages/edit/'.$item->id) }}" class="btn">Edit</a>
                             <form action="{{ url('languages/'. $item->id) }}" method="POST">
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