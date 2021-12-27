@extends('layouts.template')
@section('title', 'AR | Equipment')
@section('inventory', 'active')
@section('equipment', 'active')
@section('content')

<section class="content-header">
      <h1>
        Inventory Management <small>(Equipment)</small>
      </h1>
</section>

<section class="content">

    <div class="box box-default">
        <div class="box-header with-border" data-widget="collapse">
            <h3 class="box-title">Edit Equipment Category <strong>(ID: {{$equipment->id}})</strong></h3>
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
                        <input type="text" class="form-control" id="name" name="name" value="{{$equipment->name}}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="category" class="col-sm-2 control-label">Category</label>
                        <div class="col-sm-8">
                            <select name="category" class="form-control select2" required>
                                <option value=""  selected="true" disabled="disabled">{{$equipment->category}}</option>
                                <option value="Villa">Villa</option>
                                <option value="Work">Work</option>
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
        $(function () {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            })
        })
    </script>

@endsection