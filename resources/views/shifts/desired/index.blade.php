<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-app-layout>
        <x-slot name="header">
            シフト管理
        </x-slot>
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
                    <button type='button' class="right" onclick="location.href='/shifts/confirm'">シフト一覧</button>
                </div>
            </div>
            <div class='body clear'>
                @foreach($shifts as $shift)
                    <div class='content clear left'>
                        <div class="store flex">
                            <p class='item company'>○○株式会社</p>
                            <p class='item store'>×× □□店</p>
                        </div>
                        <div class="shift flex">
                            <p class='item date'>{{ $shift->date }}</p>
                            <p class='item start'>{{ $shift->start }}</p>
                            <p class='item'>~</p>
                            <p class='item finish'>{{ $shift->finish }}</p>
                        </div>
                    </div>
                    <div class='right'>
                        <button type='button' onclick="location.href='/shifts/desired/{{ $shift->id }}'">詳細</button>
                        <button type='button' onclick="location.href='/shifts/desired/{{ $shift->id }}/edit'">編集</button>
                        
                        <form action="/shifts/desired/{{ $shift->id }}" id="form_{{ $shift->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type='button' onclick="deleteShift({{ $shift->id }})">削除</button>
                        </form>
                    </div>
                @endforeach
            </div>
            <div class='fotter clear right'>
                <button type='button' onclick="location.href='/shifts/desired/create'">シフト申請</button>
                <button type='button' onclick="location.href='/'">戻る</button>
            </div>
            <script>
                function deleteShift(id) {
                    'use strict'
                    
                    if(confirm('削除すると復元できません。\n本当に削除しますか？')) {
                        document.getElementById(`form_${id}`).submit();
                    }
                }
            </script>
        </body>
    </x-app-layout>
</html>