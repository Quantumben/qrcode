@php

$Qrcode = DB::table('qrcodes')->get();
// $Qrcode = Qrcode::all();
@endphp

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laravel Generate QR Code Examples</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>



    <div class="container mt-4">
        <div class="card">
            @foreach ($Qrcode as $Qrcod)

            <div class="card-header">
                <h2>Simple QR Code</h2>
            </div>
            <div class="card-body">
                {!! QrCode::size(80)->generate($Qrcod->btc) !!}
                <br>
                <br>
                <h5>{{ $Qrcod->btc }}</h5>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h2>Color QR Code</h2>
            </div>
            <div class="card-body">
                {!! QrCode::size(80)->backgroundColor(255,90,0)->generate('RemoteStack') !!}
            </div>
        </div>
    </div>
        @endforeach

</body>
</html>
