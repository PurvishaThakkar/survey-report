
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading" style="padding:10px 15px;font-size:20px;text-transform: uppercase;"><b><?php echo $name;?></b>
                <a href="{{ route('contact_insert') }}" class="btn btn-primary" style="align:center;float:right">
                                   New Record
                                </a>
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
    @if ($one != "created_at" and $one != "updated_at" and $one != "remember_token")
    <td style=" text-transform: uppercase;"><b>{{ $one }}</b></td>
    @endif
    <?php } ?>
    <td colspan="2" style="text-align:justify"> <b> ACTION</b></td>
    </tr>
    <?php  foreach( $contacts as $contact) { ?>
    <tr>
    <td> <?php echo $contact-> id;?></td>
        <td> <?php echo $contact-> name;?></td>
        <td><?php echo $contact-> email;?></td>
        <td><?php echo $contact-> phone_no;?></td>
        <td><?php echo $contact-> msg;?></td>
        <td>
            <a href="{{ route('contact_edit',[$contact->id])}}">edit&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
            <a href="{{route('contact_delete',[$contact->id])}}">delete</a>
        </td>
    </tr>
    <?php } ?>
</table>
            <div class="col-md-8 col-md-offset-5"> {{  $contacts->links() }}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
