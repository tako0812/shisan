@extends('layouts.app') @section('content')
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

<section>
    <h2>新規投稿</h2>
    <form action="send.php" method="post">
        名前 : <input type="text" name="name" value=""><br>
        投稿内容: <input type="text" name="contents" value=""><br>
        <button type="submit">投稿</button>
    </form>
</section>


@endsection