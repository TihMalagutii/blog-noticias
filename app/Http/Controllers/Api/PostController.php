<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
    
class PostController extends Controller {

    public function index(Request $request) {
        $page = $request->query('page', 1);
        $size = $request->query('size', 10);
        $posts = Post::paginate($size, ['*'], 'page', $page);
        return response()->json($posts);    
    }

    public function show(Post $post) {
        return response()->json([
            'success'=> true,
            'data' => $post
        ]);
    }

}
