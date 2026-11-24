
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('media_user', function (Blueprint $table) {
            $table->foreignId('user_id')
                  ->constrained()
                  ->cascadeOnDelete();

            $table->foreignId('media_id')
                  ->constrained()
                  ->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('media_user', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['media_id']);
            $table->dropColumn(['user_id', 'media_id']);
        });
    }
};
