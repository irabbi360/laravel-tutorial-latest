<!DOCTYPE html>
<html>
<head>
    <title>How to Generate QR Code in Laravel 8? - Coding Xpress</title>
</head>
<body>

<div class="visible-print text-center">
    <h1>Laravel 8 - QR Code Generator Example</h1>

    {!! QrCode::size(250)->generate('www.devstarit.com'); !!}

    <p>example by Coding Xpress</p>
</div>

</body>
</html>
