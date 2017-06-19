@extends('head')
@section('content')
    <div class="col-md-12">
        <h3 class="text-center">{{$data['title']}}</h3>
        <h5 class="text-center">发布者:{{$data['author']}} &nbsp;&nbsp;时间:{{$data['created_at']}}&nbsp;&nbsp;
        点击量:{{$data['hits']}}
        </h5>
        <div class="panel-body">
            {{$data['content']}}
        </div>
    </div>
    @stop