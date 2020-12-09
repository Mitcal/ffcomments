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
				<div itemscope itemtype="https://schema.org/UserComments">
                    @include('frontend.contentPages.partials.replys', ['comments' => $page->pageComments, 'page_id' => $page->id])
				</div>
                <hr />
               </div>

               <div class="card-body">
				<h5>Leave a comment</h5>
                <form method="post" action="{{ url('comment/save') }}">
                    @csrf
                    <div class="form-group">
						<p>
							<label for="comment">Comment</label>
							 <textarea class="form-control" name="content" id="content" required>{{ old('content') }}</textarea>
						</p>
						<p>
							<label for="username">Name</label>
							<input type="text" name="author_name" class="form-control" value="{{ old('author_name') }}" required/>
						</p>
						<p>
							<label for="email">Email</label>
							<input type="text" name="author_email" class="form-control" value="{{ old('author_email') }}" required/>
						</p>
                        <input type="hidden" name="page_id" value="{{ $page->id }}" />
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
