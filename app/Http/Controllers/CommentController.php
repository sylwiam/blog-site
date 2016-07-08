<?php namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller {

	public function getData() {
		$result = Comment::all();

		return $result;
	}

	public function create(Request $request) {
		$data = array();
		
		// \Log::info('all requests');
		// \Log::info($request->all());

        $data['author'] = $request->get('author');
        $data['comment'] = $request->get('comment');
                
		$message = new Comment;
		$message->fill($data);
		
		$result = $message->save();
	}
}



		