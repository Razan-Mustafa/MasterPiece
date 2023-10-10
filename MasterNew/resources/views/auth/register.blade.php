<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="../css/signup.css">
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
            <img id="imglog" src="../photos/signup1.jpg" alt=""> 
        </div>


        <!-- form side -->
        <div id="design1" class=" col col-md-3">
            <div id="log">
                <!-- title -->
                <div id="top">
                <img id="logo" src="../photos/logo1.png" alt="">
                <p id="welcome">Welcome to ModaRenta</p>
                <p id="title">Signup</p>
                </div>


                <!-- form -->
                <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="row">
                    <div class="col col-md-6 mb-3">
                        <label for="firstname" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="firstname" name="first_name" value="{{old('first_name')}}">
                        @error('first_name')
                        <span>
                            {{ $message }}
                        </span>
                        @enderror
                    </div>


                    <div class="col col-md-6 mb-3">
                        <label for="lastname" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="lastname" name="last_name" value="{{old('last_name')}}">
                        @error('last_name')
                        <span>
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col col-md-6 mb-3">
                        <label for="Email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" name="email" value="{{old('email')}}">
                        @error('email')
                        <span>
                            {{ $message }}
                        </span>
                        @enderror
                    </div>


                    <div class="col col-md-6 mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" id="phone" name="phone" value="{{old('phone')}}">
                        @error('phone')
                        <span>
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col col-md-6 mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                        @error('password')
                        <span>        
                        @if ($message == 'The password format is invalid.')
                        The password must contain at least one uppercase letter, one lowercase letter, one digit, and one special character.
                        @else
                            {{ $message }}
                        @endif
                        </span>
                        @enderror
                    </div>
                    <div class="col col-md-6 mb-3">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                        @error('password_confirmation')
                        <span>
                            {{ $message }}
                        </span>
                        @enderror
                        

                    </div>
                </div>


                <div id="flex">
                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="Accept" name="accept">
                      <label id="Accept" class="form-check-label" for="Accept">You're accepting the Terms & Conditions.</label>
                      @error('accept')
                    <span>
                        @if ($message == 'The accept must be accepted.')
                        *requried                         
                        @endif
                       
                    </span>
                    @enderror
                    </div>
                    <div>
                     <button id="logbtn" type="submit" class="btn">Signup</button> <br>
                    </div>
                    </div>
                    
                </form>

                <!-- logwith -->
                <!-- <div id="logwith">
                    <p>Or login with:</p>
                    <img src="../photos/facebook.jpeg" alt="" width="40px">
                    <img src="../photos/google.jpeg" alt="" width="40px">
                    <img src="../photos/tweter.jpeg" alt="" width="40px">
                </div> -->
                <p id="have">Do you have account? <b> <a href="{{ route('login') }}">Login Now</a></b></p>

            </div>

            
        </div>
        <div class=" col col-md-3"></div>
    </div>

<script src="https://kit.fontawesome.com/65d53f33a7.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>
</html>















 {{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
