@extends('layouts.app')
@section('content')
    <div id="body-container">
        <div class="page-title clearfix">
            <div class="pull-left">
                <h1> Drugs Entry Form </h1>
            </div>
            <ol class="breadcrumb pull-right">
                <li class="active"> DEF </li>
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
                            <form method ="post" action="/drugs" class="form-horizontal">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Drug Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control"  name="name">
                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong style="color: red">{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <hr/>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-2 control-label">Generic Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="generic_name">
                                        @if ($errors->has('generic_name'))
                                            <span class="help-block">
                                                <strong style="color: red">{{ $errors->first('generic_name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <hr/>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-2 control-label">Pack Size(Digits Only)</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="pack_size">
                                        @if ($errors->has('pack_size'))
                                            <span class="help-block">
                                                <strong style="color: red">{{ $errors->first('pack_size') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <hr/>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-2 control-label">No. Of Packs(Digits Only)</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="no_of_packs">
                                        @if ($errors->has('no_of_packs'))
                                            <span class="help-block">
                                                <strong style="color: red">{{ $errors->first('no_of_packs') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <hr/>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-2 control-label">Price Per Pack(Ksh.)</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="price_per_pack">
                                        @if ($errors->has('price_per_pack'))
                                            <span class="help-block">
                                                <strong style="color: red">{{ $errors->first('price_per_pack') }}</strong>
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
                                    <button type="submit" class="btn btn-primary">Add Drug</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
