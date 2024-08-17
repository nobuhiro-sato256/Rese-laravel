@extends('layouts.app')

@section('css')

@endsection

@section('content')

<div>
    <P>評価レビュー</P>
    <p>店の名前</p>
    <p>お店の評価</p>
    <form action="/evaluation" method="post">
        <div>
            <div>
                <label for="five">星５</label>
                <input type="radio" id="five" name="five" value="5" />
            </div>
            <div>
                <label for="four">星４</label>
                <input type="radio" id="four" name="four" value="4" />
            </div>
            <div>
                <label for="three">星３</label>
                <input type="radio" id="three" name="three" value="3" />
            </div>
            <div>
                <label for="two">星２</label>
                <input type="radio" id="two" name="two" value="2" />
            </div>
            <div>
                <label for="one">星１</label>
                <input type="radio" id="one" name="one" value="1" />
            </div>
        </div>
        <div>
            <label for="comment">評価コメント</label>
            <input type="textarea" id="comment" name="comment" />
        </div>
    </form>
</div>

@endsection