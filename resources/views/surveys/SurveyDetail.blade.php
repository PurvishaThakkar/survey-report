
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading" style="padding:10px 15px;font-size:20px;text-transform: uppercase;"><b><?php echo $name;?></b>
                @if (Auth::user()->name=="purva")
                                 <a href="{{ route('survey_insert') }}" class="btn btn-primary" style="align:center;float:right">
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

    <tr>
   <?php  foreach($surveys as $survey){ 
   ?>
   <tr>
   <td>  <?php echo $survey -> id;?></td>
   <td><?php echo $survey->company->c_name;?></td>
   <td><?php echo $survey -> s_start_date;?></td>
    <td><?php echo $survey -> s_end_date;;?></td>
    <td><?php  echo $survey -> survey_title;?></td>
    <td><?php  echo $survey -> desc;?></td>
    <td><?php echo $survey -> status;?></td>
     @if (Auth::user()->name=="purva")  
    <td>
           <a href="{{ route('survey_edit',[$survey->id])}}">edit&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
            <a href="{{ route('survey_delete',[$survey -> id]) }}">delete</a> 
    </td>
     @endif 
    <?php } ?> -->
 
   </tr>


</table>
        <!-- <div class="col-md-8 col-md-offset-5"> {{  $surveys->links() }}</div> -->
       
     
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
