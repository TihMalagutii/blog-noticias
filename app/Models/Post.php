<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use OpenApi\Attributes as OA;

#[OA\Schema(
    schema:"Post",
    title:"Post",
    description:"Modelo que representa um post no sistema.",
    properties: [
        new OA\Property(property:"id", type:"integer", format:"int64", description:"ID único do post (chave primária)"),
        new OA\Property(property:"title", type:"string", maxLength:128, description:"Título do post (máximo de 128 caracteres)"),
        new OA\Property(property:"description", type:"string", maxLength:512, description:"Descrição do post (máximo de 512 caracteres)"),
        new OA\Property(property:"thumb", type:"string", maxLength:256, description:"Thumb do post (máximo de 256 caracteres)"),
        new OA\Property(property:"image", type:"string", maxLength:256, description:"Imagem do post (máximo de 256 caracteres)"),
        new OA\Property(property:"content", type:"string", format:"text", description:"Conteúdo principal do post"),
        new OA\Property(property:"created_at", type:"string", format:"date-time", description:"Data e hora de criação do post"),
        new OA\Property(property:"updated_at", type:"string", format:"date-time", description:"Data e hora da última atualização do post"),
    ],
    required:["title", "subtitle", "content"]
)]
class Post extends Model {

    use HasFactory;
    
    public static function createTable() {
        $table = Post::getTableName();
        Schema::create($table, function (Blueprint $table) {
            $table->id();
            $table->string('title', 128);
            $table->string('description', 512);
            $table->string('thumb', 256);
            $table->string('image', 256);
            $table->text('content');
            $table->timestamps();
        });
    }

    public static function dropTable() {
        $table = Post::getTableName();
        Schema::dropIfExists($table);
    }

}
