@extends('layouts.main')

@section('content')
  <section class="section">
     <div class="container">
         ini halaman jobs
         <h1>Add jobs</h1>

         <form method="POST" action="{{ url('jobs') }}" enctype="multipart/form-data">
            @method('POST')
            @csrf
              <div>

                  @include('page.career._form')

                  <div style="margin-top: 10px;margin-left:5px;">
                      <button type="submit" class="btn"></i> Save </button>
                      <a href="{{ url('/jobs') }}" class="btn">Close </a>
                  </div>
              </div>
          </form>
     </div>
  </section>
@endsection