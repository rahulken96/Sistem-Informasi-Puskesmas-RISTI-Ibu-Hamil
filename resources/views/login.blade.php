<!doctype html>
<html lang="en">


@include('layouts.landing-page.header')

<body>

    @if ($pesan = session('error'))
        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 text-center mb-5">
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>{{ $pesan }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
            @elseif ($pesan = session('fail'))
                <section class="ftco-section">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-6 text-center mb-5">
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>{{ $pesan }}</strong>
                                    <button type="button" class="close" data-dismiss="alert"
                                        aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    @else
                        <section class="ftco-section">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-md-6 text-center mb-5">
                                        <h2 class="heading-section">Selamat Datang!</h2>
                                    </div>
                                </div>
    @endif

    <div class="row justify-content-center">
        <div class="col-md-7 col-lg-5">
            <div class="login-wrap p-4 p-md-5">
                <div class="text-center"> <img src="{{ asset('assets1/img/kesmas.png') }}" alt="50" width="100">
                </div>
                <h3 class="text-center mb-4">Silahkan login untuk masuk!</h3>
                <form action="/login" class="login-form" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text"
                            class="form-control rounded-left {{ $errors->has('username') ? 'is-invalid' : '' }}"
                            placeholder="Username" name='username' id="username">
                        @if ($errors->has('username'))
                            <p class="text-danger">{{ $errors->first('username') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <input type="password"
                            class="form-control rounded-left {{ $errors->has('password') ? 'is-invalid' : '' }}"
                            placeholder="Password" name='password' id="password">
                        @if ($errors->has('password'))
                            <p class="text-danger">{{ $errors->first('password') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control btn btn-primary rounded submit px-3">Masuk</button>
                    </div>
                    <div class="form-group d-md-flex">
                        <div class="w-50">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                                  Ingat Saya
                                </label>
                              </div>
                        </div>
                        <div class="w-50 text-md-right">
                            <a href="#">Lupa Password</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    </section>

    <script src="{{ asset('assets1/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets1/js/popper.js') }}s"></script>
    <script src="{{ asset('assets1/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets1/js/main1.js') }}"></script>

</body>

</html>
