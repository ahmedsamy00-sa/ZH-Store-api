<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\Product;
use App\Models\Trader;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function index()
    {
        $offers = Offer::all();
        return response()->json($offers, 200);
    }


    public function store(Request $request, $id)
    {
        $trader = Trader::findOrFail($id);
        $request->validate([
            'name'=> 'required|string',
            'desc'=>'string',
            'discount'=>'numeric|required|min:0|max:100'
        ]);

        $offer = Offer::create([
            'name'=>$request->name,
            'desc'=>$request->desc,
            'trader_id'=>$id,
            'discount'=>$request->discount . '%'
        ]);

        $products = Product::where('trader_id', $id)->get();
        foreach($products as $product){
            $originalPrice = $product->price;
            $discountValue = ($originalPrice * $request->discount) / 100;
            $finalPrice = $originalPrice - $discountValue;
            $result[] = [
                'product_name' => $product->name,
                'original_price' => $originalPrice,
                'discount' => $request->discount . '%',
                'final_price' => $finalPrice
            ];
        }
        return response()->json([
            'msg'=>'offer added',
            'offer'=>$offer,
            'discounted products'=>$result
        ], 200);
}


    /**
     * get trader 's offers
     */
    public function show($id)
    {
        $trader = Trader::findOrFail($id);
        $traderOffer = Offer::where('trader_id', $id)->get();
        if (!$traderOffer) {
            return response()->json(['msg'=>"not found"], 401);
        }
        return response()->json($traderOffer, 200);
    }


public function getDiscountedProducts($id)
{
    $products = Product::with('trader.offer')
        ->where('category_id', $id)
        ->get();

    if ($products->isEmpty()) {
        return response()->json(['msg' => "No products found"], 404);
    }

    $result = [];

    foreach ($products as $product) {

        $trader = $product->trader;
        $offer = $trader?->offer;

        $originalPrice = $product->price;
        $discount = $offer?->discount ?? 0;

        $discountValue = ($originalPrice * $discount) / 100;
        $finalPrice = $originalPrice - $discountValue;

        $result[] = [
            'product_name'   => $product->name,
            'trader_name'    => $trader?->name,
            'original_price' => $originalPrice,
            'discount'       => $discount . '%',
            'final_price'    => $finalPrice
        ];
    }

    return response()->json($result);
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Offer $offer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Offer $offer)
    {
        //
    }
}
