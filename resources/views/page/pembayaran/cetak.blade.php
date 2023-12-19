@extends('layouts.main')

@section('content')
  <section class="section">
     <div class="container">
        <div style="text-align:center">
            {{-- <img src="{{ asset('../asset/images/logo-pemad.png') }}" height="35" alt="icon"> --}} 
            <img src="{{ asset('../asset/images/logo-pemad.png') }}" alt="logo pemad" height="35px"> 
        </div>
        <div style="text-align: center;margin:auto">
            <label style="font-size:1.5rem">Report Table Pembayaran</label>
            <p  style="font-size:1rem; line-height:1">PT PéMad International Transearch</p>
            <hr style="height: 5px;background-color: #604d4d; margin:5px 0; opacity:1">
        </div>
        <br/>

         <small class="title text-align-left">Dicetak : {{ date("l, M. d, Y.") . " Time : " . date("g:i a") }} </small>
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