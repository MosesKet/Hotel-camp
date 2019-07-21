    <!-- Section Contact -->
    <div class="section">
        <div class="wrapper-inner">
            <div class="row">
                <div class="col-lg-6">
                    <!-- Contact Info -->
                    <div class="widget-contact-info">
                        <ul>
                            <li>
                                <h5>THE GRANDIUM HOTEL</h5>
                                <ul>
                                    <li>The Grandium Hotel 41-49 Longridge Road, Earls Court, London</li>
                                    <li>Phone: +1-800-123-45-67  Fax: +1-800-123-45-67</li>
                                    <li><a href="mailto:info@thegrandiumhotel.com">info@thegrandiumhotel.com</a></li>
                                </ul>
                            </li>
                            <li>
                                <h5>RESERVATION</h5>
                                <ul>
                                    <li>Mr. Michael Feldstein - Director of Reservation</li>
                                    <li>Phone: +1-800-123-45-67  Fax: +1-800-123-45-67</li>
                                    <li><a href="mailto:reservation@thegrandiumhotel.com">reservation@thegrandiumhotel.com</a></li>
                                </ul>
                            </li>
                            <li>
                                <h5>PUBLIC RELATIONS</h5>
                                <ul>
                                    <li>Ms. Marilyn Suttle - Public Relations Manager</li>
                                    <li>Phone: +1-800-123-45-67  Fax: +1-800-123-45-67</li>
                                    <li><a href="mailto:public.relations@thegrandiumhotel.com">public.relations@thegrandiumhotel.com</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- Contact Info End -->
                </div>
                <div class="col-lg-6">
                    <!-- Contact Form -->
                    <div class="widget-contact-form">
                        <h5>CONTACT FORM</h5>
                        <p>We are eager to hear from you; please fill in your contact information and one of our staff members will contact you shortly.</p>
						<?php if(Session::has('success')): ?>
							<div class="alert alert-success"><?php echo e(Session::get('success')); ?></div>
						<?php endif; ?>
                        <div class="data-form">
                            <form action="<?php echo e(route('contact.store')); ?>" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" id="form-name" name="name" value="<?php echo e(old('name')); ?>" placeholder="YOUR NAME">
										<p class="text-danger"><?php echo e($errors->first('name')); ?></p>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" id="form-surname" name="surname" value="<?php echo e(old('surname')); ?>" placeholder="YOUR SURNAME">
										<p class="text-danger"><?php echo e($errors->first('surname')); ?></p>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" id="form-email" name="email" value="<?php echo e(old('email')); ?>" placeholder="YOUR EMAIL ADDRESS">
										<p class="text-danger"><?php echo e($errors->first('email')); ?></p>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" id="form-phone" name="phone" value="<?php echo e(old('phone')); ?>" placeholder="YOUR PHONE">
										<p class="text-danger"><?php echo e($errors->first('phone')); ?></p>
                                    </div>
                                    <div class="col-md-12">
                                        <textarea cols="6" rows="8" id="message" name="message" value="<?php echo e(old('message')); ?>" placeholder="YOUR MESSAGE"></textarea>
										<p class="text-danger"><?php echo e($errors->first('message')); ?></p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="note">* Please fill in all of the required fields</p>
                                    </div>
									<?php echo csrf_field(); ?>
                                    <div class="col-md-6 align-right">
                                        <input type="submit" value="SEND FORM" class="btn">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Contact Form End -->
                </div>
                <div class="col-lg-12">
                    <!-- Contact Review -->
                    <div class="widget-contact-review">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="review-item">
                                    <div class="item-inner">
                                        <i class="fa fa-commenting-o"></i> READ OR WRITE REVIEWS
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="review-item">
                                    <div class="item-inner">
                                        <a href="#" target="_blank"><i class="fa fa-google-plus"></i> GOOGLE PLUS +</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="review-item">
                                    <div class="item-inner">
                                        <a href="#" target="_blank"><i class="fa fa-yelp"></i> YELP</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="review-item">
                                    <div class="item-inner">
                                        <a href="#" target="_blank"><i class="fa fa-tripadvisor"></i> TRIPADVISOR</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Contact Review End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Section Contact End -->
<?php /**PATH C:\xampp\htdocs\camp-link.com\resources\views/sections/contact.blade.php ENDPATH**/ ?>