<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\color;
use App\Models\ItemDetaile;
use App\Models\Cart;
use Auth;

// use App\Models\ItemDetaile;


class SingleItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $products = Product::where('item_id', $id)
            ->select('item_id')
            ->distinct()
            ->get();

        
        $colors = Product::where('item_id', $id)
            ->select('color_id')
            ->distinct()
            ->get();

        // $colors = Color::whereIn('id', $products_color)->get();

        $sizes = Product::where('item_id', $id)
            ->select('size_id')
            ->distinct()
            ->get();
            
        
        return view('pages.singleitem', compact('products','colors','sizes'));
    }   
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $id)
    {
        $valid = Cart::where('product_id', $request->input('id'))->first();

        if (auth()->user()){
        $user_id = Auth::user()->id;
            if (!$valid){
            $details = [
                'user_id' => $user_id,
                'product_id' => $request->input('id'),
                'name' => $request->input('name'),
                'color' => $request->input('color'),
                'size' => $request->input('size'),
                'price' => $request->input('price'),
                'img' => $request->input('img'),
                'start_date' => $request->input('date'),
                'quantity' => 1,
            ];
            Cart::create($details);    
            }else{
                $valid->quantity++;
                $valid->save();       
            }
        }else{
            $cart = session()->get('cart', []);
            if(isset($cart[$id])){
                $cart[$id]['quantity']++;
            }else{
                $cart[$id]=[
                    'product_id' => $request->input('id'),
                    'name' => $request->input('name'),
                    'color' => $request->input('color'),
                    'size' => $request->input('size'),
                    'price' => $request->input('price'),
                    'img' => $request->input('img'),
                    'start_date' => now()->format('Y-m-d'),
                    'quantity' => 1,
                ];
            }
            session()->put('cart', $cart);
        }

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
