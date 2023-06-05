@extends ('client.layouts.master')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create Job</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
    </div>
  </div>
<div class="col-lg-8">
  <form method="post" action="/dashboardcl/job" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Nama Pekerjaan</label>
      <input type="text" class="form-control @error('namaDokter') is-invalid @enderror" id="namaPekerjaan" name="namaPekerjaan" value="{{ old('namaPekerjaan') }}">
        @error('namaPekerjaan')
          <span class="text-danger small" role="alert">
              {{ $message }}
          </span><br>
        @enderror
    </div>
    <div class="mb-3">
      <label for="title" class="form-label">Kategori</label>
      <input type="text" class="form-control @error('kategori') is-invalid @enderror" id="kategori" name="kategori" required autofocus value="{{ old('kategori')}}">
      @error('kategori')
        <span class="text-danger small" role="alert">
            {{ $message }}
        </span><br>
      @enderror
    </div>
    <div class="mb-3">
      <label for="title" class="form-label">Gaji</label>
      <input type="text" class="form-control @error('gaji') is-invalid @enderror" id="gaji" name="gaji" value="{{ old('gaji')}}">
      @error('gaji')
        <span class="text-danger small" role="alert">
          {{ $message }}
        </span><br>
      @enderror
    </div>
    <div class="mb-3">
      <label for="title" class="form-label">Deskripsi</label>
      <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="{{ old('deskripsi')}}">
      @error('deskripsi')
        <span class="text-danger small" role="alert">
            {{ $message }}
        </span><br>
      @enderror
    </div>
    <div class="mb-3">
      <label for="title" class="form-label">Syarat</label>
      <input type="text" class="form-control" id="syarat" name="syarat" value="{{ old('syarat') }}">
      @error('syarat')
        <span class="text-danger small" role="alert">
          {{ $message }}
        </span><br>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

@endsection 