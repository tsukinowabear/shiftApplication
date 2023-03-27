<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ShiftApplication</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <h1>シフト管理</h1>
        <div class='shifts'>
            <h2>2月18日 （土）</h2>
            <div class='desired'>
                <p class='text'>希望シフト</p>
                <p class='start'>9:00</p>
                <p>~</p>
                <p class='finish'>18:00</p>
            </div>
            <div class='fixed'>
                <p class='text'>確定シフト</p>
                <p class='start'>9:00</p>
                <p>~</p>
                <p class='finish'>18:00</p>
            </div>
            <div class='worked'>
                <p class='text'>実勤務時間</p>
                <p class='start'>9:00</p>
                <p>~</p>
                <p class='finish'>18:00</p>
            </div>
        </div>
    </body>
</html>