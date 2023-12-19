@extends('layouts.main')

@section('content')
  <section class="section">
     <div class="container">
         ini halaman detail Jobs
         <h1>Jobs Detail</h1>
    
         <a href="{{ url('jobs') }}" class="btn add">Back to Page</a>

         <div style="margin-top: 30px">
            <img src="{{ asset('../asset/images/logo-pemad.png') }}" alt="logo pemad" height="70px" style="padding: 12px;">
         </div>

         <div style="padding: 12px 0;border-bottom: 2px dashed #dfdfdf">
            <h1><strong>{{ $data->title }}</strong> - {{ $data->type->type_job }}</h1>
            <p style="font-size: 17px">PT PéMad International Transearch</p>
         </div>

         <div style="margin-top: 10px; padding-bottom:20px; border-bottom:2px solid #ada6a6;">
            {!! $data->descript !!}
         </div>


     </div>
  </section>
@endsection