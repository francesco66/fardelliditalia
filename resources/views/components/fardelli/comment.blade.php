@props(['comment'])

<div class="flex">
    <div class="flex-shrink-0 mr-3">
        <img class="mt-2 rounded-full w-8 h-8 sm:w-10 sm:h-10" src="https://i.pravatar.cc/200" alt="">
    </div>
    <div class="flex-1 border rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
        <strong>{{ $comment->author->name }}</strong> <span class="text-xs text-gray-400">&#8226; {{ $comment->created_at->formatLocalized('%A %d %B %Y') }}</span>
        <p class="text-sm">{{ $comment->body}}</p>
        <!-- repliche -->
        <div class="mt-4 flex items-center">
            <div class="flex -space-x-2 mr-2">
                <img class="rounded-full w-6 h-6 border border-white" src="https://i.pravatar.cc/100" alt="">
                <img class="rounded-full w-6 h-6 border border-white" src="https://i.pravatar.cc/100" alt="">
            </div>
            <div class="text-sm text-gray-500 font-semibold">
                5 Replies
            </div>
        </div>
    </div>
</div>

<!-- <a href="" id="reply"></a>
<form method="post" action="{{ route('reply.add') }}">
    @csrf
    <div class="form-group">
        <input type="text" name="comment" class="form-control" />
        <input type="hidden" name="post_id" value="{{ $post_id }}" />
        <input type="hidden" name="comment_id" value="{{ $comment->id }}" />
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-sm btn-outline-danger py-0" style="font-size: 0.8em;" value="Reply" />
    </div>
</form>
@include('post.partials.replies', ['comments' => $comment->replies]) -->
