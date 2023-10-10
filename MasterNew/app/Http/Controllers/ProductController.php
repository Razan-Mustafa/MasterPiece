<?php

namespace App\Http\Controllers;

// use App\Models\Product;
// use App\Models\Category;
use App\Models\ItemDetaile;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function showAll($category_id)
    {    
        $products = ItemDetaile::where('category_id', $category_id)->paginate(6);

        // $products = Product::join('item_detailes', 'products.item_id', '=', 'item_detailes.id')
        //     ->join('colors', 'products.color_id', '=', 'colors.id')
        //     ->join('sizes', 'products.size_id', '=', 'sizes.id')
        //     ->join('categories', 'item_detailes.category_id', '=', 'categories.id')
        //     ->select(
        //         'products.*',
        //         'item_detailes.id as item_details_id',
        //         'item_detailes.name as item_name',
        //         'item_detailes.description as item_description',
        //         'item_detailes.price as item_price',
        //         'item_detailes.quantity as item_quantity',
        //         'item_detailes.is_membership_eligible as item_is_membership_eligible',
        //         'colors.name as color',
        //         'sizes.name as size',
        //         'categories.name as category_name',
        //         'item_detailes.img1 as img1',
        //         'item_detailes.img2 as img2',
        //         'item_detailes.img3 as img3',
        //         'item_detailes.is_membership_eligible as member'
        //     )
        //     ->where('categories.id', $category_id) 
        //     ->paginate(4);
    
        return view('pages.products', compact('products'));    
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
