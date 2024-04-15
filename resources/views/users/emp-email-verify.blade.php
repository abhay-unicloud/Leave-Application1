@extends('layouts.login')
@section('content')
    <div class="auth-container d-flex h-100">

        <div class="container mx-auto align-self-center">

            <div class="row">

                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-8 col-12 d-flex flex-column align-self-center mx-auto">
                    <div class="card mt-3 mb-3">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-12 mb-3">

                                    <h2>Password Reset</h2>
                                    <p>Enter your email to recover your ID</p>

                                </div>
                                <form action="{{ route('password_reset') }}" method="POST">
                                    @csrf
                                    <div class="col-md-12">
                                        <div class="mb-4">
                                            <label class="form-label">Email</label>
                                            <input type="email" name="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-4">
                                            <button type="submit" class="btn btn-secondary w-100">RECOVER</button>
                                        </div>
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
