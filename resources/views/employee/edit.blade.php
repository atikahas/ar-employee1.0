@extends('layouts.template')
@section('title', 'AR | Edit Employee')
@section('employee', 'active')
@section('listemployee', 'active')
@section('content')

<section class="content-header">
      <h1>
        Employee Management
      </h1>
</section>

<section class="content">
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">Edit Employee</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
        </div>
        <div class="box-body">
            <form class="form-horizontal" method="post">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" id="name" name="name" value="{{$employee->name}}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phone" class="col-sm-2 control-label">Phone Number</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" id="phone" name="phone" value="{{$employee->phone}}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="position" class="col-sm-2 control-label">Role</label>
                        <div class="col-sm-8">
                            <select name="position" class="form-control select2" required>
                                <option value=""  selected="true" disabled="disabled">{{$employee->position}}</option>
                                <option value="Maintenance Staff">Maintenance Staff</option>
                                <option value="Housekeeper Staff">Housekeeper Staff</option>
                                <option value="F&B Service Staff">F&B Service Staff</option>
                                <option value="Gardener Staff">Gardener Staff</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <a href="{{ url()->previous() }}" class="btn btn-default"><i class="fa fa-arrow-left fa-fw"></i> BACK</a>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save fa-fw"></i> SAVE</button>
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