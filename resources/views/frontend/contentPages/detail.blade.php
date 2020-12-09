@extends('layouts.frontend')
<style>
    .display-comment .display-comment {
        margin-left: 40px
    }
</style>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
               <div class="card-body">
                <h5>Display Comments</h5>
				
                @include('frontend.contentPages.partials.replys', ['comments' => $page->pageComments, 'post_id' => $page->id])

                <hr />
               </div>

               <div class="card-body">
				<h5>Leave a comment</h5>
                <form method="post" action="{{ url('comment/save') }}">
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
                        <input type="hidden" name="post_id" value="{{ $page->id }}" />
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-sm btn-outline-danger py-0" style="font-size: 0.8em;" value="Add Comment" />
                    </div>
                </form>
               </div>

            </div>
        </div>
    </div>
</div>
@endsection
