@extends('layouts.guest')
@section('guest_content')
<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            {{-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> --}}
            <div class="col-lg-12">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                    </div>
                    <form method="POST" action="{{ route('register') }}" class="user">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" class="form-control form-control-user" placeholder="Name">
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />

                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control form-control-user"
                                placeholder="Email Address">
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />

                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" class="form-control form-control-user"
                                placeholder="Số điện thoại">
                            <x-input-error :messages="$errors->get('phone')" class="mt-2" />

                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="password" name="password" class="form-control form-control-user"
                                    placeholder="Password">
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />

                            </div>
                            <div class="col-sm-6">
                                <input type="password" name="password_confirmation"
                                    class="form-control form-control-user" placeholder="Repeat Password">
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-user btn-block">
                            Register Account
                        </button>
                    </form>
                    <hr>
                    <div class="text-center">
                        <a class="small" href="{{route('login')}}">Already have an account? Login!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection