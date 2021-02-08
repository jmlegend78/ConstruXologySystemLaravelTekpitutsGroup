

<?php $__env->startSection('Title','Home'); ?>
<?php $__env->startSection('main'); ?>
	<header class='tabwan'>	




<div class="myweb">
<p><a href="home">ConstruXology</a></p>
</div>

<div class="links">
	
	
		
	<div class="Action">
			<button type="submit" name="logout"><a href="<?php echo e(url('login')); ?>">Logout</a></button>


	</div>



<div class="aht">
	<p>ConstruXology.edu</p>
</div>

	</div>
	<div class="view">
	<button class="dashbook"><a href="booklist">Book List</a></button>
	<button class="dashadd"><a href="addbook">Add Book</a></button>
	</div>

	</header>


	
			<div class="home">
		<a href="home">Home</a>
	</div>

<div class="books">
		<a href="booklist">Book List</a>
	</div>
	<div class="addbook">
		<a href="addbook">Add Book</a>
	</div>

<div class="seedetails">
<button name="btnEdit"><a href="updateaccount/{$id}">Profile</a></button>
</div>

<?php $__env->stopSection(); ?>
		
<?php echo $__env->make('layout.masterhome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\Laravel\resources\views/home.blade.php ENDPATH**/ ?>