<?php

use App\Models\Post;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {

    public function up(): void {
        Post::createTable();
    }

    public function down(): void {
        Post::dropTable();
    }

};
