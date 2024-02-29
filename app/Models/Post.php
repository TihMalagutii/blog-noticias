<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
