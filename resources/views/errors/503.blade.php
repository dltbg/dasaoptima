<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Under Maintenance</title>
</head>
<body>
<div style="width: 100%; height: 100vh; display: block; justify-content: center; align-items: center">
    <div style="display: flex; align-items: center; justify-content: center">
        <img src={{asset('/image/logo.png')}} alt="Logo-Dasaoptima" style="width: 500px; aspect-ratio: 1/1">
    </div>
    <div style="display: flex; align-items: center; justify-content: center; font-family: Arial">
        <p style="font-size: 42px">This Website is under maintenance. Please Wait!</p>
    </div>

</div>
</body>
</html>
