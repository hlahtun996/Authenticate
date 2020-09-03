@extends('layouts.app')
@section('content')

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
         <!-- New Task Form -->
        <form action="/items" method="POST" class="form-horizontal">
             @csrf

            <!-- Task Name -->
            <div class="form-group">
                <label for="name" class="col-sm-3 control-label">Item Name</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="name" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="code" class="col-sm-3 control-label">Item Codes</label>

                <div class="col-sm-6">
                    <input type="text" name="code" id="code" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="price" class="col-sm-3 control-label">Item Prices</label>

                <div class="col-sm-6">
                    <input type="text" name="price" id="price" class="form-control">
                </div>
            </div>
            <!-- <div class="form-group">
                <label for="photo" class="col-sm-3 control-label">Photo</label>

                <div class="col-sm-6">
                    <input type="file" name="photo" id="photo" class="form-control">
                </div>
            </div> -->


            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-plus"></i> Add Item
                    </button>
                </div>
            </div>
        </form>
    </div>
    @endsection
