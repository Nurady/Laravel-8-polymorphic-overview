@foreach ($videos as $video)
    <p>
        {{ $video->content }}
    </p>
@endforeach
