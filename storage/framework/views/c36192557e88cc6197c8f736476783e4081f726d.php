
<?php $__env->startSection('Title','Edit Item'); ?>
<?php $__env->startSection('main'); ?>
	<header>
	<div class="headerblock"> 
		<div class="logo">
			<p><a href="<?php echo e(url('home')); ?>">ConstruXology</a></p>
		</div>
		
<form class="frmbody" action="/edititem/<?php echo e($usert[0]->author_id); ?>" method="POST">
	<?php echo csrf_field(); ?>
<br>	
<label>Author First Name:</label>
<br>
<input type="text" name="fnameUp" value="<?php echo e($usert[0]->author_fname); ?>">
<br>
<label>Author Last Name:</label>
<br>
<input type="text" name="lnameUp" value="<?php echo e($usert[0]->author_lname); ?>">
<br>
<label>Book Number:</label>
<br>
<input type="text" name="bnumber" value="<?php echo e($usert[0]->book_number); ?>">
<br>
<label>Book Title:</label>
<br>
<input type="text" name="btitle" value="<?php echo e($usert[0]->book_title); ?>">
<br>
<label>Book Description:</label>
<br>
<input type="text" name="bdesc" value="<?php echo e($usert[0]->book_desc); ?>">
<br>
<label>Book Price:</label>
<br>
<input type="text" name="bprice" value="<?php echo e($usert[0]->book_price); ?>">
<br>
<label>Publisher Name:</label>
<br>
<input type="text" name="pname" value="<?php echo e($usert[0]->publisher_name); ?>">
<br>
<label>Year Published:</label>
<br>
<input type="text" name="yrpublish" value="<?php echo e($usert[0]->year_pub); ?>">
<br>
<label>Month Published:</label>
<br>
<input type="text" name="mnthpublish" value="<?php echo e($usert[0]->month_pub); ?>">
<br>
<label>Day Published:</label>
<br>
<input type="text" name="dypublish" value="<?php echo e($usert[0]->day_pub); ?>">
<br>
<div class="buttonup">
<button type="submit" name="btnUpdate">Update</button>
</div>
</form>


</div>
</header>
<button class='btnBack' name='btnBack'><a href="<?php echo e(url('booklist')); ?>">Back</a></button>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.mastercons', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\Laravel\resources\views/edititem.blade.php ENDPATH**/ ?>