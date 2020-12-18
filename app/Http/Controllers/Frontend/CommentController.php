<?php

namespace App\Http\Controllers\Frontend;

use App\ContentPage;
use App\Comment;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Auth;
class CommentController extends Controller
{
    public function save(Request $request)
    {	
        Validator::extend('mustBeEmpty', function($attr, $value, $params){
            if(!empty($attr)) return false;
            return true;
        });
        
        $request->validate([
            'content' => 'required|string',
            'author_name' => 'required|string|max:255',
            'author_email' => 'required|email',
            'website' => 'mustBeEmpty',
        ]);

        $comment = new Comment($request->only(['content', 'author_name', 'author_email', 'page_id', 'parent_id']));
		
		$comment->author_ip = $request->ip();

		$comment->author_id = (!Auth::guest() ? Auth::id() : 0);

        $page = ContentPage::find($request->page_id);

        $page->pageComments()->save($comment);

        return redirect($request->url);//back()->with('message', 'Thank you for submitting a comment. Your comment is pending approval.');
    }
}
