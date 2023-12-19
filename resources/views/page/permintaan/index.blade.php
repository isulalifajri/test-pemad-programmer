@extends('layouts.main')

@section('content')
  <section class="section">
     <div class="container">
         ini halaman Permintaan
         <h1>List Permintaan</h1>

         <p style="font-size: 12px">*Data ini diambil dari data project yang sudah di apply</p>
         <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Project</th>
                    <th>Status</th>
                    <th>Confirm</th>
                </tr>
            </thead>
            <tbody>
                @foreach($permintaan as $perment)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                           <label>Name Klien :</label> 
                           {{ $perment->project->klien->name}} <br>
                           <label>Request Layanan :</label>
                           {{ $perment->project->penawaran->jasa_penawaran}} <br>
                           <label>Request Bahasa :</label>
                            {{ $perment->project->language->name_language}}
                        </td>
                        <td>
                            @if ($perment->status == 'finish')
                                <p class="esdegan">{{ $perment->status }}</p>
                            @else
                                <p class="esteh">{{ $perment->status }}</p>
                            @endif
                        </td>
                        <td>
                            <div style="display: flex; gap:5px;">
                                @if ($perment->status == 'finish')
                                    <button type="submit" class="btn">Finish</button>
                                @else
                                    <form action="{{ url('permintaan/'. $perment->id) }}" method="POST">
                                        @method('PUT')
                                        @csrf
                                        <button type="submit" class="btn">Finished</button>
                                    </form>
                                @endif
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

     </div>
  </section>
@endsection