@if($comments)
@foreach($comments as $comment)

<div class="display-comment">
    <h5 itemprop="name">{{ $comment->author_name }}:</h5>
	<span itemprop="commentTime">{{  date('F d, Y',strtotime(str_replace('/','-',$comment->date)))   }} at {{ date('h:i a',strtotime(str_replace('/','-',$comment->date))) }}</span>
    <div itemprop="commentText">{!! $comment->content !!}</div>
    <a class="comment-reply-link" href="javascript:void(0);" data-comment-author="{{ $comment->author_name }}" data-comment-id="{{ $comment->id }}" id="reply">Reply</a>
	<div class="comment-respond-form-{{ $comment->id }}" style="display:none;"></div>
    @include('frontend.contentPages.partials.replys', ['comments' => $comment->replies])
</div>
@endforeach 
@endif

