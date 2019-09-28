@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="">
                        {{ csrf_field() }}



                            
                        <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                            <label for="company_id" class="col-md-4 control-label">Company Name</label>

                            <div class="col-md-6">

                            <select class="form-control" name="company_id">

                                <?php foreach($companies as $company){ ?>
                                
                                    <option value="{{ $company->c_id }}"  {{ $company->c_id == $department->company_id?"selected='selected'":"" }}>{{  $company->c_name }}</option>
                              
                                <?php } ?>

                            </select>
                            
                            @if ($errors->has('company_id'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('company_id') }}</strong>
                                </span>
                            @endif
                        </div>
                            </div>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="d_name" value="{{ old('d_name',$department->e_name) }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                     

                        <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                            <label for="status" class="col-md-4 control-label">status</label>

                            <div class="col-md-6">
                                <select class="form-control" name="status" value="{{ old('status',$department->status)}}" required>
                                <option value="pending">pending</option>
                                <option  value="aproved">aproved</option>
                                <option  value="running">running</option>
                                </select>

                                @if ($errors->has('status'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('status') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" style="align:center">
                                    submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
