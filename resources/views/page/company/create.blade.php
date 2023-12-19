@extends('layouts.main')

@section('content')
  <section class="section">
     <div class="container">
         ini halaman company
         <h1>Add company</h1>

         <form method="POST" action="{{ url('company') }}" enctype="multipart/form-data">
            @method('POST')
            @csrf
              <div>

                  @include('page.company._form')

                  <div style="margin-top: 10px;margin-left:5px;">
                      <button type="submit" class="btn"></i> Save </button>
                      <a href="{{ url('/company') }}" class="btn">Close </a>
                  </div>
              </div>
          </form>
     </div>
  </section>
@endsection