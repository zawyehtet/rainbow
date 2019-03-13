          
    <ul class=" checked-list-box mt-80"> 
        @foreach($seats as $seat)
            @php
                //$bookings = ['2', '7'];
                
                $seat_status=' bg-success text-light';
                $available = true;
                $check='checked';
                if (in_array($seat->number, $bookings)) {
                    $seat_status = ' bg-danger text-light ';
                    //'not-available';
                    
                    $available = false;
                }
                
            @endphp
            <li class="seat-item ">
                <span class="button-checkbox ">
                <button type="button"  class="btn  {{ $seat_status }} " data-color="primary">{{$seat->number }} </button>
                @if($available)
                    <input type="checkbox" name="booking_seats[]" class="custom-checkbox-input" id="checked" value="{{$seat->id}}"/>
                @endif
                </span>
                {{-- <label class="custom-checkbox">
                    <input type="hidden" name="alarm" value="False" />
                    <input class="custom-checkbox-input" name="booking_seats[]" value="{{$seat->id}}" type="checkbox">
                <span class="custom-checkbox-text">{{$seat->number}}</span>
                </label> --}}
            </li>    
        @endforeach
    </ul> 
    