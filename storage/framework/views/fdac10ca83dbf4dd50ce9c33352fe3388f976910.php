<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading" style="padding:10px 15px;font-size:20px;text-transform: uppercase;"><b><?php echo $name;?></b>
                <a href="<?php echo e(route('contact_insert')); ?>" class="btn btn-primary" style="align:center;float:right">
                                   New Record
                                </a>
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
    <?php if($one != "created_at" and $one != "updated_at" and $one != "remember_token"): ?>
    <td style=" text-transform: uppercase;"><b><?php echo e($one); ?></b></td>
    <?php endif; ?>
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
            <a href="<?php echo e(route('contact_edit',[$contact->id])); ?>">edit&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
            <a href="<?php echo e(route('contact_delete',[$contact->id])); ?>">delete</a>
        </td>
    </tr>
    <?php } ?>
</table>
            <div class="col-md-8 col-md-offset-5"> <?php echo e($contacts->links()); ?></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>