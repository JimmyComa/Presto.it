<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf_token" value="{{csrf_token()}}"/>
    <link rel="icon" type="image/x-icon" href="/media/logo/logo.svg">
    <title>Presto.it</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="@if(isset($bgc)) {{$bgc}} @endif" data-lang={{session('locale')}}>
    <x-navbar/>
    <x-register/>
    <x-login/>
    {{$slot}}
    <x-btn-add/>
    <x-footer/>
</body>
</html>