<?php

namespace App\Http\Controllers\Frontend;

use App\ContentPage;
use App\Comment;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Auth;
class CommentController extends Controller
{
    public function save(Request $request)
    {	
        // spam honeypot.
        if ($request->has('url') && $request->has('website') && strlen($request->website)>0 ) {
            // ddd($request->website);
            return redirect($request->url);
        }
            
        Validator::extend('mustBeEmpty', function($attr, $value, $params){
            if(!empty($attr) && strlen($request->website) > 0) return false;
            return true;
        });
        
        $request->validate([
            'content' => 'required|string',
            'author_name' => 'required|string|max:255',
            'author_email' => 'required|email',
            // 'website' => 'mustBeEmpty', // not working well
        ]);

        $comment = new Comment($request->only(['content', 'author_name', 'author_email', 'page_id', 'parent_id']));
        
        // Log::debug($comment);
		
		$comment->author_ip = $request->ip();
		$comment->author_id = (!Auth::guest() ? Auth::id() : 0);
		$comment->date = date('d/m/Y H:i:s');
		$comment->date_gmt = date('d/m/Y H:i:s');

        // $page = ContentPage::find($request->page_id);
        // $page->pageComments()->save($comment);
        $comment->save();

        if ($request->has('url'))
            return redirect($request->url);
        else 
            return back()->with('message', 'Thank you for submitting a comment. Your comment is pending approval.');
    }
}
