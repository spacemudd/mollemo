@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row">

        <div class="form-container small-6 small-centered columns">

            <form style="margin-top:1rem;" class="login-form" method="POST" action="{{ route('login') }}">

                {{ csrf_field() }}

                <div class="email">
                    <label for="email">{{ __('auth.email') }}</label>

                    <input dir="ltr" id="email" type="email" name="email" value="{{ old('email') }}" aria-describedby="emailHelpText" required autofocus>

                    @if ($errors->has('email'))
                        <span class="help-text" id="emailHelpText">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="password">
                    <label for="password">{{ __('auth.password') }}</label>

                    <input id="password" type="password" name="password" aria-describedby="passwordHelpText" required>

                    @if ($errors->has('password'))
                        <span class="help-text" id="passwordHelpText">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('auth.remember-me') }}
                    </label>
                </div>

                <div class="button-plus-link">
                    <button type="submit" class="button">
                        {{ __('auth.login') }}
                    </button>

                    {{--<a href="{{ route('password.request') }}">--}}
                        {{--&nbsp;--}}
                        {{--{{ __('Forgot Your Password?') }}--}}
                    {{--</a>--}}
                </div>
            </form>

        </div>

    </div>

</div>
@endsection
