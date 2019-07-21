<?php $__env->startComponent('mail::message'); ?>

	<strong>Name:</strong><?php echo e($data['name']); ?><br>
	<strong>Surmane:</strong><?php echo e($data['surname']); ?>

	<strong>email:</strong><?php echo e($data['email']); ?>

	<strong>phone:</strong><?php echo e($data['phone']); ?><br>
	<strong>Message</strong>
	
	<?php echo e($data['message']); ?>

	
<?php echo $__env->renderComponent(); ?>
<?php /**PATH C:\xampp\htdocs\camp-link.com\resources\views/emails/contact/contact-us.blade.php ENDPATH**/ ?>