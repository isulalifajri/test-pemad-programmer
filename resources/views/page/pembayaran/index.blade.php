@extends('layouts.main')

@section('content')
  <section class="section">
     <div class="container">
         ini halaman Pembayaran
         <h1>List Pembayaran</h1>

         <a href="{{ url('pembayaran/cetak') }}" class="btn add">Report Pemabayaran</a>
         <p style="font-size: 12px; margin-top:5px;margin-bottom:-13px;">*Data ini diambil dari data tagihan yang sudah lunas</p>
         <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Tagihan ID</th>
                    <th>Project</th>
                    <th>Bukti Pembayaran</th>
                    <th>Tanggal Pembayaran</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pembayaran as $bil)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $bil->tagihan_id }}</td>
                        <td>
                            <label>Name Klien :</label> 
                            {{ $bil->tagihan->project->klien->name}} <br>
                            <label>Request Layanan :</label>
                            {{ $bil->tagihan->project->penawaran->jasa_penawaran}} <br>
                            <label>Request Bahasa :</label>
                            {{ $bil->tagihan->project->language->name_language}}
                        </td>
                        <td><img src="{{ asset('asset/images/pembayaran/'.$bil->bukti_pembayaran) }}" alt="{{ $bil->bukti_pembayaran }}" height="50px"></td>
                        <td>{{ $bil->tanggal_pembayaran }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

     </div>
  </section>
@endsection