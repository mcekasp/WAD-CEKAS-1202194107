<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::where('status', '0')->get();
        return view('admin.orders.index', compact('orders'));
    }

    public function view($id)
    {
        $orders = Order::where('id', $id)->first();
        return view('admin.orders.view', compact('orders'));
    }

    public function updateorder(Request $request, $id)
    {
        $orders = Order::find($id);
        $orders->status = $request->input('order_status');
        $orders->update();
        return redirect('orders')->with('status', "Order berhasil diperbarui");
    }

    public function orderhistory()
    {
        $orders = Order::where('status', '3')->get();
        return view('admin.orders.history', compact('orders'));
    }

    public function dikirim()
    {
        $orders = Order::where('status', '2')->get();
        return view('admin.orders.dikirim', compact('orders'));
    }

    public function disiapkan()
    {
        $orders = Order::where('status', '1')->get();
        return view('admin.orders.disiapkan', compact('orders'));
    }
    
    public function resi(Request $request, $id, $user_id)
    {
        $order = Order::where('id', $id)->where('user_id', $user_id)->first();
        if($request -> hasFile('image'))
        {
            $path = 'assets/uploads/resipengiriman/'.$order->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/resipengiriman',$filename);
            $order->image = $filename;
        }
        $order->user_id = $user_id;
        $order->update();
        return redirect('orders')->with('status','Bukti Pembayaran Berhasil Diupload.');
    }
}
