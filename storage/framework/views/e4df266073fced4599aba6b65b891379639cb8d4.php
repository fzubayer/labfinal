<?php $__env->startSection('content'); ?>
<h1>ADD PRODUCT</h1>
<form  method="POST" action="/Products" >
    <?php echo e(csrf_field()); ?>

    
    <div class="form-group">
            <label for="productName">productName</label>
            <input class="form-control" type="text" name="productName" >
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
        
    </div>
    <div class="form-group">
        <label for="details">details</label>
        <input class="form-control" type="text" name="details" placeholder="Details">
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

    </div>
    <div class="form-group">
            <label for="quantity">quantity</label>
            <input class="form-control" type="number" name="quantity" >
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
        
    </div>
    
    <div class="form-group">
            <label for="price">price</label>
            <input class="form-control" type="number" name="price" >
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
        
    </div>
    <div class="form-group">
           
        <input class="btn btn-outline-primary" type="submit" name="submit" value="Submit" >
        
    </div>


</form>


              



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>