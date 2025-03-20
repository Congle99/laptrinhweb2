@extends('dashboard')

@section('content')
    <style>
        li{
            list-style: none;
            
        }
        .card_h{
            display: flex;
            justify-content: center;
        }
        a {
            color: #000000; 
        }

    </style>
    <main class="login-form">
        <div class="cotainer">
            <div class="row justify-content-center">
            <div class="container">
            <div class="card" >
                   <div class="card_h" >
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login |</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.createUser') }}">Create user|</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('signout') }}">Logout</a>
                    </li>
                    </div>
                </div>
            </div>
                <div class="col-md-4">
                    <div class="card">
                        <h3 class="card-header text-center">Login</h3>

                        <div class="card-body">
                            <form method="POST" action="{{ route('user.authUser') }}">
                                @csrf
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Email" id="email" class="form-control" name="email" required
                                           autofocus>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Remember Me
                                        </label>
                                    </div>
                                </div>
                                <div class="d-grid mx-auto">
                                    <button type="submit" class="btn btn-dark btn-block">Signin</button>
                                </div>
                            
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
