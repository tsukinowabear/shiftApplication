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
                <h2 class="left">希望シフト詳細</h2>
                <div class="button">
                    <button type='button' class="right" onclick="location.href='/shifts/comfirm'">シフト一覧</button>
                    <button type='button' class="right" onclick="location.href='/shifts/desired'">希望シフト一覧</button>
                </div>
            </div>
            <div class="body clear">
                <div class="content left">
                    <div class="store flex">
                        <p class='item company'>○○株式会社</p>
                        <p class='item store'>×× □□店</p>
                    </div>
                    <div class="shift flex">
                        <div class="date">
                            <p class="item">日付</p>
                            <p class="item date">{{ $shift->date }}</p>
                        </div>
                        <div class="start">
                            <p class="item">出勤時間</p>
                            <p class="item start">{{ $shift->start }}</p>
                        </div>
                        <p class="between">~</p>
                        <div class="finish">
                            <p class="item">退勤時間</p>
                            <p class="item finish">{{ $shift->finish }}</p>
                        </div>
                    </div>
                </div>
                    <div class="fotter clear right">
                        <button type='button' onclick="location.href='/shifts/desired/{{ $shift->id }}/edit'">編集</button>
                        <button type='button' onclick="location.href='/shifts/desired'">戻る</button>
                    </div>
                </form>
            </div>
        </body>
    </x-app-layout>
</html>