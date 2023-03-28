<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-app-layout>
        <header>
            <meta charset="utf-8">
            <title>ShiftApplication</title>
            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
            <link rel="stylesheet" type="text/css" href="{{asset('/css/style.css')}}">
        </header>
        <body>
            <div class='header'>
                <h2 class="left">シフト管理</h2>
            </div>
            <div class='body clear'>
                <div class="link">
                    <a class="item" href="/shifts/desired">希望シフト一覧</a>
                    <a class="item" href="/shifts/confirm">シフト一覧</a>
                </div>
            </div>
            <div class='fotter clear right'>
                <button type='button' onclick="location.href='/shifts/confirm/create'">シフト作成</button>
                <button type='button' onclick="location.href='/shifts/desired/create'">シフト申請</button>
            </div>
        </body>
    </x-app-layout>
</html>