@extends('layouts.app')
@extends('layouts.admin')
@section('titulo', 'Usuário/Cadastrar')

 @section('conteudo')
 
 <div class="card mt-3">
        <div class="card-body">
            <h3>Cadastrar Usuário</h3>
        </div>
    </div>
               

    <div class="card">
        <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" class="ml-3">
                        @csrf
                        @include('forms._formUser.index')
                        <div class="form-group col-sm-4">
                    <label for="" class="text-white form-label">.</label>
                    <button type="submit" class="form-control btn btn-dark">   {{ __('Cadastrar') }}</button>
                </div>
                        
                    </form>
                </div>
            </div>
       
@endsection