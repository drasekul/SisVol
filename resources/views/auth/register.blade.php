@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registrar</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('USERNAME') ? ' has-error' : '' }}">
                            <label for="USERNAME" class="col-md-4 control-label">Usuario</label>

                            <div class="col-md-6">
                                <input id="USERNAME" type="USERNAME" class="form-control" name="USERNAME" value="{{ old('USERNAME') }}" required>

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
                            <input id="PASSWORD" type="PASSWORD" class="form-control" name="PASSWORD" required>

                            @if ($errors->has('PASSWORD'))
                            <span class="help-block">
                              <strong>{{ $errors->first('PASSWORD') }}</strong>
                            </span>
                            @endif
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="PASSWORD-confirm" class="col-md-4 control-label">Confirme Contraseña</label>

                          <div class="col-md-6">
                            <input id="PASSWORD-confirm" type="PASSWORD" class="form-control" name="PASSWORD_confirmation" required>
                          </div>
                        </div>

                        <div class="form-group{{ $errors->has('FIRSTNAME') ? ' has-error' : '' }}">
                            <label for="FIRSTNAME" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="FIRSTNAME" type="text" class="form-control" name="FIRSTNAME" value="{{ old('FIRSTNAME') }}" required autofocus>

                                @if ($errors->has('FIRSTNAME'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('FIRSTNAME') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('LASTNAME') ? ' has-error' : '' }}">
                            <label for="LASTNAME" class="col-md-4 control-label">Apellido</label>

                            <div class="col-md-6">
                                <input id="LASTNAME" type="text" class="form-control" name="LASTNAME" value="{{ old('LASTNAME') }}" required autofocus>

                                @if ($errors->has('LASTNAME'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('LASTNAME') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('RUT') ? ' has-error' : '' }}">
                          <label for="RUT" class="col-md-4 control-label">R.U.T.</label>

                          <div class="col-md-6">
                            <input id="RUT" type="RUT" class="form-control" name="RUT" value="{{ old('RUT') }}" required>

                            @if ($errors->has('RUT'))
                            <span class="help-block">
                              <strong>{{ $errors->first('RUT') }}</strong>
                            </span>
                            @endif
                          </div>
                        </div>

                        <div class="form-group{{ $errors->has('EMAIL') ? ' has-error' : '' }}">
                            <label for="EMAIL" class="col-md-4 control-label">Correo Electrónico</label>

                            <div class="col-md-6">
                                <input id="EMAIL" type="EMAIL" class="form-control" name="EMAIL" value="{{ old('EMAIL') }}" required>

                                @if ($errors->has('EMAIL'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('EMAIL') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('PHONE') ? ' has-error' : '' }}">
                            <label for="PHONE" class="col-md-4 control-label">Número Telefónico</label>

                            <div class="col-md-6">
                                <input id="PHONE" type="PHONE" class="form-control" name="PHONE" value="{{ old('PHONE') }}" required>

                                @if ($errors->has('PHONE'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('PHONE') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('ID_COMMUNE') ? ' has-error' : '' }}">
                            <label for="ID_COMMUNE" class="col-md-4 control-label">Comuna</label>

                            <div class="col-md-6">
                                {{Form::select('ID_COMMUNE', $comunas)}}

                                @if ($errors->has('ID_COMMUNE'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ID_COMMUNE') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrarse
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
