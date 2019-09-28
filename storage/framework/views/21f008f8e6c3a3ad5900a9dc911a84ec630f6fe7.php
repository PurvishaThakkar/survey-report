<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading" style="padding:10px 15px;font-size:20px;text-transform: uppercase;"><b><?php echo $name;?></b>
                <?php if(Auth::user()->name=="purva"): ?>
                                 <a href="<?php echo e(route('employee_insert')); ?>" class="btn btn-primary" style="align:center;float:right">
                                   New Record
                                </a>
                <?php endif; ?>
                </div>

                <div class="panel-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
<table class="table">

    <tr>
    <?php  foreach( $all as $one) { ?>
    <?php if($one != "created_at" and $one != "updated_at" and $one != "token" and  $one != "password"): ?>
            <?php if(preg_match("/_id/",$one)): ?>
            <td style=" text-transform: uppercase;"><b><?php  echo preg_replace("/_id/", "_name", $one); ?></b></td>
            <?php else: ?>
           <td style=" text-transform: uppercase;"><b><?php echo e($one); ?></b></td>
           <?php endif; ?>
    <?php endif; ?>
    <?php } ?>
    <?php if(Auth::user()->name=="purva"): ?>   <td colspan="2" style="text-align:justify"> <b> ACTION</b></td>  <?php endif; ?> 
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
     <?php if(Auth::user()->name=="purva"): ?>  
    <td>
            <a href="<?php echo e(route('employee_edit',[$employee->id])); ?>">edit&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
            <a href="<?php echo e(route('employee_delete',[$employee -> id])); ?>">delete</a>
    </td>
     <?php endif; ?> 
    <?php } ?>
   </tr>
    
</table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>