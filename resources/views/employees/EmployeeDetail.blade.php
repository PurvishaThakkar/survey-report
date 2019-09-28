
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading" style="padding:10px 15px;font-size:20px;text-transform: uppercase;"><b><?php echo $name;?></b>
                @if (Auth::user()->name=="purva")
                                 <a href="{{ route('employee_insert') }}" class="btn btn-primary" style="align:center;float:right">
                                   New Record
                                </a>
                @endif
                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
<table class="table">

    <tr>
    <?php  foreach( $all as $one) { ?>
    @if ($one != "created_at" and $one != "updated_at" and $one != "token" and  $one != "password")
            @if(preg_match("/_id/",$one))
            <td style=" text-transform: uppercase;"><b><?php  echo preg_replace("/_id/", "_name", $one); ?></b></td>
            @else
           <td style=" text-transform: uppercase;"><b>{{ $one }}</b></td>
           @endif
    @endif
    <?php } ?>
    @if (Auth::user()->name=="purva")   <td colspan="2" style="text-align:justify"> <b> ACTION</b></td>  @endif 
    </tr>
   <?php  foreach($employees as $employee){ 
   ?>
   <tr>
   <td> <?php echo $employee -> id;?></td>
   <td> <?php echo $employee -> e_name;?></td>
   <td><?php echo $employee -> email;?></td>
    <td><?php echo $employee -> address;?></td>
    <td><?php echo $employee -> phone_no;?></td>
    <td><?php echo $employee -> status;?></td>
    <td><?php echo $employee->department->d_name; ?></td>
    <td><?php echo $employee->department->company->c_name;?></td>
     @if (Auth::user()->name=="purva")  
    <td>
            <a href="{{ route('employee_edit',[$employee->id])}}">edit&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
            <a href="{{ route('employee_delete',[$employee -> id]) }}">delete</a>
    </td>
     @endif 
    <?php } ?>
   </tr>
    
</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
