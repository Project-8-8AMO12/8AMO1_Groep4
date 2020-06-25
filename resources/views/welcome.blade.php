@extends('nav.nav')

@section('content')
    <div class="intro-section" id="home-section">

        <div class="slide-1" style="background-image: url({{asset('images/imker1.jpg')}});" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="row align-items-center">
                            <div class="col-lg-6 mb-4">
                                <h1  data-aos="fade-up" data-aos-delay="100">Learn From The Expert</h1>
                                <p class="mb-4"  data-aos="fade-up" data-aos-delay="200">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime ipsa nulla sed quis rerum amet natus quas necessitatibus.</p>
                                <p data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-primary py-3 px-5 btn-pill">Admission Now</a></p>
                            </div>
                            <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="500">
                                    <form class="form-box" role="form" method="POST" action="{{ route('register') }}">
                                        {{ csrf_field() }}
                                    <h3 class="h4 text-black mb-4">Inschrijven</h3>
                                    <div class="form-group">
                                        <input id="name" type="text" class="form-control" placeholder="Name" name="name" value="{{ old('name') }}" required autofocus>
                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input id="email" type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required>
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
                                        <div class="form-group mb-4">
                                            <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required>
                                        </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary btn-pill" value="Sign up">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
