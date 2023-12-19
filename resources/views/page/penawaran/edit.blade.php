@extends('layouts.main')

@section('content')
  <section class="section">
     <div class="container">
         ini halaman penawaran
         <h1>Edit Penawaran</h1>

         <form method="POST" action="{{ url('penawaran/'.$data->id) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
              <div>

                  @include('page.penawaran._form')

                  <div style="margin-top: 10px;margin-left:5px;">
                      <button type="submit" class="btn"></i> Save </button>
                      <a href="{{ url('/penawaran') }}" class="btn">Close </a>
                  </div>
              </div>
          </form>
     </div>
  </section>
@endsection