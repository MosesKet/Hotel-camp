    <!-- Section Slider -->
    <div class="section">
        <div class="widget-slider">
            <div class="wrapper-full">
                <!-- Slider Carousel -->
                <div class="widget-carousel owl-carousel owl-theme">
                    <div class="slider-item" data-background="{{ asset('img/photo-slide-1.jpg') }}">
                        <div class="wrapper">
                            <div class="item-inner">
                                <h5>WELCOME TO CAMP LINK</h5>
                                <h1>Experience the Freedom</h1>
                                <h2>in Nigeria</h2>
                            </div>
                        </div>
                    </div>
                    <div class="slider-item" data-background="{{ asset('img/photo-slide-2.jpg') }}">
                        <div class="wrapper">
                            <div class="item-inner">
                                <h5>WELCOME TO CAMP LINK</h5>
                                <h1>A Place to Relax</h1>
                                <h2>in Benin</h2>
                            </div>
                        </div>
                    </div>
                    <div class="slider-item" data-background="{{ asset('img/photo-slide-3.jpg') }}">
                        <div class="wrapper">
                            <div class="item-inner">
                                <h5>WELCOME TO CAMP LINK</h5>
                                <h1>Touch The Sea</h1>
                                <h2>in Monaco</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slider Carousel End -->
                <!-- Slider Booking -->
                <div class="slider-booking">
                    <div class="wrapper">
                        <h5>BOOK NOW YOUR HOTEL</h5>
                        <form>
                            <ul>
                                <li>
                                    <i class="fa fa-calendar-plus-o"></i>
                                    <input type="text" name="checkin" placeholder="CHECK IN" class="datepicker" required="">
                                </li>
                                <li>
                                    <i class="fa fa-calendar-plus-o"></i>
                                    <input type="text" name="checkout" placeholder="CHECK OUT" class="datepicker" required="">
                                </li>
                                <li>
                                    <i class="fa fa-caret-down"></i>
                                    <select name="adults" required="">
                                        <option value="">ADULTS</option>
                                        <option value="1">1 ADULT</option>
                                        <option value="2">2 ADULT</option>
                                        <option value="3">3 ADULT</option>
                                    </select>
                                </li>
                                <li>
                                    <i class="fa fa-caret-down"></i>
                                    <select name="childrens" required="">
                                        <option value="">CHILDRENS</option>
                                        <option value="1">1 CHILDREN</option>
                                        <option value="2">2 CHILDREN</option>
                                        <option value="3">3 CHILDREN</option>
                                    </select>
                                </li>
                                <li>
                                    <button type="submit" class="btn">BOOK NOW</button>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>
                <!-- Slider Booking End -->
            </div>
        </div>
    </div>
    <!-- Section Slider End -->
