@extends('layouts.template')
@section('title', 'AR | Add Villa Equipment')
@section('inventory', 'active')
@section('villa', 'active')
@section('content')

<section class="content-header">
      <h1>
        Inventory Management <small>(Villa Equipment)</small>
      </h1>
</section>

<section class="content">
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">Add Villa Equipment</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
        </div>
        <div class="box-body">
            <form class="form-horizontal" action="{{url('employee/add')}}" method="post">
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
                                <option value="Villa Kantan 1">Villa Kantan 1</option>
                                <option value="Villa Kantan 2">Villa Kantan 2</option>
                                <option value="Villa Sireh">Villa Sireh</option>
                                <option value="Villa Halia">Villa Halia</option>
                                <option value="Villa Kunyit">Villa Kunyit</option>
                                <option value="Villa Serai">Villa Serai</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="quantity" class="col-sm-2 control-label">Quantity</label>
                        <div class="col-sm-8">
                        <input type="number" class="form-control" id="quantity" name="quantity" required>
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