@extends('layouts.main')


@section('container')

<div class="row d-flex justify-content-center">
  <div class="col-lg-5">

    <div class="form-input border border-dark rounded px-4 py-4">
      @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif


      @if(session()->has('loginError'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          {{ session('loginError') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

      <form action="/login" method="POST">
        @csrf
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
          <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
          @error('password')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
      </form>
      <small>Belum punya akun? <a href="/register">Daftar sekarang!</a></small>
    </div>
  </div>
</div>


@endsection