
<?php $__env->startSection('Title','updateaccount'); ?>
<?php $__env->startSection('main'); ?>
	<header>
	  
	<div class="header-block">
		<div class="logo">
			<p><a href="<?php echo e(url('home')); ?>">ConstruXology</a></p>
		</div>        
	
  
	
<form class="frmbody" action="/updateaccount/<?php echo e($profile[0]->id_number); ?>" method="POST">	
	<?php echo csrf_field(); ?>
<label>First Name:</label> 
<br>
<input type="text" name="fnameUp" value="<?php echo e($profile[0]->fname); ?>">
<br>
<label>Last Name:</label>
<br>
<input type="text" name="lnameUp" value="<?php echo e($profile[0]->lname); ?>">
<br>
<label>Username:</label>
<br>
<input type="text" name="emailUp" value="<?php echo e($profile[0]->username); ?>">
<br>




<label>Change Password</label>

<br>
<label>New Password:</label>
<br>
<input type="text" name="newPass" value="<?php echo e($profile[0]->password); ?>">
<br>

  

<div class="buttonup">
<button type="submit" name="btnUpdate">Update</button>
</div>
</form>
<?php if(isset($msg)): ?>
          <?php echo e($msg); ?> 
     <?php endif; ?>



</div>
</header>
<button class='btnBack' name='btnBack'><a href="<?php echo e(url('home')); ?>">Back</a></button>
   <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.mastercons', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\Laravel\resources\views/updateaccount.blade.php ENDPATH**/ ?>