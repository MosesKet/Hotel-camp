<?php $__env->startSection('title','Gallery'); ?>

<?php $__env->startSection('content'); ?>

<!-- Site Main -->
<div class="site-main">

	<?php echo $__env->make('sections.title', ['page' => 'Gallery'], ['pagetitle' => 'DISCOVER THE GRANDIUM'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	
	<?php echo $__env->make('sections.gallery-main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</div>
<!-- Site Main End -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\camp-link.com\resources\views/pages/gallery.blade.php ENDPATH**/ ?>