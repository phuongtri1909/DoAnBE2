<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\ProductCart;
use Auth;
class ProductCartController extends Controller
{
    public function cartProductAdd(Request $request)
    {

        $productId = $request->input('product_id');
      
        $user = Auth::user();
        
        $product_cart = ProductCart::where('user_id', $user->id)
                                ->where('product_id', $productId)
                                ->first();
         
        if ($product_cart) {
            $product_cart->increment('quantity');
        }
        else{
            $product_cart = new ProductCart([
                'product_id' => $productId,
                'user_id' => $user->id,
                'quantity' => "1",
            ]);
            $product_cart->save();
        }

        return back();
    }

    public function favoriteProductRemove(Request $request)
    {
        $product_favorite = ProductCart::find($request->product_favorite_id);
        $product_favorite->delete();
        return redirect()->back();
    }
}