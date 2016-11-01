@extends('layouts.app')
@section('content')
    <div id="body-container">
        <div class="page-title clearfix">
            <div class="pull-left">
                <h1> Facility </h1>
            </div>
            <ol class="breadcrumb pull-right">
                <li class="active"> Facility </li>
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
                            <form method ="post" action="/facility" class="form-horizontal">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control"  name="name">
                                    </div>
                                </div>
                                <hr/>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-2 control-label">Adress</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="address">
                                    </div>
                                </div>
                                <hr/>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-2 control-label">Bed Capacity</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="bed_capacity">
                                    </div>
                                </div>
                                <hr/>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-2 control-label">County</label>
                                    <div class="col-sm-10">
                                        {{ Form::select('county', $county, null,  ['class' => 'form-control']) }}
                                    </div>
                                </div>
                                <hr/>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-2 control-label">Level</label>
                                    <div class="col-sm-10">
                                        {{Form::select('level', ['1' => 'Level 1', '2' => 'Level 2', '3' => 'Level 3', '4' => 'Level 4', '5' => 'Level 5', '6' => 'Level 6'], null, ['placeholder' => 'Pick a level...', 'class' => 'form-control'])}}
                                    </div>
                                </div>
                                <hr/>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Add Facility</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
