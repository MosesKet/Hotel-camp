    <!-- Section Rooms -->
    <div class="section">
        <div class="wrapper-inner">
            <!-- Rooms List -->
            <div class="widget-rooms-list">
                @foreach ($rooms as $room)
                <div class="rooms-item">
                    <div class="item-photo">
                        <a href="{{ route('rooms.show', [$room->id]) }}" data-background="{{ asset('img/photo-room-1.jpg') }}"></a>
                    </div>
                    <div class="item-desc">
                        <h2><a href="{{ route('rooms.show', [$room->id]) }}">Single Room</a></h2>
                        <p>{{ $room->description }}</p>
                        <div class="desc-features">
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
                    </div>
                    <div class="item-price">
                        <div class="price-inner">
                            <i class="fa fa-star"></i>
                            <h3>N{{ $room->amount }}</h3>
                            <h5>PER NIGHT</h5>
                            <a href="{{ route('rooms.show', [$room->id]) }}" class="btn">ROOM DETAIL</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- Rooms List End -->
        </div>
    </div>
    <!-- Section Rooms End -->
