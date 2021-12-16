@extends('layouts.template')
@section('content')

<section class="content-header">
      <h1>
        Employee Management
      </h1>
</section>

<section class="content">
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">View Employee</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
        </div>
        <div class="box-body">
            <form class="form-horizontal">
                <div class="box-body">
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" id="name" name="name" value="{{$employee->name}}" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phone" class="col-sm-2 control-label">Phone Number</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" id="name" name="name" value="+60{{$employee->phone}}" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="position" class="col-sm-2 control-label">Role</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" id="name" name="name" value="{{$employee->position}}" readonly>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <a href="{{ url()->previous() }}" class="btn btn-default"><i class="fa fa-arrow-left fa-fw"></i> BACK</a>
                    <a href="{{url('employee/edit/'.$employee->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i> EDIT</a>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection

@section('footerScripts')

    <script>
    </script>

@endsection