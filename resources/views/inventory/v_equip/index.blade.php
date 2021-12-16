@extends('layouts.template')
@section('title', 'AR | Villa Equipment')
@section('inventory', 'active')
@section('villa_equipment', 'active')
@section('content')

<section class="content-header">
      <h1>
        Inventory Management <small>(Villa Equipment)</small>
      </h1>
</section>

<section class="content">
<div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">List Employee</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
        </div>
        <div class="box-body">
            <div class="col-md-12">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr style="background-color:#dadfe4;">
                            <th>#</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Quantity</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $count = 0; ?>
                        @foreach($v_equip as $v)
                        <?php $count++; ?>
                        <tr>
                            <td>{{$count}}</td>
                            <td>{{$v->image}}</td>
                            <td>{{$v->name}}</td>
                            <td>{{$v->quantity}}</td>
                            <td class="text-center">
                                <a href="{{url('employee/view/'.$v->id)}}" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a>
                                <a href="{{url('employee/edit/'.$v->id)}}" class="btn btn-default btn-sm"><i class="fa fa-edit"></i></a>
                                <a href="{{url('employee/delete/'.$v->id)}}" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="box-footer">
                <a href="{{ url()->previous() }}" class="btn btn-default"><i class="fa fa-arrow-left fa-fw"></i> BACK</a>
                <a href="{{url('employee/add')}}" class="btn btn-primary"><i class="fa fa-plus fa-fw"></i> ADD</a>
            </div>
        </div>
    </div>
</section>

@endsection

@section('footerScripts')

    <script>
    </script>

@endsection