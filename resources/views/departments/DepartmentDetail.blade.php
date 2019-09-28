
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading" style="padding:10px 15px;font-size:20px;text-transform: uppercase;"><b><?php echo $name;?></b>
                @if (Auth::user()->name=="purva")
                                 <a href="{{ route('department_insert') }}" class="btn btn-primary" style="align:center;float:right">
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
    <td colspan="2" style="text-align:justify"> <b> ACTION</b></td>
    </tr>
    <?php  foreach( $departments as $department) { ?>
    <tr>
    <td> <?php echo $department -> id;?></td>
        <td> <?php echo $department -> d_name;?></td>
        <td><?php echo $department -> status;?></td>
        <td><?php echo  $department->company ? $department->company->c_name : "Company Deleted";?></td>
        

        <!--<td><?php //echo preg_replace("/./", "*", $user->password);?></td>-->
        <td>
            <a href="{{ route('department_edit',[$department->id]) }}">edit&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
            <a href="{{ route('department_delete',[$department->id]) }}">delete</a>
        </td>
    </tr>
    <?php } ?>
</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
