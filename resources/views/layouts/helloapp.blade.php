<html>
    <head>
        <title>@yield('title')</title>
        <style>
            body{font-size:16pt; color:#999; margin: 5px;}
            h1{font-size:50pt; text-align:right; color:#f6f6f6;
            margin:-20pt 0px -30px 0px; letter-spacing: -4pt;}
            ul{font-size: 12;}
            hr{margin: 25px 100px; border-top: 1px dashed #ddd;}
            .menutitle{font-size: 14; font-weight: bold; margin: 10px;
            border-bottom: solid 1px #ccc; color: #ccc;}
            .content{margin: 10px}
            .footer{text-align: right; font-size: 10pt; margin: 10pt; border-bottom: solid 1px #ccc; color: #ccc;}
            th {background-color: #999; color: #fff; padding: 5px 10px;}
            td {border: solid 1px #aaa; color: #999; padding: 5px 10px;}
        </style>
        <link rel="stylesheet" type="text/css" href="/css/app.css">
    </head>
    <body>
        <h1>@yield('title')</h1>
        @section('menubar')
        <ul>
            <p class="menutitle">※タイトル</p>
            <li>@show</li>
        </ul>
        <hr size='1'>
        <div class="content">
            @yield('content')
        </div>
        <div class="footer">
            @yield('footer')
        </div>
    </body>
</html>