@extends('nav.nav')

@section('content')
    <div class="card bg-light">
        <article class="card-body mx-auto" style="max-width: 400px;">
            <h4 class="card-title mt-3 text-center">Login</h4>
            <form class="form-box" role="form" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <input id="email" type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>
                <div class="form-group">
                    <input id="password" type="password" placeholder="Password" class="form-control" name="password" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block"> Login </button>
                </div> <!-- form-group// -->
                <p class="text-center">Wachtwoord Vergeten? <a href="reset.blade.php">Vraag aan</a> </p>
            </form>
        </article>
    </div>
    <br><br>
@endsection
