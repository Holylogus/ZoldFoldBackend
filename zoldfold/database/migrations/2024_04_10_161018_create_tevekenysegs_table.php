<?php

use App\Models\Tevekenyseg;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tevekenysegs', function (Blueprint $table) {
            $table->id('tevekenyseg_id');
            $table->string('tevekenyseg_nev');
            $table->integer('pontszam');
            $table->timestamps();
        });

        Tevekenyseg::create(
            [
                
                'tevekenyseg_nev' => 'rollerrel jöttem iskolába',
                'pontszam' => 1,
            ]
        );

        Tevekenyseg::create(
            [
                
                'tevekenyseg_nev' => 'ültettem fát',
                'pontszam' => 5,
            ]
        );

        Tevekenyseg::create(
            [
                
                'tevekenyseg_nev' => 'kevesebb vizet használtam a fürdéshez',
                'pontszam' => 3,
            ]
        );
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tevekenysegs');
    }
};
