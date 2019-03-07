{{-- detail******************* --}}
<input type="hidden" name="showing_id" value="{{$show->id}}">
<img src="/storage/{{ $show->movie->image }}" class="img-thumbnail">
<ul class="list-group">
    <li class="list-group-item  align-items-center">
    Movie : <span>{{$show->movie->title}}</span>
    </li>
    <li class="list-group-item  align-items-center">
    Time :    <span>{{$show->show_time}}</span>
    </li>
    <li class="list-group-item  align-items-center">
    Theater :    <span>{{$show->hall->name}}</span>
    </li>
    <li class="list-group-item">
        <input type="submit" class="btn btn-primary" value="Book">
        <a href="{{url('/booking/show/book')}}" class="btn btn-danger">Cancel</a>
    </li>
    
</ul>

    {{-- end detail************** --}}