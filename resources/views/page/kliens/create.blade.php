@extends('layouts.main')

@section('content')
  <section class="section">
     <div class="container">
         ini halaman kliens
         <h1>Add Kliens</h1>

         <form method="POST" action="{{ url('kliens') }}" enctype="multipart/form-data">
            @method('POST')
            @csrf
              <div>

                  @include('page.kliens._form')

                  <div style="margin-top: 10px;margin-left:5px;">
                      <button type="submit" class="btn"></i> Save </button>
                      <a href="{{ url('/kliens') }}" class="btn">Close </a>
                  </div>
              </div>
          </form>
     </div>
  </section>
@endsection