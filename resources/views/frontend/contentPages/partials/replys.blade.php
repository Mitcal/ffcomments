@if($comments)
@foreach($comments as $comment)

<div class="display-comment">
    <h5>{{ $comment->author_name }} says:</h5>
	<span>{{  date('F d, Y',strtotime(str_replace('/','-',$comment->date)))   }} at {{ date('h:i a',strtotime(str_replace('/','-',$comment->date))) }}</span>
    <div>{!! $comment->content !!}</div>
    <a class="comment-reply-link" href="javascript:void(0);" data-comment-author="{{ $comment->author_name }}" data-comment-id="{{ $comment->id }}" id="reply">Reply</a>
	<div class="comment-respond-form-{{ $comment->id }}" style="display:none;">
		<form method="post" action="{{  url('reply/save') }}">
			@csrf
			<div class="form-group">
			   <p>
								<label for="comment">Comment</label>
								 <textarea class="form-control" name="content" id="content" required></textarea>
							</p>
							<p>
								<label for="username">Name</label>
								<input type="text" name="author" class="form-control" required/>
							</p>
							<p>
								<label for="email">Email</label>
								<input type="text" name="email" class="form-control" required/>
							</p>
							<p>
								<label for="email">Website</label>
								<input type="text" name="website" class="form-control" />
							</p>
				<input type="hidden" name="post_id" value="{{ $post_id }}" />
				<input type="hidden" class="comment_id" name="comment_id" value="{{ $comment->id }}" />
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

