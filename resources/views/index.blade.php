<x-layout>
    <x-slot name="title">
        S.O.C Posts - ホーム
    </x-slot>
    <x-slot name="link">
        <link rel="stylesheet" href="{{ url('css/style.css') }}">
    </x-slot>

    <div class="index">
        <h1>
            S.O.C
            Posts
        </h1>
        <h3><a href="{{ route('camp_view') }}">キャンパーの知恵広場</a></h3>
        <h3><a href="{{ route('fishing_view') }}">アングラーの知恵広場</a></h3>
    </div>
</x-layout>
