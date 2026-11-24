
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('media', function (Blueprint $table) {
            $table->string('jenis')->after('title');
            $table->string('genre')->after('jenis');
            $table->unsignedSmallInteger('tahun')->after('genre');

            $table->dropColumn(['category', 'image']);
        });
    }

    public function down(): void
    {
        Schema::table('media', function (Blueprint $table) {
            $table->string('category')->nullable();
            $table->string('image')->nullable();

            $table->dropColumn(['jenis', 'genre', 'tahun']);
        });
    }
};
