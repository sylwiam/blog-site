<?php namespace App\Http\Controllers;

use App\Models\Comment;
use Input;

class CommentController extends Controller {


	public function getData() {
		\Log::info('BlogController::getData ');
		$result = Comment::all();
		\Log::info($result);
		// $this->create();

		return $result;
	}

	public function create() {
		$data = array();

        $data['author'] = Input::get('author');
        $data['comment'] = Input::get('comment');

		$message = new Comment;
		$message->fill($data);
		
		$result = $message->save();
	}
}



		