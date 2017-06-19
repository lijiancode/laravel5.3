@extends('head')
@section('content')
    <div class="container">
     <div class="row">
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">通知公告</h3>
            </div>
            <div class="panel-body">
                <ul class="list-group">
                    @foreach($data as $arr)
                        <li class="list-group-item"><a href="{{url('/detail')."/".$arr['id']}}">{{$arr['title']}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>

    </div>
    <div class="col-md-8">
        <table class="table table-bordered table-hover">
            <tr>
                <th class="text-center">物品编号</th>
                <th class="text-center">物品名称</th>
                <th class="text-center">出入库</th>
                <th class="text-center">物品数量</th>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </div>
</div>
    </div>
@stop