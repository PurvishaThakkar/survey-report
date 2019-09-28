
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading" style="padding:10px 15px;font-size:20px;text-transform: uppercase;"><b><?php echo $name;?></b>
                @if (Auth::user()->name=="purva")
                                 <a href="{{ route('company_insert') }}" class="btn btn-primary" style="align:center;float:right">
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
                                                @if ($one != "created_at" and $one != "updated_at" and $one != "token" and $one != "password")
                                                <td style="text-transform: uppercase;"><b>{{ $one }}</b></td>
                                                @endif
                                            <?php } ?>
                                            <td colspan="2" style="text-align:justify"> <b> ACTION</b></td>
                                            </tr>
                                            <?php  foreach( $companies as $company) { ?>
                                            <tr>
                                            <td> <?php echo $company-> c_id;?></td>
                                                <td> <?php echo $company-> c_name;?></td>
                                                <?php //echo preg_replace("/./", "*", $company->password) // for show password in * format?>
                                                <td><?php echo $company-> email;?></td>
                                                <td><?php echo $company-> address;?></td>
                                                <td><?php echo $company-> phone_no;?></td>
                                                <td><?php echo $company-> no_of_emp;?></td>
                                                <td><?php echo $company-> status;?></td>
                                                <td>
                                                    <a href="{{route('company_edit',[$company-> c_id])}}">edit&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                                                    <a href="{{route('company_delete',[$company-> c_id])}}">delete</a>
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
