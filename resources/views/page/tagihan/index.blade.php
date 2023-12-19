@extends('layouts.main')

@section('content')
  <section class="section">
     <div class="container">
         ini halaman Tagihan
         <h1>List Tagihan</h1>

         <p style="font-size: 12px">*Data ini diambil dari data permintaan yang sudah finish</p>
         <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Project</th>
                    <th>Price</th>
                    <th>Status</th>
                    <th>Confirm</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tagihan as $tag)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                           <label>Name Klien :</label> 
                           {{ $tag->project->klien->name}} <br>
                           <label>Request Layanan :</label>
                           {{ $tag->project->penawaran->jasa_penawaran}} <br>
                           <label>Request Bahasa :</label>
                            {{ $tag->project->language->name_language}}
                        </td>
                        <td>Rp {{ number_format($tag->project->penawaran->price, 0, ",", ".") }}</td>
                        <td>
                            @if ($tag->status == 'lunas')
                                <p class="esdegan">{{ $tag->status }}</p>
                            @else
                                <p class="esteh">{{ $tag->status }}</p>
                            @endif
                        </td>
                        <td>
                            @if ($tag->status != 'lunas')
                                <div style="display: flex; gap:5px;">
                                    <a href="{{ url('tagihan/edit/'.$tag->id) }}" class="btn">Update Status</a>
                                </div>    
                            @else
                                <div style="display: flex; gap:5px;">
                                    <button class="btn">Updated</button>
                                </div>      
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

     </div>
  </section>
@endsection