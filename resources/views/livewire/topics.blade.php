<div>
    @foreach(app()->get("data") as $topic)
          <div><a href="/topic/{{$topic['id']}}">{{$topic["title"]}}</a></div>
    @endforeach

</div>
