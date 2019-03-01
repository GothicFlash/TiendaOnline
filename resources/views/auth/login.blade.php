@extends('store.layouts.app')

@section('content')
<div class="row justify-content-center">
  <div class="col-md-6">
    <div class="card">
      <div class="card-header">Acceso a la aplicación</div>

      <div class="card-body">
        <form method="POST" action="{{ route('login') }}">
          {{ csrf_field() }}

          <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" required placeholder="Ingresa tu correo" value="{{ old('email') }}">
            {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
          </div>

          <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
            <label for="password">Contraseñá</label>
            <input type="password" class="form-control" name="password" required placeholder="Ingresa tu contraseña">
            {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
          </div>
          <button class="btn btn-primary btn-block">Acceder</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
