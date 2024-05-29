<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    /**
     * Handle the checkout process.
     */
    public function handleCheckout(Request $request)
    {
        $value = $request->only(['name', 'email', 'address', 'phone']);
        
        if (empty($value['address']) || empty($value['phone'])) {
            return redirect()->back()->with('warning', 'Vui lòng nhập đầy đủ thông tin!');
        } else {
            return redirect()->back()->with('success', 'Bạn đã đặt hàng thành công!');
        }
    }
}