@extends('layouts.main')

@section('content')
  <section class="section">
     <div class="container">
         ini halaman projects
         <h1>Add projects</h1>

         <form method="POST" action="{{ url('projects') }}" enctype="multipart/form-data">
            @method('POST')
            @csrf
              <div>

                  @include('page.projects._form')

                  <div style="margin-top: 10px;margin-left:5px;">
                      <button type="submit" class="btn"></i> Save </button>
                      <a href="{{ url('/projects') }}" class="btn">Close </a>
                  </div>
              </div>
          </form>
     </div>
  </section>
@endsection