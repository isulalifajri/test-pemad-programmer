@extends('layouts.main')

@section('content')
  <section class="section">
     <div class="container">
         ini halaman users
         <h1>Edit Users</h1>

         <form method="POST" action="{{ url('users/'.$data->id) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
              <div>

                  @include('page.users._form')

                  <div style="margin-top: 10px;margin-left:5px;">
                      <button type="submit" class="btn"></i> Save </button>
                      <a href="{{ url('/users') }}" class="btn">Close </a>
                  </div>
              </div>
          </form>
     </div>
  </section>
@endsection