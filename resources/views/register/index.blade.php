@extends('layouts.main')


@section('container')

<div class="row d-flex justify-content-center">
  <div class="col-lg-5">

    <div class="form-input border border-dark rounded px-4 py-4">
      @if(session()->has('loginError'))
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

      <form action="/register" method="POST">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Nama</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ @old('name')}}">
          @error('name')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="nis" class="form-label">NIS</label>
          <input type="text" class="form-control @error('nis') is-invalid @enderror" id="nis" name="nis" value="{{ @old('nis')}}">
          @error('nis')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
      </form>
      <small>Sudah punya akun? <a href="/login">Login sekarang!</a></small>

    </div>
  </div>
</div>


@endsection