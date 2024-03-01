<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use OpenApi\Attributes as OA;
    
#[OA\Info(title: "Blog API", version: "1.0", description:'An API to get posts from blogs and get posts details.')]
class PostController extends Controller {

    #[OA\Get(
        path: '/api/posts',
        tags: ['Posts'],
        parameters: [
            new OA\Parameter(name: 'page', required: false, description: 'Pagination page number', in: 'query', schema: new OA\Schema(type: 'integer', minimum: 1)),
            new OA\Parameter(name: 'size', required: false, description: 'Number of posts per page', in: 'query', schema: new OA\Schema(type: 'integer', minimum: 1)),
        ]
    )]
    #[OA\Response(response: '200', description: 'Paginated list of posts.')]
    public function index(Request $request) {
        $page = $request->query('page', 1);
        $size = $request->query('size', 10);
        $posts = Post::paginate($size, ['*'], 'page', $page);
        return response()->json($posts);    
    }

    #[OA\Get(
        path: '/api/posts/{id}',
        tags: ['Posts'],
        parameters: [
            new OA\Parameter(name:'id', required: true, description: 'Post id', in: 'path', schema: new OA\Schema(type: 'integer', minimum:1)),
        ]
    )]
    #[OA\Response(response: '200', description: 'Detalhes do post.')]
    #[OA\Response(response: '404', description: 'Não encontrado.')]
    public function show(Post $post) {
        return response()->json([
            'success'=> true,
            'data' => $post
        ]);
    }

}
