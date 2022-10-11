<?php

use App\Models\Aluno;
use App\Models\Materia;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aluno_materia', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Aluno::class) -> constrained();
            $table->foreignIdFor(Materia::class) -> constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aluno_materia');
    }
};
