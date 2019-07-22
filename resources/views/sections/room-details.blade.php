    <!-- Section Rooms Detail -->
    <div class="section">
        <div class="wrapper-inner">
            <div class="widget-rooms-detail">
                <div class="widget-inner">
                    <div class="row">
                        <div class="col-md-8">
                            <!-- Room Slider -->
                            <div class="room-slider">
                                <div class="room-price">N{{ $room->amount }} <small>PER NIGHT</small></div>
                                <div class="owl-carousel owl-theme owl-type1">
                                    <a href="{{ asset('img\photo-room-detail-5.jpeg') }}" data-background="{{ asset('img/photo-room-detail-5.jpg') }}" title="Single Room" class="popup-gallery"></a>
                                    <a href="{{ asset('img\photo-room-detail-4.jpeg') }}" data-background="{{ asset('img/photo-room-detail-4.jpg') }}" title="Single Room" class="popup-gallery"></a>
                                    <a href="{{ asset('img\photo-room-detail-3.jpeg') }}" data-background="{{ asset('img/photo-room-detail-3.jpg') }}" title="Single Room" class="popup-gallery"></a>
                                    <a href="{{ asset('img\photo-room-detail-2.jpeg') }}" data-background="{{ asset('img/photo-room-detail-2.jpg') }}" title="Single Room" class="popup-gallery"></a>
                                    <a href="{{ asset('img\photo-room-detail-1.jpeg') }}" data-background="{{ asset('img/photo-room-detail-1.jpg') }}" title="Single Room" class="popup-gallery"></a>
                                    <a href="{{ asset('img\photo-room-detail-5.jpeg') }}" data-background="{{ asset('img/photo-room-detail-5.jpg') }}" title="Single Room" class="popup-gallery"></a>
                                    <a href="{{ asset('img\photo-room-detail-4.jpeg') }}" data-background="{{ asset('img/photo-room-detail-4.jpg') }}" title="Single Room" class="popup-gallery"></a>
                                    <a href="{{ asset('img\photo-room-detail-3.jpeg') }}" data-background="{{ asset('img/photo-room-detail-3.jpg') }}" title="Single Room" class="popup-gallery"></a>
                                    <a href="{{ asset('img\photo-room-detail-2.jpeg') }}" data-background="{{ asset('img/photo-room-detail-2.jpg') }}" title="Single Room" class="popup-gallery"></a>
                                    <a href="{{ asset('img\photo-room-detail-1.jpeg') }}" data-background="{{ asset('img/photo-room-detail-1.jpg') }}" title="Single Room" class="popup-gallery"></a>
                                </div>
                            </div>
                            <!-- Room Slider End -->
                            <!-- Room Thumbnails -->
                            <div class="room-thumbnails">
                                <div class="owl-carousel">
                                    <a href="#" data-background="{{ asset('img/photo-room-detail-5.jpg') }}" title="Single Room"></a>
                                    <a href="#" data-background="{{ asset('img/photo-room-detail-4.jpg') }}" title="Single Room"></a>
                                    <a href="#" data-background="{{ asset('img/photo-room-detail-3.jpg') }}" title="Single Room"></a>
                                    <a href="#" data-background="{{ asset('img/photo-room-detail-2.jpg') }}" title="Single Room"></a>
                                    <a href="#" data-background="{{ asset('img/photo-room-detail-1.jpg') }}" title="Single Room"></a>
                                    <a href="#" data-background="{{ asset('img/photo-room-detail-5.jpg') }}" title="Single Room"></a>
                                    <a href="#" data-background="{{ asset('img/photo-room-detail-4.jpg') }}" title="Single Room"></a>
                                    <a href="#" data-background="{{ asset('img/photo-room-detail-3.jpg') }}" title="Single Room"></a>
                                    <a href="#" data-background="{{ asset('img/photo-room-detail-2.jpg') }}" title="Single Room"></a>
                                    <a href="#" data-background="{{ asset('img/photo-room-detail-1.jpg') }}" title="Single Room"></a>
                                </div>
                            </div>
                            <!-- Room Thumbnails End -->
                            <!-- Room Description -->
                            <div class="room-desc">
                                <h5>ROOM DESCRIPTION</h5>
                                <p>{{ $room->description }}</p>
                            </div>
                            <!-- Room Description End -->
                        </div>
                        <div class="col-md-4">
                            <!-- Room Booking -->
                            <div class="room-booking">
                                <h5>BOOKING</h5>
                                <h2>Book a Room</h2>
                                <div class="data-form">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <i class="fa fa-calendar-plus-o"></i>
                                                <input type="text" name="checkin" placeholder="CHECK IN" class="datepicker" required="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <i class="fa fa-calendar-plus-o"></i>
                                                <input type="text" name="checkout" placeholder="CHECK OUT" class="datepicker" required="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <i class="fa fa-caret-down"></i>
                                                <select name="adults" required="">
                                                    <option value="">ADULTS</option>
                                                    <option value="1">1 ADULT</option>
                                                    <option value="2">2 ADULT</option>
                                                    <option value="3">3 ADULT</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <i class="fa fa-caret-down"></i>
                                                <select name="childrens" required="">
                                                    <option value="">CHILDRENS</option>
                                                    <option value="1">1 CHILDREN</option>
                                                    <option value="2">2 CHILDREN</option>
                                                    <option value="3">3 CHILDREN</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn">BOOK NOW THIS ROOM</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Room Booking End -->
                            <!-- Room Features -->
                            <div class="room-features">
                                <h5>FEATURES</h5>
                                <h2>Room Features</h2>
                                <ul>
                                    <li><i class="fa fa-check"></i> BREAKFAST</li>
                                    <li><i class="fa fa-check"></i> WI-FI</li>
                                    <li><i class="fa fa-check"></i> HAIR DRYER</li>
                                    <li><i class="fa fa-check"></i> LCD TV</li>
                                    <li><i class="fa fa-check"></i> SHOWER AND TAB</li>
                                    <li><i class="fa fa-check"></i> SECURITY SYSTEM</li>
                                    <li><i class="fa fa-check"></i> AIR CONDITIONING</li>
                                    <li><i class="fa fa-check"></i> MINI BAR</li>
                                    <li><i class="fa fa-check"></i> TEA AND COFFEE SET</li>
                                </ul>
                            </div>
                            <!-- Room Features End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Section Rooms Detail End -->
