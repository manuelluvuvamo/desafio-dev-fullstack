@extends('layouts.app')
@section('content')
    <div class="container mt-5">

        <div class="col-md-12 text-center">
            <h4>
               
            </h4>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card shadow-lg p-3 mb-5 bg-white rounded mt-5 rounded-sm">
                    <img rel="icon" src="/images/logotipo/logo.jpg" style="width:50%; margin:auto" />

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group ">
                                <div class="col-md-12">
                                    <input id="email" type="email"
                                        class=" border-right-0 border-top-0 border-left-0 form-control @error('email') is-invalid @enderror border-dark"
                                        name="vc_email" value="{{ old('vc_email') }}" required autocomplete="vc_email"
                                        placeholder="Email:">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group ">

                                <div class="col-md-12">
                                    <input id="password" type="password"
                                        class="border-right-0 border-top-0 border-left-0  form-control border-dark @error('password') is-invalid @enderror"
                                        name="password" required autocomplete="current-password" placeholder="Senha:">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mt-3">
                                <div class="col-md-12 offset-md-1">
                                    <div class="form-check">
                                        <input class="form-check-input border-secondary" type="checkbox" name="remember"
                                            id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                            {{ __('Lembrar-me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group  mb-0 ">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-dark col-md-8 form-control">
                                        {{ __('Entrar') }}
                                    </button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
@endsection
