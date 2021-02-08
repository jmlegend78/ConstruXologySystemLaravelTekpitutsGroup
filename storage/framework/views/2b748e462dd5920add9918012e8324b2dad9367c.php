
<?php $__env->startSection('Title','ConstruXology'); ?>
<?php $__env->startSection('main'); ?>
<header>
	<div class="header-block">
		<div class="logo">
			<p><a href="login">ConstruXology</a></p>
		</div>
		

	<div class="fblogin">
          <form class="frmbody" method="POST" action="<?php echo e(url('home')); ?>">
          	<?php echo e(csrf_field()); ?>

		<div class="email">
		<label>Username</label><br>
		<input type="text" name="username" required/>
		</div>
		<div class="password">
		<label>Password</label><br>
		<input type="password" name="password" required/>
			
		</div>
		<div class="loginbutton">
               <button type="submit" name="login">Log In</button>
		</div>
          </form>
<?php if(isset($msg)): ?>
          <?php echo e($msg); ?> 
     <?php endif; ?>


         
	</div>
</div>
</header>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.masterlogin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\Laravel\resources\views/login.blade.php ENDPATH**/ ?>