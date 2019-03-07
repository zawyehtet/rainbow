          
    <ul class=" checked-list-box"> 
        @foreach($seats as $seat)
            @php
                //$bookings = ['2', '7'];
                $seat_status=' bg-success text-light';
                if (in_array($seat->number, $bookings)) {
                    $seat_status = ' bg-danger text-light';
                    //'not-available';
                }
            @endphp
            <li class="seat-item   ">
                <span class="button-checkbox ">
                    <button type="button" class="btn  {{ $seat_status }}" data-color="primary">{{$seat->number }}</button>
                    <input type="checkbox" name="booking_seats[]"  class="hidden"  value="{{$seat->id}}"/>
                </span>
            </li>    
        @endforeach
    </ul> 
    