@extends('auth.master-auth')

@section('NoiDung')

<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
            <div class="col-lg-7">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                    </div>
                    <form class="user" action="{{route('check-register')}}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user"
                                    name="firstname" placeholder="First Name">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control form-control-user"
                                    name="lastname" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control form-control-user"
                                name="email" placeholder="Email Address">
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="text" class="form-control form-control-user"
                                    name="username" placeholder="Username">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="password" class="form-control form-control-user"
                                    name="password" placeholder="Password">
                            </div>
                        </div>
                        <input type="submit" class="btn btn-primary btn-user btn-block" value="Register Account">
                        <hr>
                    </form>
                    <hr>
                    <div class="text-center">
                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                    </div>
                    <div class="text-center">
                        <a class="small" href="login.html">Already have an account? Login!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
