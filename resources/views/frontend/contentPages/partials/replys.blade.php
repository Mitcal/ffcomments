@if($comments)
@foreach($comments as $comment)

<div class="display-comment">
    <h5 itemprop="name">{{ $comment->author_name }}:</h5>
	<span itemprop="commentTime">{{  date('F d, Y',strtotime(str_replace('/','-',$comment->date)))   }} at {{ date('h:i a',strtotime(str_replace('/','-',$comment->date))) }}</span>
    <div>{!! $comment->content !!}</div>
    <a class="comment-reply-link" href="javascript:void(0);" data-comment-author="{{ $comment->author_name }}" data-comment-id="{{ $comment->id }}" id="reply">Reply</a>
	<div class="comment-respond-form-{{ $comment->id }}" style="display:none;">
		<form method="post" action="{{  url('comment/save') }}">
			@csrf
			<div class="form-group">
			   	<p>
				<label for="comment">Comment</label>
					<div div itemprop="commentText"><textarea class="form-control" name="content" id="content" required>{{ old('content') }}</textarea></div>
				</p>
				<p>
				<label for="username">Name</label>
				<input type="text" name="author_name" class="form-control" value="{{ old('author_name') }}" required/>
				</p>
				<p>
				<label for="email">Email</label>
				<input type="text" name="author_email" class="form-control" value="{{ old('author_email') }}" required/>
				</p>
				<input type="hidden" name="page_id" value="{{ $page_id }}" />
				<input type="hidden" class="parent_id" name="parent_id" value="{{ $comment->id }}" />
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-sm btn-outline-danger py-0" style="font-size: 0.8em;" value="Reply" />
			</div>
		</form>
	</div>
    @include('frontend.contentPages.partials.replys', ['comments' => $comment->replies])
</div>
@endforeach 
@endif

