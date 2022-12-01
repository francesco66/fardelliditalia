@props(['comment'])

<div class="flex">
    <div class="flex-shrink-0 mr-3">
        <img class="mt-2 rounded-full w-8 h-8 sm:w-10 sm:h-10" src="https://i.pravatar.cc/200" alt="">
    </div>
    <div class="flex-1 border rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
        <strong>{{ $comment->author->name }}</strong> <span class="text-xs text-gray-400">&#8226; {{ $comment->created_at->formatLocalized('%A %d %B %Y') }}</span>
        <p class="text-sm">{{ $comment->body}}</p>
        <!-- repliche -->
        <a href="" id="reply"></a>
        <form method="post" action="/posts/{{ $post->slug }}/reply">
            @csrf
            <div class="">
                <input type="text" name="body" class="" />
                <input type="hidden" name="post_id" value="{{ $post->id }}" />
                <input type="hidden" name="comment_id" value="{{ $comment->id }}" />
            </div>
            <div class="">
                <!-- <input type="submit" class="btn btn-sm btn-outline-danger py-0" style="font-size: 0.8em;" value="Reply" /> -->
                <button type="submit" class="p-2 my-2 text-lg text-white bg-blue-500 hover:bg-blue-600 rounded-xl">Replica</button>
            </div>
        </form>
        <div>
            <p>{{ $comment->replies->count() }}</p>
        </div>
    </div>
</div>

{{-- <a href="" id="reply"></a>
<form method="post" action="{{ route('reply.add') }}">
@csrf
<div class="form-group">
    <input type="text" name="comment" class="form-control" />
    <input type="hidden" name="post_id" value="{{ $post->id }}" />
    <input type="hidden" name="comment_id" value="{{ $comment->id }}" />
</div>
<div class="form-group">
    <input type="submit" class="btn btn-sm btn-outline-danger py-0" style="font-size: 0.8em;" value="Reply" />
</div>
</form>
@include('post.partials.replies', ['comments' => $comment->replies])
--}}