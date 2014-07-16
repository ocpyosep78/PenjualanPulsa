@extends('layout.bootstrapadmin.index')

@section('content')

<div class="col-sm-8">
    <div class="panel panel-danger">
        <div class="panel-heading"><i class="glyphicon glyphicon-edit"></i> Form Edit</div>
        <div class="panel-body">
            <form class="form-horizontal" action="<?php echo URL::to("/user/prosessimpan/" . $isi->id); ?>" method="post">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">ID</label>
                    <div class="col-sm-4">
                        <input type="text" value="<?php echo $isi->id; ?>" readonly="" name="id" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Username</label>
                    <div class="col-sm-4">
                        <input type="text"value="<?php echo $isi->username; ?>"  name="username" class="form-control " placeholder="User">
                        <p style="color: red"> {{ $errors->first('name') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-4">
                        <input type="password" value="<?php echo $isi->password; ?>" name="password" class="form-control " placeholder="Password">
                        <p style="color: red"> {{ $errors->first('password') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-5">
                        <input type="email" value="<?php echo $isi->email; ?>" name="email" class="form-control" placeholder="abc@abc.com">
                        <p style="color: red"> {{ $errors->first('Email') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-10">
                        <button type="submit" class="btn btn-info"><i class="glyphicon glyphicon-saved"></i> Edit </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop