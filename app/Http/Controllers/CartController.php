<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {

        $cart = session()->get('cart');

        if (!$cart) {
            $cart = [];
        }

        // Tambahkan item baru ke dalam keranjang
        $cart[] = [
            'product_name' => $request->product_name,
            'product_price' => $request->product_price,
            'quantity' => $request->quantity
        ];

        // Simpan kembali ke dalam session
        session()->put('cart', $cart);

        // Redirect kembali ke halaman sebelumnya atau halaman checkout
        return redirect()->back(); // Ubah redirect sesuai kebutuhan aplikasi Anda
    }
}
