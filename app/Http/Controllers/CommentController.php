<?php namespace App\Http\Controllers;

use App\Models\Comment;

class CommentController extends Controller {


	public function getData() {
		\Log::info('BlogController::getData ');
		$result = Comment::all();
		\Log::info($result);

		return $result;
	}

	public function create() {
		$data = array('name' => 'some title 3', 'message' => 'some message 3');

		$message = new Comment;
		$message->fill($data);
	
	
		try {
			$result = $message->save();
		} catch (Exception $e) {
			$response['error'] = $e->getMessage();
			$response['data'] = $data;
			return Response::json($response, 200);
		}
		
		if ($result) {
			$response['success'] = true;
			return Response::json($response,200);
		} else {
			$response['error'] = 'Comment was not saved sucessfully.';
			return Response::json($response,400);
		}
	}
}



		