<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="../css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&family=Lobster&family=Pacifico&family=Playfair&display=swap" rel="stylesheet">
</head>
<body>
    <div id="layout">
        <!-- img side -->
        <div class=" col col-md-3"></div>
        <div id="design2" class=" col col-md-3 ">
            <img id="imglog" src="../photos/login.jpg" alt=""> 
        </div>


        <!-- form side -->
        <div id="design1" class=" col col-md-3">
            <div id="log">
                <!-- title -->
                <div id="top">
                <img id="logo" src="../photos/logo1.png" alt="">
                <p id="welcome">Welcome to ModaRenta</p>
                <p id="title">Login</p>
                </div>


                <!-- form -->
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                <div class="mb-3">
                    <label for="email" class="form-label" :value="__('Email')">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" value="{{old('email')}}">
                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                    @error('email')
                    <span>
                        {{ $message }}
                    </span>
                    @enderror   
                </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label" :value="__('Password')">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    @error('password')
                    <span>
                        {{ $message }}
                    </span>
                    @enderror 
                </div>
                  <div id="flex">
                  <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="remember_me" name="remember_me">
                    <label class="form-check-label" for="remember_me">{{ __('Remember me') }}</label>
                  </div>
                  <div id="divbtn">
                   <button id="logbtn" type="submit" class="btn">Login</button><br>
                   
                   @if (Route::has('password.request'))
                   <a id="forget" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                   </a> 
                    @endif
                   
                  </div>
                  </div>
                </form>

                <!-- logwith -->
                <div id="logwith">
                    <p>Or login with:</p>
                    <img src="../photos/facebook.jpeg" alt="" width="40px">
                    <img src="../photos/google.jpeg" alt="" width="40px">
                    <img src="../photos/tweter.jpeg" alt="" width="40px">
                </div>
                {{-- <p>Don't you have account? <b>Signup Now</b></p> --}}
                <p id="have">Don't you have account? <b> <a href="{{ route('register') }}">Signup Now</a></b></p>

            </div>

            
        </div>
        <div class=" col col-md-3"></div>
    </div>

<script src="https://kit.fontawesome.com/65d53f33a7.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body> 
</html>










{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
