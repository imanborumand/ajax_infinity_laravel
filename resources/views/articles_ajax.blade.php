@foreach($articles as $article)
    <h2>{{$article->title}}</h2>
    <div>{!! $article->body !!}</div>
    <div>
        <span class="badge badge-success">Posted {{$article->created_at}}</span>

    </div>
    <hr>
@endforeach