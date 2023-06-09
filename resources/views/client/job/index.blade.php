@extends('client.layouts.master')




@section('container')
@if(session()->has('success')) 
<div class="alert alert-primary" role="alert">
  {{session('success')}}
 </div>
@endif 

<div class="table-responsive">
  <table class="table table-striped table-sm">
    <a href="/dashboardcl/job/create" class="btn btn-danger">Create</a>
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama Pekerjaan</th>
        <th scope="col">Kategori</th>
        <th scope="col">Gaji</th>
        <th scope="col">Deskripsi</th>
        <th scope="col">Syarat Keahlian</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($job as $job)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $job->namaPekerjaan}}</td>
          <td>{{ $job->kategori}}</td>
          <td>{{ $job->gaji}}</td>
          <td>{{ $job->deskripsi}}</td>
          <td>{{ $job->syarat}}</td>
          <td>
            <a href="/dashboardcl/job/{{ $job->idPekerjaan }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
            <form action="{{ route('job.destroy', ['job' => $job->idPekerjaan]) }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0" type="submit"><span data-feather="x-circle"></span></button>
            </form>
          </td>
        </tr>  
        @endforeach
      </tbody>
  </table>
</div>
@endsection



