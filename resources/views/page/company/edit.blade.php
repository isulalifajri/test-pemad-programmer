@extends('layouts.main')

@section('content')
  <section class="section">
     <div class="container">
         ini halaman company
         <h1>Add Company</h1>

         <form method="POST" action="{{ url('company/'.$data->id) }}" enctype="multipart/form-data">
            @method('PUT')
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