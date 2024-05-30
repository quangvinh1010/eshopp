<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orderItems = OrderItem::all();
        return view('Admin.orderItems.index', compact('orderItems'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = Product::all();
        $orders = Order::all();
        return view('Admin.orderItems.create', compact('products', 'orders'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $orderItem = OrderItem::create($request->only([
            'product_id', 'order_id', 'quantity', 'price'
        ]));

        $message = $orderItem ? "Create success!" : "Create fail!";
        return redirect()->route('Admin.orderItems.index')->with('message', $message);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Not implemented. You may add logic here if needed.
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $products = Product::all();
        $orders = Order::all();
        $orderItem = OrderItem::findOrFail($id);
        return view('Admin.orderItems.edit', compact('orderItem', 'products', 'orders'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $orderItem = OrderItem::findOrFail($id);

        $updated = $orderItem->update($request->only([
            'product_id', 'order_id', 'quantity', 'price'
        ]));

        $message = $updated ? "Updated successfully!" : "Update failed!";
        return redirect()->route('Admin.orderItems.index')->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleted = OrderItem::destroy($id);

        $message = $deleted ? "Delete successfully!" : "Delete failed!";
        return redirect()->route('Admin.orderItems.index')->with('message', $message);
    }
}