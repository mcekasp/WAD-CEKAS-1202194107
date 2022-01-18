<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function index()
    {
        $wishlist = Wishlist::where('user_id', Auth::id())->get();
        return view('frontend.wishlist', compact('wishlist'));
    }

    public function add(Request $request)
    {
        if(Auth::check())
        {
            $prod_id = $request->input('product_id');
            if(Product::find($prod_id))
            {
                $wish = new Wishlist();
                $wish->prod_id = $prod_id;
                $wish->user_id = Auth::id();
                $wish->save();
                return response()->json(['status' => "Produk Berhasil ditambahkan ke Wishlist"]);
            }
            else
            {
                return response()->json(['status' => "Produk Tidak ditemukan"]);
            }
        }
        else
        {
            return response()->json(['status' => "Silakan login terlebih dahulu!"]);
        }
    }

    public function deleteitem(Request $request)
    {
        if(Auth::check())
        {
            $product_id = $request->input('prod_id');
            if(Wishlist::where('prod_id', $product_id)->where('user_id', Auth::id())->exists())
            {
                $wish = Wishlist::where('prod_id', $product_id)->where('user_id', Auth::id())->first();
                $wish->delete();
                return response()->json(['status' => "Produk berhasil dihapus dari wishlist"]);
            }
        }
        else
        {
            return response()->json(['status' => "Silakan login terlebih dahulu!"]);
        }
    }

    public function wishlistcount()
    {
        $wishcount = Wishlist::where('user_id', Auth::id())->count();
        return response()->json(['count' => $wishcount]);
    }
}
