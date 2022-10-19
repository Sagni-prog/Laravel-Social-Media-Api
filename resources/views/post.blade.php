
@foreach ($post as $post)
    <h2>Title: {{$post->post_title}}</h2>
    <p><strong>Poster: {{$post->account->first_name}}</strong></p>
    <p>{{$post->post_body}}</p>
    @foreach ($post->comments as $comment)
        <p>commet: {{$comment->body}}</p>
        <p><strong>commeter: {{$comment->account->first_name}}</strong></p>
    @endforeach
    @foreach ($post->likes as $like)
        <p>like: {{$like->isLiked}}</p>
        <p><strong>liker: {{$like->account->first_name}}</strong></p>
    @endforeach
@endforeach