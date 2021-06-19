<!DOCTYPE html>
<html>
<head>
    <title>How to Generate Bar Code in Laravel? - Coding Xpress</title>
</head>
<body>

<h1>How to Generate Bar Code in Laravel? - Coding Xpress</h1>

<h3>Product: 0001245259634</h3>
@php
    $generator = new Picqer\Barcode\BarcodeGeneratorHTML();
@endphp

{!! $generator->getBarcode('0001245259634', $generator::TYPE_CODE_128) !!}


<h3>Product 2: 000005263638</h3>
@php
    $generatorPNG = new Picqer\Barcode\BarcodeGeneratorPNG();
@endphp

<img src="data:image/png;base64,{{ base64_encode($generatorPNG->getBarcode('000005263638', $generatorPNG::TYPE_CODE_128)) }}">
</body>
</html>
