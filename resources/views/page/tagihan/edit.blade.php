@extends('layouts.main')

@section('content')
  <section class="section">
     <div class="container">
         ini halaman tagihan
         <h1>Update Tagihan</h1>

         <form method="POST" action="{{ url('tagihan/'.$data->id) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
              <div>

                  @include('page.tagihan._form')

                  <div style="margin-top: 10px;margin-left:5px;">
                      <button type="submit" class="btn"></i> Save </button>
                      <a href="{{ url('/tagihan') }}" class="btn">Close </a>
                  </div>
              </div>
          </form>
     </div>
  </section>
@endsection