@extends('layouts.app')
@section('content')
    <html lang="en">
    <!--<![endif]-->
    <head>
        <link href="//cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css" rel="stylesheet">

    </head>

    <body>
    <div class="page-title clearfix">
        <div class="pull-left">
            <h1> All Users </h1>
        </div>
        <ol class="breadcrumb pull-right">
            <li class="active"> All Members </li>
            <li><a href="../../public/dcm"><i class="fa fa-tachometer"></i></a></li>
        </ol>
    </div><br>
    <table class="datatable">
        <thead>
        <tr>
            <th>Id</th>
            <th>UserName</th>
            <th>Email</th>
            <th>County</th>
            <th>Role</th>
        </tr>
        </thead>
    </table>
    </body>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="//cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: 'users/serverSide'
            });
        });
    </script>
    </html>
@stop