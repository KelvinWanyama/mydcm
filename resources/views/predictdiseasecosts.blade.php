@extends('layouts.app')
@section('content')
    <div id="body-container">
        <div class="page-title clearfix">
            <div class="pull-left">
                <h1> Predict Disease Costs </h1>
            </div>
            <ol class="breadcrumb pull-right">
                <li class="active"> PDC </li>
                <li><a href="../../public/dcm"><i class="fa fa-tachometer"></i></a></li>
            </ol>
        </div>

        <div class="conter-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <div class="panel-control pull-right hidden">
                                    <a class="panelButton"><i class="fa fa-refresh"></i></a>
                                    <a class="panelButton"><i class="fa fa-minus"></i></a>
                                    <a class="panelButton"><i class="fa fa-remove"></i></a>
                                </div>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <form method ="post" action="/predictdiseasecosts" class="form-horizontal">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Disease</label>
                                    <div class="col-sm-10">
                                        {{--{{ Form::select('diseases', $diseases, null,  ['class' => 'form-control']) }}--}}
                                        <select name='diseases' class = 'form-control' >
                                            @foreach($diseases as $diseases)
                                                <option value="{{ $diseases->disease_id.' '.$diseases->year}}">{{ $diseases->name.' '.($diseases->year.' '.$diseases->age_group )}}</option>
                                            @endforeach

                                        </select>
                                        @if ($errors->has('diseases'))
                                            <span class="help-block">
                                                <strong style="color: red">{{ $errors->first('diseases') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                @if(Session::has('message'))
                                    <div class="alert alert-success alert-dismissible">
                                        <a href="#" class="alert-link close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <span class="glyphicon glyphicon-ok"></span><em> {!! session('message') !!}</em>
                                    </div>
                                @endif
                                <hr/>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Predict Disease Cost</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
