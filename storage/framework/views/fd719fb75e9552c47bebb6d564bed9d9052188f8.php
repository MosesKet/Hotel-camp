<?php $__env->startSection('title','Contact Us'); ?>

<?php $__env->startSection('content'); ?>

<!-- Site Main -->
<div class="site-main">

	<?php echo $__env->make('sections.title', ['page' => 'Contact Us'], ['pagetitle' => 'GET IN TOUCH WITH US'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	
	<?php echo $__env->make('sections.contact', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	
</div>
<!-- Site Main End -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\camp-link.com\resources\views/pages/contact.blade.php ENDPATH**/ ?>