@extends('templates.default')
@section('content')
    <div class="row">
        <div class="col-lg-4 mx-auto">
            <h3>Войти на сайт</h3>
            <form method="post" action="{{ route('auth.signin') }}" novalidate>
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email"
                           class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                           id="email"
                           placeholder="например, user@gmail.com"
                           value = {{ Request::old('email') ?:'' }}
                    >
                    @if($errors->has('email'))
                        <span class="help-block text-danger">
                            {{ $errors->first('email') }}
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="password">Пароль</label>
                    <input type="password" name="password"
                           class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                           id="password" placeholder="минимум 6 символов"
                    >
                    @if($errors->has('password'))
                        <span class="help-block text-danger"></span>
                        {{ $errors->first('password') }}
                    @endif
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" name="remember" class="form-check-input" id="remember">
                    <label class="form-check-label" for="remember">запомнить меня</label>
                </div>
                <button type="submit" class="btn btn-primary">Войти</button>
            </form>
        </div>
    </div>
@endsection
