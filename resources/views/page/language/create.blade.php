@extends('layouts.main')

@section('content')
  <section class="section">
     <div class="container">
         ini halaman languages
         <h1>Add languages</h1>

         <form method="POST" action="{{ url('languages') }}" enctype="multipart/form-data">
            @method('POST')
            @csrf
              <div>

                  @include('page.language._form')

                  <div style="margin-top: 10px;margin-left:5px;">
                      <button type="submit" class="btn"></i> Save </button>
                      <a href="{{ url('/languages') }}" class="btn">Close </a>
                  </div>
              </div>
          </form>
     </div>
  </section>
@endsection