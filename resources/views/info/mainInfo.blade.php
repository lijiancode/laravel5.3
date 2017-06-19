@extends('layouts.frame')
@section('content')
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">欢迎使用仓库管理系统</div>
        <ul class="list-group">
            <li class="list-group-item">用户名：{{ Auth::user()->name}}</li>
            <li class="list-group-item">电子邮件：{{ Auth::user()->email}}</li>
            <li class="list-group-item">注册时间：{{ Auth::user()->created_at}}</li>
            <li class="list-group-item">PHP版本号：{{PHP_VERSION}}</li>
            <li class="list-group-item">操作系统：{{PHP_OS}}</li>
            <li class="list-group-item">服务器信息：{{$_SERVER ['SERVER_SOFTWARE']}}</li>
            <li class="list-group-item">现在时间：{{date("Y-m-d H:i:s")}}</li>
        </ul>
    </div>
@stop