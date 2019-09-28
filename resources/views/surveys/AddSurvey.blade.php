@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST">
                        {{ csrf_field() }}

                        

                        <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                            <label for="comp_id" class="col-md-4 control-label">Company Name</label>

                            <div class="col-md-6">

                            <select class="form-control" name="comp_id">

                            <?php
                                foreach($companies as $company)
 
                                {?>
                                    <option value="{{ $company->c_id }}">{{ $company->c_name }}</option>
                                <?php
                                }?>


                            </select>

                            @if ($errors->has('company_id'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('company_id') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div> 

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label"> start date</label>

                            <div class="col-md-6">
                                <input id="s_start_date" type="date" class="form-control" name="s_start_date" required>

                                @if ($errors->has('s_start_date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('s_start_date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                     
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label"> end date</label>

                            <div class="col-md-6">
                                <input id="s_end_date" type="date" class="form-control" name="s_end_date" required>

                                @if ($errors->has('end_date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('end_date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-4 control-label">title</label>

                            <div class="col-md-6">
                                <input id="survey_title" type="text" class="form-control" name="survey_title" value="{{ old('email')}}" required>

                                @if ($errors->has('survey_title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('survey_title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="desc" class="col-md-4 control-label">description</label>

                            <div class="col-md-6">
                                <input id="desc" type="text" class="form-control" name="desc"  required>

                                @if ($errors->has('desc'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('desc') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

        
                         


                        <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                            <label for="status" class="col-md-4 control-label">status</label>

                            <div class="col-md-6">
                                <select class="form-control" name="status" required>
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
