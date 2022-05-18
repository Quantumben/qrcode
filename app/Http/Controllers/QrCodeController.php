<?php

namespace App\Http\Controllers;

use App\Models\Qrcode;
use Illuminate\Http\Request;

class QrCodeController extends Controller
{
    public function index()
    {
      return view('qrcode');
    }

    public function create()
    {
        return view('create');
    }

    public function store()
    {
        request()->validate([

            'usdt' => 'required',
            'btc' => 'required',
        ]);

        Qrcode::create([

            'usdt' => request('usdt'),
            'btc' => request('btc'),
        ]);

        return redirect('/generate-qrcode');
    }

    public function destroy(Qrcode $Qrcode)
    {
        $Qrcode->delete();

        return redirect('/generate-qrcode');
    }
}
