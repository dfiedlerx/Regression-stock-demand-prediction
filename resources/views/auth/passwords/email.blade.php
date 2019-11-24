@extends('layouts.app')

@section('content')

    <div class="item-full-absolute-align login-content">

        <div class="login-logo-content text-center">
            <img class="margin-center login-logo" src="/images/logo.png" alt="">
            <div class="clearfix"></div>
        </div>

        <h4 class="fw-300 c-grey-900 text-center mB-20">Redefinir Senha</h4>

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="text-normal text-dark">E-Mail Address</label>
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group text-center">
                <button type="submit" class="btn petronas-button">
                    Enviar link de redefinição
                </button>
            </div>
            <div class="peers ai-c jc-sb fxw-nw cointainer-fluid text-center">
                <div class="row w-100 margin-0">
                    <div class="peer col-12 col-xs-12 padding-0">
                        <a class="btn btn-link" href="{{ route('login') }}">
                            Voltar
                        </a>
                    </div>
                </div>
            </div>
        </form>

    </div>
@endsection
