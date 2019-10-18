@extends('layouts.master')


@section('title','Login')

@section('header')
@include('includes.navbar')
<section>
    <div class="relative pb-32 h-full lg:py-24"
        style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)) , url(/img/listing-image.jpg) top center;background-size: cover;">
        <div class="text-center text-white gw-center">
            <h3 class="text-xl font-bold lg:text-4xl">Welcome Back!</h3>
            <p class="text-base lg:text-xl">Login to your account</p>
        </div>
    </div>
</section>
@endsection

@section('content')
<section class="container mx-auto flex h-full justify-center items-center my-24">
    <div class="p-8 rounded shadow-lg border-primary border-t-4">
        <div>
            <h3 class="font-bold text-2xl">{{ __('Login') }}</h3>
        </div>
        <div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mt-4">
                    <label for="email" class="block font-bold text-gray-700 text-xs mb-2">
                        {{ __('E-Mail Address') }}
                    </label>
                    <input class="form-input border border-gray-200 @error('email') border-red-500 @enderror"
                        type="email" placeholder="Email" name="email" value="{{ old('email') }}" required
                        autocomplete="email" autofocus>
                    @error('email')
                    <p role="alert" class="mt-2 text-red-500 text-xs">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mt-4">
                    <label for="password" class="block font-bold text-gray-700 text-xs mb-2 ">
                        {{ __('Password') }}
                    </label>
                    <input name="password"
                        class="form-input border border-gray-200 @error('password') border-red-500 @enderror"
                        type="password" placeholder="Password" required autocomplete="current-password">
                    @error('password')
                    <p role="alert" class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mt-4">
                    <label class="items-center">
                        <input name="remember" type="checkbox" class="form-checkbox"
                            {{ old('remember') ? 'checked' : '' }}>
                        <span class="ml-2 text-xs">{{ __('Remember Me') }}
                    </label>
                </div>

                <div class="flex items-center justify-between mt-5">
                    <button class="btn btn-primary" type="submit">
                        {{ __('Login') }}
                    </button>
                    @if (Route::has('password.request'))
                    <a class="inline-block align-baseline text-xs  hover:text-primary"
                        href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    @endif
                </div>
            </form>
            <div class="border-t-tiny mt-5 border-gray-500"></div>
            <div class="mt-4">
                <p class="text-xs text-center">Login with Social Media</p>
                <div class="flex mt-4 justify-center">
                    <a href=""><img class="h-6" src="img/search.svg" alt="google"></a>
                    <a href=""><img class="h-6 mx-10" src="img/facebook.svg" alt="facebook"></a>
                    <a href=""><img class="h-6" src="img/twitter.svg" alt="twitter"></a>

                </div>
            </div>
        </div>




    </div>
</section>

@endsection


@section('footer')
@include('includes.footer')

@endsection