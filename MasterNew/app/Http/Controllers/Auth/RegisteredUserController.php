<?php

namespace App\Http\Controllers\Auth;
use App\Http\Requests\RegistrationRequest;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Models\Cart;


class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'phone' => ['required', 'regex:/^07\d{8}$/'], 
            'password' => ['required', Rules\Password::defaults(),
                'regex:/^(?=.*[A-Z])/',
                'regex:/^(?=.*[a-z])/',
                'regex:/^(?=.*\d)/', 
                'regex:/^(?=.*[@$!%*#?&])/',],
            'password_confirmation' => ['required', 'same:password'],

            'accept' => 'accepted',

        ]);

       

        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        Cart::where('user_id', auth()->user()->id)->delete();

        $sessionCart = session('cart');

        if ($sessionCart != null) {
        foreach ($sessionCart as $item){
            Cart::create([
            'user_id' => auth()->user()->id,
            'product_id' => $item['product_id'],
            'quantity' => $item['quantity'],
            'name' => $item['name'],
            'color' => $item['color'],
            'size' => $item['size'],
            'price' => $item['price'],
            'img' => $item['img'],
        ]);
        session()->forget('cart');
        }
    }
        return redirect()->back();
    }

}
