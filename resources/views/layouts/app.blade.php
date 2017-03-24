<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', '沃邦教材版本管理系统') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    <style>
        .td {border: solid 1px gainsboro}
    </style>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', '沃邦教材版本管理系统') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">登录</a></li>
                            {{--<li><a href="{{ url('/register') }}">Register</a></li>--}}
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            退出
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <script>
        {{--新增附件的表单中，当点击全部版本时，隐藏版本选项；点击特定版本时，显示版本选项。--}}
        function showVersion() {
            document.getElementById('versionDiv').style.display='block';
        }
        function hideVersion() {
            document.getElementById('versionDiv').style.display='none';
        }
        {{--新增教材的表单中，点击考试类型时，显示其相应的科目--}}
        function showSubject(id) {
            var xhr=new XMLHttpRequest();
            xhr.onreadystatechange=function () {
                if (xhr.readyState==4 && xhr.status==200){
                    document.getElementById('subject').innerHTML=xhr.responseText;
                }
            };
            xhr.open('get','/subject/'+id,true);
            xhr.send();
        }
        {{--编辑教材的表单中，点击考试类型时，显示其相应的科目--}}
        function editBook(id) {
            var xhr=new XMLHttpRequest();
            xhr.onreadystatechange=function () {
                if (xhr.readyState==4 && xhr.status==200){
                    document.getElementById('subjects').innerHTML=xhr.responseText;
                }
            };
            xhr.open('get','/subject/'+id,true);
            xhr.send();
        }

    </script>
</body>
</html>
