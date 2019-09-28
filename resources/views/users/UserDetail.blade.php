
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading" style="padding:10px 15px;font-size:20px;text-transform: uppercase;"><b><?php echo $name;?></b>
                @if (Auth::user()->name=="purva")
                                 <a href="#" class="btn btn-primary" style="align:center;float:right">
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
    @if ($one != "created_at" and $one != "updated_at" and $one != "remember_token" and  $one != "password")
    <td style="text-transform: uppercase;"><b>{{ $one }}</b></td>
    @endif
    <?php } ?>
    <td colspan="2" style="text-align:justify"> <b> ACTION</b></td>
    </tr>
    <?php  foreach( $users as $user) { ?>
    <tr>
    <td> <?php echo $user-> id;?></td>
        <td> <?php echo $user-> name;?></td>
        <td><?php echo $user-> email;?></td>
        <!--<td><?php //echo preg_replace("/./", "*", $user->password);?></td>-->
        <td>
            <a href="{{ route('user_edit',[$user->id])}}">edit&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
            <a href="{{route('user_delete',[$user->id])}}">delete</a>
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
