<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>{{ $title }}</title>
    {{ $link }}
</head>
<body>
    <header>
        <p class="soc">S.O.C Posts</p>


        {{-- PC用メニュー --}}
        <div class="nav">
            <a href="{{ route('camp_view') }}">キャンパーの知恵広場</a>
            <span>|</span>
            <a href="{{ route('fishing_view') }}">アングラーの知恵広場</a>
        </div>


        {{-- スマホ用メニューバー --}}
        <div class="sp-menu">
            <span id="open" class="material-icons">menu</span>
        </div>

    </header>

    <div class="overlay">
        <span id="close" class="material-icons">close</span>
        <nav>
            <ul>
                <li><a href="{{ route('camp_view') }}">キャンパーの知恵広場</a> &raquo;</li>
                <li><a href="{{ route('fishing_view') }}">アングラーの知恵広場</a> &raquo;</li>
            </ul>
        </nav>
    </div>


    {{ $slot }}


    <div class="socImg">
        <img src="{{ url('img/socImage.jpeg') }}" alt="" width="100%" height="65%">
        <a href="https://instagram.com/setagaya_outdoor_club?utm_medium=copy_link">S.O.Cのインスタはこちら</a>
        <a href="https://youtube.com/channel/UCIy-uZpo1qu3a-f2wdv4HkA">S.O.CのYouTubeはこちら</a>
    </div>
    <footer>
        <span>© 2021 S.O.C Co.,Ltd. All Rights Reserved</span>
    </footer>

    <script src="{{ url('js/main.js') }}"></script>
</body>
</html>
