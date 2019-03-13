{{-- detail******************* --}}
<input type="hidden" name="showing_id" value="{{$show->id}}">
<img src="/storage/{{ $show->movie->image }}" class="img-thumbnail">
<ul class="list-group">
    <li class="list-group-item  align-items-center">
   <h4> MOVIE :{{$show->movie->title}}</h4>
    </li>
    <li class="list-group-item  align-items-center">
    <h4> TIME :{{$show->show_time}}</h4>
    </li>
    <li class="list-group-item  align-items-center">
    <h4> HALL :{{$show->hall->name}}</h4>
    </li>
    <li class="list-group-item">
        <input type="submit" class="btn btn-success" value="Book">
        <a href="{{url('/booking/show/book')}}" class="btn btn-danger">Cancel</a>
    </li>
    
</ul>


    {{-- end detail************** --}}