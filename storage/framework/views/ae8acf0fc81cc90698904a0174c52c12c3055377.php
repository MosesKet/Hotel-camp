<?php $__env->startSection('title','Services'); ?>

<?php $__env->startSection('content'); ?>

<!-- Site Main -->
<div class="site-main">

	<?php echo $__env->make('sections.title', ['page' => 'Our Services'], ['pagetitle' => 'OUR FACILITIES'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	
	<?php echo $__env->make('sections.services', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</div>
<!-- Site Main End -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\camp-link.com\resources\views/pages/services.blade.php ENDPATH**/ ?>