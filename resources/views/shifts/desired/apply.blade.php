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
                <h2 class="left">希望シフト一覧</h2>
                <div class="button">
                    <button type='button' class="right" onclick="location.href='/'">シフト一覧</button>
                    <button type='button' class="right" onclick="location.href='/shifts/desire'">希望シフト一覧</button>
                </div>
            </div>
            <div class="body clear">
                <form action="/shifts/desire" method="POST">
                    @csrf
                    <div class="content left">
                        <div class="store flex">
                            <p class='item company'>○○株式会社</p>
                            <p class='item store'>×× □□店</p>
                        </div>
                        <div class="shift flex">
                            <div class="date">
                                <p class="item">日付</p>
                                <input type="date" class="item" name="post[date]" />
                            </div>
                            <div class="start">
                                <p class="item">出勤時間</p>
                                <input  type="time" class="item" name="post[start]" />
                            </div>
                            <p class="between">~</p>
                            <div class="finish">
                                <p class="item">退勤時間</p>
                                <input  type="time" class="item" name="post[finish]" />
                            </div>
                        </div>
                    </div>
                    <div class="fotter clear right">
                        <button type="submit" class="">申請</button>
                        <button type='button' class="" onclick="location.href='/shifts/desire'">戻る</button>
                    </div>
                </form>
            </div>
        </body>
    </x-app-layout>
</html>