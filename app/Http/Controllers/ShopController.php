<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
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

    public function add()
    {
        return view('create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('setup');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //Shop::create($request->all());
        $shop = new Shop;
        $shop->user_id = $request->user_id;
        $shop->businessName = $request->businessName;
        $shop->businessDescription = $request->businessDescription;
        $shop->businessAddress = $request->businessAddress;
        $shop->businessCity = $request->businessCity;
        $shop->businessState = $request->businessState;
        $shop->businessWhatsapp = $request->businessWhatsapp;
        $shop->businessFacebook = $request->businessFacebook;
        $shop->businessInstagram = $request->businessInstagram;
        $shop->save();

        return view("store", ["storeName" => $shop->businessName, "storeId" => $shop->id]);
    }

    public function product(Request $request)
    {

        //Shop::create($request->all());
        $product = new Product;
        $product->shop_id = $request->shop_id;
        $product->productName = $request->productName;
        $product->productDescription = $request->productDescription;
        $product->productPrice = $request->productPrice;
        $product->productImage = $request->productImage;

        $product->save();

        return view("confirmation");
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
