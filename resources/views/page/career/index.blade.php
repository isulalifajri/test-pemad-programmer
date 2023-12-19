@extends('layouts.main')

@section('content')
  <section class="section">
     <div class="container">
         ini halaman Jobs
         <h1>Jobs Vacancy</h1>
    
        
        <a href="{{ url('jobs/create') }}" class="btn add">Add Jobs</a>
        <a href="{{ url('typejobs') }}" class="btn add">Type Jobs</a>

        @foreach ($career as $item)
         <div class="jobs-card">
            <div style="padding:15px">
               <div style="display: flex;gap:10px;align-items:center; padding:10px; border-bottom:2px dashed #dfdfdf">
                  <img src="{{ asset('../asset/images/logo-pemad.png') }}" alt="logo pemad" height="50px" style="padding: 12px;background: #e3c8c817;border: 1px solid #bfa4a473;border-radius: 6px;">
                  <div>
                     <p><strong>{{ $item->title }}</strong> - {{ $item->type->type_job }}</p>
                     <p style="font-size: 12px">PT PéMad International Transearch</p>
                  </div>

                  <div style="display: flex; gap:5px;margin-left:auto">
                     <a href="{{ url('jobs/edit/'.$item->id) }}" class="btn">Edit</a>
                     <form action="{{ url('jobs/'. $item->id) }}" method="POST">
                         @method('DELETE')
                         @csrf
                         <button type="submit" class="btn" onclick="return confirm('Are you sure you want to delete?')">Delete</button>
                     </form>
                 </div>
               </div>
               <div class="desc">
                  {!! $item->descript !!}
               </div>
              <a href="{{ url('jobs/show/'.$item->id) }}"><p style="margin-top: 10px">Read more...</p></a>
            </div>
         </div>
        @endforeach

     </div>
  </section>
@endsection