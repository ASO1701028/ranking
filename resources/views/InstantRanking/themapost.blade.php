<html>
<head>
    <title>InstantRanking</title>
    <style>
        #caption{font-size:30pt;color: #fb9209;}
        /*#error{font-size:10pt;color:red;}*/
        #button {
            display: inline-block;
            border-radius: 10%; /* 角丸       */
            font-size: 14pt; /* 文字サイズ */
            text-align: center; /* 文字位置   */
            cursor: pointer; /* カーソル   */
            padding: 10px 15px; /* 余白       */
            background: #ffa64d; /* 背景色     */
            color: #ffffff; /* 文字色     */
            line-height: 1em; /* 1行の高さ  */
            transition: .3s; /* なめらか変化 */
            border: 2px solid #ffa64d; /* 枠の指定 */
        }
    </style>
</head>
<body>
@section('content')
    <div id="caption"align="center">InstantRanking</div>
    {{--@if(count($errors)>0)--}}
        {{--<div id="error">--}}
            {{--<ul>--}}
                {{--@foreach($errors->all() as $error)--}}
                    {{--<li>{{$error}}</li>--}}
                {{--@endforeach--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--@endif--}}
    <form action="./add" method="post">
        <div align="center">
            {{csrf_field()}}
            <p>テーマ<br>
                <textarea name="thema" rows="2" cols="30" wrap="soft"></textarea>
                {{--<input type="text" name="name" value="{{old('thema')}}" id="themaform">--}}
            </p>
            <p>ジャンル
                <select name="genre">
                    <option value="食べ物">食べ物</option>
                    <option value="レジャー">レジャー</option>
                </select></p>
            <input type="submit" value="投稿" id="button">
        </div>
    </form>
@show
</body>
</html>