@extends('layouts.app')
@section('content')


    <div id="body-container">
        <div class="page-title clearfix">
            <div class="pull-left">
                <h1> Choose DataSet </h1>
            </div>
            <ol class="breadcrumb pull-right">
                <li class="active"> Data Set </li>
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
                            {{--{!! Form::open(['url' => 'foo/bar']) !!}--}}
                            <form method ="post" action="/index" class="form-horizontal">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control"  name="dataset">
                                    </div>
                                </div>
                                <hr/>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">County</label>
                                    <div class="col-sm-10">
                                          {{ Form::select('county', $county, null,  ['class' => 'form-control']) }}
                                    </div>
                                </div>
                                <hr/>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Facility</label>
                                    <div class="col-sm-10">
                                        {{ Form::select('facilities', $facilities, null,  ['class' => 'form-control']) }}
                                    </div>
                                </div>
                                <hr/>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Disease</label>
                                    <div class="col-sm-10">
                                        <select name='diseaseCosts' class = 'form-control'>
                                            @foreach($diseaseCosts as $diseaseCost)
                                                <option value="{{ $diseaseCost->diseases_id }}">{{ $diseaseCost->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <hr/>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Age Group</label>
                                    <div class="col-sm-10">
                                        {{ Form::select('distributions', $distributions, null,  ['class' => 'form-control']) }}
                                    </div>
                                </div>
                                <hr/>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Population</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control"  name="population">
                                    </div>
                                </div>
                                </hr>
                                <div class="form-group">
                                    <div class="col-sm-10">
                                        <input type="hidden" class="form-control"  name="user" value="{{ Auth::user()->id }}" placeholder="{{ Auth::user()->id }}">
                                    </div>
                                </div>
                                </hr>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Create DataSet</button>
                                </div>
                            </form>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection