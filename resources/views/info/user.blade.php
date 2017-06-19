@extends('layouts.frame')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">请在下方添加通知公告信息</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/insertData') }}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="title" class="col-md-4 control-label">标题：</label>

                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control" name="title"  required autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="author" class="col-md-4 control-label">发布者：</label>

                                <div class="col-md-6">
                                    <input id="author" type="text" class="form-control" name="author" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="radio-inline">是否推荐首页显示：</label>
                                <label class="radio-inline">
                                    <input type="radio" name="position" id="position" value="1" checked> 是
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="position" id="position" value="0"> 否
                                </label>
                            </div>

                            <div class="form-group">
                                <label for="content" class="col-md-4 control-label">内容：</label>

                                <div class="col-md-6">
                                   <textarea class="form-control" rows="5" id="content" name="content"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary" style="float: right">
                                        发表
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @stop