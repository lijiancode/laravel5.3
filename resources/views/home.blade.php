@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="list-group text-center" >
                <a href="{{url('/mainInfo')}}" class="list-group-item active" target="rightFrame">
                    常用信息
                </a>
                <a href="{{url('/userInfo')}}" class="list-group-item" target="rightFrame">通知公告</a>
                <a href="#" class="list-group-item">用户管理</a>
                <a href="#" class="list-group-item">物品管理</a>
                <a href="#" class="list-group-item">统计信息</a>
            </div>
        </div>
        <div class="col-md-9">
            <iframe frameborder="0" src="mainInfo" width="100%" height="600px" name="rightFrame">

            </iframe>

        </div>
    </div>
</div>
@endsection
