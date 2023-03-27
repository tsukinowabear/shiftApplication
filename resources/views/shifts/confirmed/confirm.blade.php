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
                <h2 class="left">シフト一覧</h2>
                <div class="button">
                    <button type='button' class="right" onclick="location.href='/shifts/desire'">希望シフト一覧</button>
                </div>
            </div>
            <div class='body clear'>
                <!-- foreach$table_data as $shift) -->
                    <div class='content left'>
                        <div class="store flex">
                            <p class='item company'>○○株式会社</p>
                            <p class='item store'>×× □□店</p>
                        </div>
                        <div class="shift flex">
                            <p class='item text'>希望シフト</p>
                            <p class='item start'>9:00</p>
                            <p class='item'>~</p>
                            <p class='item finish'>18:00</p>
                        </div>
                    </div>
                    <!--
                    <div class='right'>
                        <button type='button' onclick="location.href='/shifts/confirm/{ $shift->id }}/edit'">編集</button>
                        <button type='button' onclick="location.href='/shifts/comfirm/{ $shift->id }}/delete'">削除</button>
                    </div>
                    -->
                <!-- endforeach -->
            </div>
            <div class='fotter clear right'>
                <button type='button' onclick="location.href='/shifts/confirm/create'">シフト確定</button>
                <button type='button' onclick="location.href='/shifts/desire/create'">シフト申請</button>
            </div>
        </body>
    </x-app-layout>
</html>