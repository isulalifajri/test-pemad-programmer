@extends('layouts.main')

@section('content')
  <section class="section">
     <div class="container">
         ini halaman Projects
         <h1>List Projects</h1>
    
        
        <a href="{{ url('projects/create') }}" class="btn add">Add Projects</a>
        <a href="{{ url('languages') }}" class="btn add">Reference Language</a>

        <table class="table">
         <thead>
             <tr>
                 <th>#</th>
                 <th>Bahasa</th>
                 <th>Penawaran</th>
                 <th>klien</th>
                 <th>Confirm</th>
                 <th>Action</th>
             </tr>
         </thead>
         <tbody>
             @foreach($project as $item)
                 <tr>
                     <td>{{ $loop->iteration }}</td>
                     <td>{{ $item->language->name_language }}</td>
                     <td>{{ $item->penawaran->jasa_penawaran }}</td>
                     <td>{{ $item->klien->name }}</td>
                     <td>
                        <form action="{{ url('projects/ups/'. $item->id) }}" method="POST">
                            @method('POST')
                            @csrf
                            <button type="submit" class="btn">Applied</button>
                        </form>
                     </td>
                     <td>
                         <div style="display: flex; gap:5px;">
                             <a href="{{ url('projects/edit/'.$item->id) }}" class="btn">Edit</a>
                             <form action="{{ url('projects/'. $item->id) }}" method="POST">
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