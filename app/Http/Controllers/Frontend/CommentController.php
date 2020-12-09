<?php

namespace App\Http\Controllers\Frontend;

use App\ContentPage;
use App\Comment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
class CommentController extends Controller
{
    public function save(Request $request)
    {	
        $request->validate([
            'content' => 'required|string',
            'author_name' => 'required|string|max:255',
            'author_email' => 'required|email',
        ]);

        $comment = new Comment($request->only(['content', 'author_name', 'author_email', 'page_id', 'parent_id']));
		
		$comment->author_ip = $request->ip();

		$comment->author_id = (!Auth::guest() ? Auth::id() : 0);

        $page = ContentPage::find($request->page_id);

        $page->pageComments()->save($comment);

        return back()->with('message', 'Thank you for submitting a comment. Your comment is pending approval.');
    }
}
