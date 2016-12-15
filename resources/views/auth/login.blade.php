@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Iniciar Sesión</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login/redirect') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="USERNAME" class="col-md-4 control-label">Usuario</label>

                            <div class="col-md-6">
                                <input id="USERNAME" class="form-control" name="USERNAME" value="{{ old('USERNAME') }}" required autofocus>

                                @if ($errors->has('USERNAME'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('USERNAME') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('PASSWORD') ? ' has-error' : '' }}">
                            <label for="PASSWORD" class="col-md-4 control-label">Contraseña</label>

                            <div class="col-md-6">
                                <input id="PASSWORD" type="password" class="form-control" name="PASSWORD" required>

                                @if ($errors->has('PASSWORD'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('PASSWORD') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Recordarme
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Ingresar
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                    Me he olvidado de la contraseña
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
