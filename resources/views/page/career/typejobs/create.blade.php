@extends('layouts.main')

@section('content')
  <section class="section">
     <div class="container">
         ini halaman typejobs
         <h1>Add typejobs</h1>

         <form method="POST" action="{{ url('typejobs') }}" enctype="multipart/form-data">
            @method('POST')
            @csrf
              <div>

                  @include('page.career.typejobs._form')

                  <div style="margin-top: 10px;margin-left:5px;">
                      <button type="submit" class="btn"></i> Save </button>
                      <a href="{{ url('/typejobs') }}" class="btn">Close </a>
                  </div>
              </div>
          </form>
     </div>
  </section>
@endsection