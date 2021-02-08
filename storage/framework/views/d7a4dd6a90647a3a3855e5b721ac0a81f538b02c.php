
<?php $__env->startSection('Title','booklist'); ?>
<?php $__env->startSection('main'); ?>
	<header>

 
<div class="headerblock">
		<div class="logo">
			<p><a href="<?php echo e(url('home')); ?>">ConstruXology</a></p>
		</div>
		<div class="frmbody">
<table border = 1>
		<th>Author ID:</th>
		<th>Authro First Name:</th>
	<th>Author Last Name:</th>
	<th>Book NO:</th>
	<th>Book Title:</th>
	<th>Book Description:</th>
	<th>Book Price: </th>
	<th>Publisher Name:</th>
	<th>Year Published:</th>
	<th>Month Published:</th>
	<th>Day Published:</th>
	<th>Edit/Delete:</th>

		<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profile): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td> <?php echo e($profile->author_id); ?></td>
				<td> <?php echo e($profile->author_fname); ?></td>
				<td> <?php echo e($profile->author_lname); ?></td>
				<td> <?php echo e($profile->book_number); ?></td>
				<td> <?php echo e($profile->book_title); ?></td>
				<td> <?php echo e($profile->book_desc); ?></td>
				<td> <?php echo e($profile->book_price); ?></td>
				<td> <?php echo e($profile->publisher_name); ?></td>
				<td> <?php echo e($profile->year_pub); ?></td>
				<td> <?php echo e($profile->month_pub); ?></td>
				<td> <?php echo e($profile->day_pub); ?></td>


				<td>
				<a href="/edititem/<?php echo e($profile->author_id); ?>">EDIT</a>
				<a href="/delete/<?php echo e($profile->author_id); ?>">DELETE</a>
			</td>
			</tr>

		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	</table>
</div>




       </div>
		</header>
   <button class='btnBack' name='btnBack'><a href="<?php echo e(url('home')); ?>">Back</a></button>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.masterbooklist', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\Laravel\resources\views/booklist.blade.php ENDPATH**/ ?>