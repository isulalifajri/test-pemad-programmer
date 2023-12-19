@extends('layouts.main')

@section('content')
  <section class="section">
     <div class="container">
         ini halaman Company
         <h1>Company Profile</h1>
    
        @if ($company->count() < 1)
            <a href="{{ url('company/create') }}" class="btn add">Add Company</a>
        @else
            @foreach($company as $comp)
            <a href="{{ url('company/edit/'.$comp->id) }}" class="btn add">Edit Company</a>
            @endforeach
        @endif

        @foreach ($company as $item)
        <div style="margin-top:30px">
            <h1>{{ $item->name_company }}</h1>
            <img src="{{ asset('asset/images/company/'.$item->images) }}" style="margin-top: 5px" height="70px" alt="{{ $item->images }}">

            <p style="margin-top: 5px">{!! $item->descript !!}</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique deleniti nemo explicabo tenetur ab nesciunt quas omnis veritatis! Ad quasi temporibus dicta in, pariatur amet aperiam officiis iste aliquid. Ipsam sequi consequuntur consequatur, eos laboriosam dolorem vero optio velit nulla? Doloremque, animi laborum provident cum aliquid necessitatibus ratione, iure laboriosam ipsum sapiente doloribus, rerum quae enim. Facere nihil vero doloremque mollitia libero, dicta cupiditate, quaerat eveniet fugit voluptas ad assumenda, quo odit tempora modi ipsa est voluptates reprehenderit impedit. Tempora rem voluptatum necessitatibus quaerat quo assumenda velit blanditiis eligendi labore, sapiente harum possimus amet nihil, explicabo cumque beatae expedita sunt.</p>

            <h2 style="margin-top:10px">Contact Info</h2>
            <p>{!! $item->contact_info !!}</p>
            <h2 style="margin-top:10px">Jam Kerja</h2>
            <p>{!! $item->jam_kerja !!}</p>
        </div>
        @endforeach

     </div>
  </section>
@endsection