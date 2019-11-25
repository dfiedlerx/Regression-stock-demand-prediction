@extends('layouts.app')

@section('content')
    <div class="item-full-absolute-align login-content register-content">
        <div class="login-logo-content text-center">
            <img class="margin-center login-logo" src="/images/logo.svg" alt="">
            <div class="clearfix"></div>
        </div>
        <h4 class="fw-300 c-grey-900 text-center mB-20">Registrar</h4>
        <form method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="text-normal text-dark">Nome</label>
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                @if ($errors->has('name'))
                    <span class="form-text text-danger">
                        <small>{{ $errors->first('name') }}</small>
                    </span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="text-normal text-dark">Email</label>
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                @if ($errors->has('email'))
                    <span class="form-text text-danger">
                        <small>{{ $errors->first('email') }}</small>
                    </span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="text-normal text-dark">Senha</label>
                <input id="password" type="password" class="form-control" name="password" required>

                @if ($errors->has('password'))
                    <span class="form-text text-danger">
                        <small>{{ $errors->first('password') }}</small>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="password_confirmation" class="text-normal text-dark">Confirmar Senha</label>
                <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required>

            </div>

            <div class="form-group">
                <div class="peers ai-c jc-sb fxw-nw">
                    <div class="peer">
                        <a href="/login">Já tem uma conta?</a>
                    </div>
                    <div class="peer">
                        <button class="btn petronas-button">Registrar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
