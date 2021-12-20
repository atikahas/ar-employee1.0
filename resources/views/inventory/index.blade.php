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

    <div class="box box-default collapsed-box">
        <div class="box-header with-border" data-widget="collapse">
            <h3 class="box-title">Add Equipment Category</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
            </div>
        </div>
        <div class="box-body">
            <form class="form-horizontal" action="{{url('equipment/add')}}" method="post">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="category" class="col-sm-2 control-label">Category</label>
                        <div class="col-sm-8">
                            <select name="category" class="form-control select2" required>
                                <option value=""  selected="true" disabled="disabled">-- Select Category --</option>
                                <option value="Villa">Villa</option>
                                <option value="Work">Work</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save fa-fw"></i> SAVE</button>
                </div>
            </form>
        </div>
    </div>



    <div class="box box-default collapsed-box">
        <div class="box-header with-border" data-widget="collapse">
            <h3 class="box-title">List Equipment Category</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
            </div>
        </div>
        <div class="box-body">
            <table id="example1" class="table table-bordered table-hover">
                <thead style="background-color:#dadfe4;">
                <tr>
                    <th width="5%">#</th>
                    <th>Name</th>
                    <th width="20%">Category</th>
                    <th width="10%">Options</th>
                </tr>
                </thead>
                <tbody>
                <?php $count = 0; ?>
                    @foreach($equipment as $e)
                    <?php $count++; ?>
                    <tr>
                        <td>{{$count}}</td>
                        <td>{{$e->name}}</td>
                        <td>{{$e->category}}</td>
                        <td class="text-center">
                            <a href="{{url('inventory/edit/'.$e->id)}}" class="btn btn-default btn-sm"><i class="fa fa-edit"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
    <a href="{{ url()->previous() }}" class="btn btn-default"><i class="fa fa-arrow-left fa-fw"></i> BACK</a>
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