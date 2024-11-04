<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // GET: api/orders
    public function index()
    {
        return response()->json(Order::with('product')->get(), 200);
    }

    // POST: api/orders
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $order = Order::create([
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
        ]);

        return response()->json($order, 201);
    }

    // GET: api/orders/{id}
    public function show($id)
    {
        $order = Order::with('product')->find($id);
        if (!$order) {
            return response()->json(['message' => 'Order not found'], 404);
        }

        return response()->json($order, 200);
    }

    // PUT: api/orders/{id}
    public function update(Request $request, $id)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $order = Order::find($id);
        if (!$order) {
            return response()->json(['message' => 'Order not found'], 404);
        }

        $order->update([
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
        ]);

        return response()->json($order, 200);
    }

    // DELETE: api/orders/{id}
    public function destroy($id)
    {
        $order = Order::find($id);
        if (!$order) {
            return response()->json(['message' => 'Order not found'], 404);
        }

        $order->delete();

        return response()->json(['message' => 'Order deleted'], 204);
    }
}
