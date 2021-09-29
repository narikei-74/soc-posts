<x-layout>
    <x-slot name="title">
        S.O.C Posts - アングラー 掲示板
    </x-slot>
    <x-slot name="link">
        <link rel="stylesheet" href="{{ url('css/style.css') }}">
        <link rel="stylesheet" href="{{ url('css/post.css') }}">
        <link rel="stylesheet" href="{{ url('css/fishing.css') }}">
    </x-slot>

    <div class="main">
        <div class="back-link">
            <a href="{{ route('index_view') }}">home</a> &raquo; <span>アングラーの知恵広場</span>
        </div>

        <hr>

        <h1>アングラーの知恵広場</h1>

        <form class="search" action="{{ route('fishing_search') }}" method="get">
            @csrf
            <input type="text" name="search" placeholder="キーワードを入力" value="@if (isset($search)) {{ $search }} @endif">
            <button>検索</button>
            <br>
            <br>
            <a href="{{ route('fishing_view') }}">検索結果をクリア</a>
        </form>

        <form class="do_post" action="{{ route('fishing_post') }}" method="POST">
            @csrf
            <h2>投稿する</h2>
            <label>投稿者名 : <input type="text" name="name" value="{{ old('name') }}"></label>
            @error('name')
                <div class="error">{{ $message }}</div>
            @enderror
            <br>
            <label>タイトル : <input type="text" name="title" value="{{ old('title') }}"></label>
            @error('title')
                <div class="error">{{ $message }}</div>
            @enderror
            <br>
            <label>投稿内容 : <textarea name="text">{{ old('text') }}</textarea></label>
            @error('text')
                <div class="error">{{ $message }}</div>
            @enderror
            <button>投稿する</button>
        </form>

        <div class="posts">
            <h2>投稿一覧</h2>
            <hr>
            @foreach ($posts as $post)
            <div class="post">
                <h3>{{ $post->title }}</h3>
                <p class="name">投稿者  {{ $post->name }}</p>
                <p>{!! nl2br(e($post->text)) !!}</p>
            </div>
            <hr>
            @endforeach
        </div>
    </div>
</x-layout>
