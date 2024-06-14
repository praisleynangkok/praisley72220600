<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Decimal</title>
</head>
<body>
    <h1>Data Decimal</h1>
    <ul>
        @foreach($decimalArray as $decimal)
            <li>{{ $decimal }}</li>
        @endforeach
    </ul>
</body>
</html>
