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

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="e_name" value="{{ old('e_name',$employee->e_name) }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                     

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email',$employee->email)}}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="address" class="col-md-4 control-label">Address</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" value="{{ old('address',$employee->address)}}" required>

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phone_no') ? ' has-error' : '' }}">
                            <label for="phone_no" class="col-md-4 control-label">Phnoe number</label></label>

                            <div class="col-md-6">
                                <input id="phone_no" type="text" class="form-control" name="phone_no" value="{{ old('phone_no',$employee->phone_no)}}" required>

                                @if ($errors->has('phone_no'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone_no') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                            <label for="status" class="col-md-4 control-label">status</label>

                            <div class="col-md-6">
                                <select class="form-control" name="status" value="{{ old('status',$employee->status)}}" required>
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

            
                      

                          
                        <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                            <label for="comp_id" class="col-md-4 control-label">Company Name</label>

                            <div class="col-md-6">

                            <select class="form-control" name="comp_id">

                                <?php foreach($companies as $company){ ?>
                                
                                    <option value="{{ old('comp_id',$employee->comp_id) }}">{{  $company -> c_name }}</option>
                              
                                <?php } ?>

                            </select>

                            @if ($errors->has('company_id'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('company_id') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div> 
                     <div class="form-group{{ $errors->has('no_of_emp') ? ' has-error' : '' }}">
                            <label for="dept_id" class="col-md-4 control-label">Depatment Name</label>

                            <div class="col-md-6">

                                <select class="form-control" name="dept_id">

                                  
                                <?php foreach($departments as $department) { ?>
                                
                                <option value="{{ $department -> id }}">{{  $department -> d_name }}</option>
                          
                                <?php } ?>
                                        


                            </select>

                            @if ($errors->has('dept_id'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('dept_id') }}</strong>
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
