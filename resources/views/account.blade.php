
@foreach ($user as $users)
    <h1>User Name: {{$users->first_name}}</h1>
    @foreach ($users->photos as $photo)
        <p>img: {{$photo->image_url}}</p>
    @endforeach
    @foreach ($photo->comments as $comment)
        <p><strong>Comment: </strong>{{$comment->body}}</p>
        <p><strong>User: </strong><strong>{{$comment->account->first_name}}</strong></p>
    @endforeach
@endforeach
 
<br/>
<br/>
<br/>
<br/>

@foreach ($data as $data)
    <h1>img: {{$data->image_url}}</h1>
    @foreach ($data->comments as $comment)
    <p>Comment: {{$comment->body}}</p>
    <p>commented by: {{$comment->account->first_name}}</p>
   @endforeach
   
    @foreach ($data->likes as $like)
        <p>like: {{$like->isLiked}}</p>
        <p>liked by: {{$like->account->first_name}}</p>
    @endforeach
@endforeach