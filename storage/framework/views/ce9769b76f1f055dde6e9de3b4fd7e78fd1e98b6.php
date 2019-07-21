<!DOCTYPE html>
<html lang="en-US">
	<?php echo $__env->make('includes.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<body>
		<!-- Site Loading -->
		<div class="site-loading">
			<img src="<?php echo e(asset('img\loading.gif')); ?>" alt="Loading">
		</div>
		<!-- Site Loading End -->

		<!-- Site Back Top -->
		<div class="site-backtop" title="Back to top">
			<i class="fa fa-angle-up"></i>
		</div>
		<!-- Site Back Top End -->
		
		<?php echo $__env->make('includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		
		<?php echo $__env->yieldContent('content'); ?>
		
		<?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	</body>
</html><?php /**PATH C:\xampp\htdocs\camp-link.com\resources\views/layouts/main.blade.php ENDPATH**/ ?>