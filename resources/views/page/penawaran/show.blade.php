@extends('layouts.main')

@section('content')
  <section class="section">
     <div class="container">
         ini halaman detail penawaran
         <h1>Penawaran Detail</h1>
    
         <a href="{{ url('penawaran') }}" class="btn add">Back to Page</a>

         <div style="margin-top: 30px">
            <img src="{{ asset('../asset/images/logo-pemad.png') }}" alt="logo pemad" height="70px" style="padding: 12px;">
         </div>

         <div style="padding: 12px 0;border-bottom: 2px dashed #dfdfdf">
            <h1><strong>{{ $data->jasa_penawaran }}</strong></h1>
            <p style="font-size: 17px">Rp {{ number_format($data->price, 0, ",", ".") }}</p>
         </div>

         <div style="margin-top: 10px; padding-bottom:20px; border-bottom:2px solid #ada6a6;">
            {!! $data->descript !!}
         </div>


     </div>
  </section>
@endsection