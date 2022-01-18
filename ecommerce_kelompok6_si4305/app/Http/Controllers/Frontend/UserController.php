<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    public function index()
    {
        $orders = Order::where('user_id', Auth::id())->get();
        return view('frontend.orders.index', compact('orders'));
    }

    public function view($id)
    {
        $orders = Order::where('id', $id)->where('user_id', Auth::id())->first();
        return view('frontend.orders.view',compact('orders'));
    }

    public function uploadbukti(Request $request, $id)
    {
        $order = Order::where('id', $id)->where('user_id', Auth::id())->first();
        if($request -> hasFile('image'))
        {
            $path = 'assets/uploads/buktibayar/'.$order->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/buktibayar',$filename);
            $order->image = $filename;
        }
        $order->user_id = Auth::id();
        $order->update();
        return redirect('my-orders')->with('status','Bukti Pembayaran Berhasil Diupload.');
    }
}
