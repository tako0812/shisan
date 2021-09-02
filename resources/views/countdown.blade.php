@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('css/app.css') }}">

<div class="container">
    <div class="row align-items-center">
        <div class="col-12">

            <h2>２０２４年パリオリンピックまで</h2>
            <p class="timer">あと<span id="day"></span>日<span id="hour"></span>時間<span id="min"></span>分<span
                    id="sec"></span>秒<span id="com"></span></p>
            <script type="text/javascript" src="js/countdowns.js"></script>
        </div>
    </div>
</div>



<div class="wrap">
    <h1>Draft <strong>Countdown</strong></h1>

    <div class="countdown">
        <div class="bloc-time hours" data-init-value="24">
            <span class="count-title">Hours</span>

            <div class="figure hours hours-1">
                <span class="top">2</span>
                <span class="top-back">
                    <span>2</span>
                </span>
                <span class="bottom">2</span>
                <span class="bottom-back">
                    <span>2</span>
                </span>
            </div>

            <div class="figure hours hours-2">
                <span class="top">4</span>
                <span class="top-back">
                    <span>4</span>
                </span>
                <span class="bottom">4</span>
                <span class="bottom-back">
                    <span>4</span>
                </span>
            </div>
        </div>

        <div class="bloc-time min" data-init-value="0">
            <span class="count-title">Minutes</span>

            <div class="figure min min-1">
                <span class="top">0</span>
                <span class="top-back">
                    <span>0</span>
                </span>
                <span class="bottom">0</span>
                <span class="bottom-back">
                    <span>0</span>
                </span>
            </div>

            <div class="figure min min-2">
                <span class="top">0</span>
                <span class="top-back">
                    <span>0</span>
                </span>
                <span class="bottom">0</span>
                <span class="bottom-back">
                    <span>0</span>
                </span>
            </div>
        </div>

        <div class="bloc-time sec" data-init-value="0">
            <span class="count-title">Seconds</span>

            <div class="figure sec sec-1">
                <span class="top">0</span>
                <span class="top-back">
                    <span>0</span>
                </span>
                <span class="bottom">0</span>
                <span class="bottom-back">
                    <span>0</span>
                </span>
            </div>

            <div class="figure sec sec-2">
                <span class="top">0</span>
                <span class="top-back">
                    <span>0</span>
                </span>
                <span class="bottom">0</span>
                <span class="bottom-back">
                    <span>0</span>
                </span>
            </div>
        </div>
    </div>
</div>











<main class="container">

    <form method="POST">
        {{ csrf_field() }}
        <input class="form-control my-2" type="text" name="name" placeholder="ここに名前を入力" value="{{ old('name') }}">
        <textarea class="form-control my-2" name="content" rows="4" placeholder="ここにコメントを入力"></textarea>
        <input class="form-control my-2" type="submit" value="送信">
    </form>

    @forelse ( $topics as $topic )
    <div class="border my-2 p-2">
        <div class="text-secondary">{{ $topic->name }} さん</div>
        <div class="p-2">{!! nl2br(e($topic->content)) !!}</div>
        <div class="text-secondary">投稿日:{{ $topic->created_at }}</div>
    </div>

    @empty
    <p>投稿はありません。</p>
    @endforelse

</main>

@endsection