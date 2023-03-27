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
        <form action="/shifts" method"POST">
            @csrf
            <div class='register'>
                <div class='name'>
                    
                </div>
                <div class='mail'>
                    
                </div>
                <div class='password'>
                    
                </div>
                <div class='key_phrase'>
                    <div class='company'>
                        
                    </div>
                    <div class='store'>
                        
                    </div>
                    <div class='empolyee'>
                        
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>