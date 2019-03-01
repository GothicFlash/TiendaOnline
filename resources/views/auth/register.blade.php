@extends('store.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">Registro</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group {{ $errors->has('name') ? ' is-invalid' : '' }}">
                          <label for="name">Nombre</label>
                          <input type="text" class="form-control" name="name" required>
                          {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('email') ? ' is-invalid' : '' }}">
                          <label for="email">Email</label>
                          <input type="email" class="form-control" name="email" required>
                          {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('password') ? ' is-invalid' : '' }}">
                          <label for="password">Contraseñá</label>
                          <input type="password" class="form-control" name="password" required>
                          {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
                        </div>

                        <div class="form-group">
                          <label for="password-confirm">Confirmar contraseñá</label>
                          <input type="password" class="form-control" name="password_confirmation" required>
                        </div>

                        <button class="btn btn-primary btn-block">Registrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
