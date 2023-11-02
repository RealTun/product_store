<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    //
    public function index()
    {
        $orders = Order::all();
        return view("admin.orders.index", compact("orders"));
    }

    public function store(Request $request)
    {
        $order = Order::create([]);
        $cart = session()->get("cart");
        foreach ($cart as $key => $details) {
            OrderItem::create([
                "product_id" => $details["id"],
                "order_id" => $order->id,
                "quantity" => $details["quantity"],
            ]);
        }
        Session::flush();
        return redirect()->route('home');
    }

    public function show(string $id)
    {
        $order = OrderItem::join('products', 'product_id', '=', 'products.id')->where('order_items.order_id', '=', $id)->get();
        $total = OrderItem::join('products', 'order_items.product_id', '=', 'products.id')
        ->selectRaw('SUM(products.price * order_items.quantity) AS total')
        ->where('order_items.order_id', '=', $id)
        ->value('total');
        return view('admin.orders.details', compact('order', 'total'));
    }

    public function delete(string $id)
    {
        $order = Order::find($id);
        $order->delete();
        return redirect()->route('admin.orders.index')->with('success', 'Delete order successfully');
    }
}
