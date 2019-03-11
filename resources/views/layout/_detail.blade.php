{{-- detail******************* --}}
<input type="hidden" name="showing_id" value="{{$show->id}}">
<img src="/storage/{{ $show->movie->image }}" class="img-thumbnail">
<ul class="list-group">
    <li class="list-group-item  align-items-center">
   <h3> MOVIE :{{$show->movie->title}}</h3>
    </li>
    <li class="list-group-item  align-items-center">
    <h3> TIME :{{$show->show_time}}</h3>
    </li>
    <li class="list-group-item  align-items-center">
    <h3> HALL :{{$show->hall->name}}</h3>
    </li>
    <li class="list-group-item">
        <input type="submit" class="btn border border-success" value="Book">
        <a href="{{url('/booking/show/book')}}" class="btn border border-danger">Cancel</a>
    </li>
    
</ul>


    {{-- end detail************** --}}