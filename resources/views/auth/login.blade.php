@extends('layouts.main_guest')

@section('container')

<div class="row justify-content-center">
    <div class="col-md-5">
     @if (session()->has('success'))
         
  
      <div class="alert alert-primary alert-dismissible fade show" role="alert">
     {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

      @if (session()->has('loginError'))
         
  
      <div class="alert alert-danger  alert-dismissible fade show" role="alert">
     {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
        <main class="form-signin border border-dark rounded px-3 py-5 bg-primary" style="margin-top:150px;">
            <h1 class="mb-3 fw-normal text-white text-center fw-bold "><strong>Login</strong></h1>
            <form action="/login" method="POST">
              @csrf

            
          
              <div class="form-floating mt-3">
                <label for="email" class="text-white">Email address</label>
                <input type="email" name="email" class="form-control @error('email')is-invalid @enderror " id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-floating mt-3 mb-3">
                <label for="password" class="text-white">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
              </div>
          
            
              <button class="w-100 btn btn-lg text-dark btn-light" type="submit">Login</button>
              {{-- <small class="d-block text-center mt-3">Not Registered? <a href="/register">Register Now</a></small> --}}
            </form>
          </main>
    </div>
</div>


@endsection