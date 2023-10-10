<?php

namespace App\Http\Controllers;

use App\Models\PaymentMethod;
use App\Models\Shipment;
use App\Models\RentalTransactions;
use App\Models\RentalItems;
use Illuminate\Http\Request;
use App\Models\Cart;

class PaymentMethodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->user()){
            $user_id_to_check=auth()->user()->id;
            $products = Cart::where('user_id', $user_id_to_check)->get();       
            $num = Cart::where('user_id', $user_id_to_check)->count();       
            return view('pages.checkout', compact('products','num'));
        }else{
            return redirect()->back()->with('you have to login');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $id)
    {
        $user_id = Auth::user()->id;

        $details = [
            'user_id' => $user_id,
            'product_id' => $request->input('id'),
            'name' => $request->input('name'),
            'color' => $request->input('color'),
            'size' => $request->input('size'),
            'price' => $request->input('price'),
            'img' => $request->input('img'),
            'quantity' => 1,
        ];
        Cart::create($details);    

        // return redirect()->route('single', ['id' => $id]);
        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $iduser = auth()->user()->id;
        $cart = Cart::where('user_id', $iduser)->get();

        $totalPrice = 0;
        foreach ($cart as $item) {
            $totalPrice += $item->price * $item->quantity;
        }

        $shipment = Shipment::create([
            'user_id' => auth()->user()->id,
            'shipmentDate' => now()->format('Y-m-d'),
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone' => $request->phone,
            'city' => $request->city,
            // 'address' => $request->address,
        ]);
        // dd($shipment);

        $payment = PaymentMethod::create([
            'user_id' => auth()->user()->id,
            'payment_date' => now()->format('Y-m-d'),
            'method' => 'visa',
            'total_amount' => $totalPrice,
        ]);

        $RenatlOrder = RentalTransactions::create([
            'order_date' => now()->format('Y-m-d'),
            'user_id' => auth()->user()->id,
            'shipment_id' => $shipment->id,
            'payment_id' => $payment->id,
            'total_amount' => $totalPrice,
        ]);

        foreach ($cart as $item){
            RentalItems::create([
                'rental_id' => $RenatlOrder->id,
                'product_id' => $item->product_id,
                'quantity' => $item->quantity,
                'unit_price' => $item->price,
                'start_date' => $item->start_date,
        ]);
        }

        Cart::where('user_id', $iduser)->delete();

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PaymentMethod  $paymentMethod
     * @return \Illuminate\Http\Response
     */
    public function show(PaymentMethod $paymentMethod)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PaymentMethod  $paymentMethod
     * @return \Illuminate\Http\Response
     */
    public function edit(PaymentMethod $paymentMethod)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PaymentMethod  $paymentMethod
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PaymentMethod $paymentMethod)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PaymentMethod  $paymentMethod
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaymentMethod $paymentMethod)
    {
        //
    }
}
