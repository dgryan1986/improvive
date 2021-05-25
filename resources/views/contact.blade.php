@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="p-3 text-center">
      <h1 class="display-4">Contact Us</h1>
      <p class="lead">Sometimes I forget that I can't read everyones mind and you may have some questions, send them here!</p>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header bg-white font-weight-bold">Send us your thoughts.</div>

          <div class="card-body">

            <form method="POST" action="/contact">
              @csrf
              <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                <div class="col-md-6">
                  
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                  
                  @error('email')
                    <div class="text-danger font-weight-bold"><strong>{{ $message }}</strong></div>
                  @enderror

                </div>
              </div>

              <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                    Contact Us
                  </button>

                  @if (session('message'))
                    <p class="text-success font-weight-bold mt-2">
                      {{ session('message') }}
                    </p>
                  @endif

                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection