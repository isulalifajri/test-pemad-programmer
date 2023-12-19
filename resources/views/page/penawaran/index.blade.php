@extends('layouts.main')

@section('content')
  <section class="section">
     <div class="container">
         ini halaman penawaran
         <h1>Jasa Penawaran/Layanan</h1>
    
        
        <a href="{{ url('penawaran/create') }}" class="btn add">Add Penawaran</a>

        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Jasa Penawaran</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($penawaran as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->jasa_penawaran }}</td>
                        <td>Rp {{ number_format($item->price, 0, ",", ".") }}</td>
                        <td>
                            <div style="display: flex; gap:5px;">
                                <a href="{{ url('penawaran/show/'.$item->id) }}" class="btn">Details</a>
                                <a href="{{ url('penawaran/edit/'.$item->id) }}" class="btn">Edit</a>
                                <form action="{{ url('penawaran/'. $item->id) }}" method="POST">
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