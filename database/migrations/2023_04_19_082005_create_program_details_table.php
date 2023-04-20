<?php

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
        Schema::create('program_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('program_id');
            $table->string('title');
            $table->string('subtitle');
            $table->string('image_hero');
            $table->text('features');
            $table->unsignedBigInteger('percentage');
            $table->string('apply_now_id');
            $table->string('apply_now_en');
            $table->string('downoad_syllabus_id');
            $table->string('downoad_syllabus_en');
            $table->string('overview_title_id');
            $table->string('overview_title_en');
            $table->string('overview_title_subtitle_id');
            $table->string('overview_title_subtitle_en');
            $table->string('overview_title_caption_id')->nullable();
            $table->string('overview_title_caption_en')->nullable();
            $table->text('overview_content')->nullable();
            $table->string('why_join_title_id');
            $table->string('why_join_title_en');
            $table->string('why_join_title_subtitle_id');
            $table->string('why_join_title_subtitle_en');
            $table->string('why_join_title_caption_id')->nullable();
            $table->string('why_join_title_caption_en')->nullable();
            $table->text('why_join_content')->nullable();
            $table->string('learn_phase_title_id');
            $table->string('learn_phase_title_en');
            $table->string('learn_phase_title_subtitle_id');
            $table->string('learn_phase_title_subtitle_en');
            $table->string('learn_phase_title_caption_id')->nullable();
            $table->string('learn_phase_title_caption_en')->nullable();
            $table->text('learn_phase_content')->nullable();
            $table->string('destination_title_id');
            $table->string('destination_title_en');
            $table->string('destination_title_subtitle_id');
            $table->string('destination_title_subtitle_en');
            $table->string('destination_title_caption_id')->nullable();
            $table->string('destination_title_caption_en')->nullable();
            $table->text('destination_content')->nullable();
            $table->string('explore_global_title_id');
            $table->string('explore_global_title_en');
            $table->string('explore_global_title_subtitle_id');
            $table->string('explore_global_title_subtitle_en');
            $table->string('explore_global_title_caption_id')->nullable();
            $table->string('explore_global_title_caption_en')->nullable();
            $table->text('explore_global_content')->nullable();
            $table->string('alumny_says_title_id');
            $table->string('alumny_says_title_en');
            $table->string('alumny_says_title_subtitle_id');
            $table->string('alumny_says_title_subtitle_en');
            $table->string('alumny_says_title_caption_id')->nullable();
            $table->string('alumny_says_title_caption_en')->nullable();
            $table->text('alumny_says_content')->nullable();
            $table->string('partners_title_id');
            $table->string('partners_title_en');
            $table->string('partners_title_subtitle_id');
            $table->string('partners_title_subtitle_en');
            $table->string('partners_title_caption_id')->nullable();
            $table->string('partners_title_caption_en')->nullable();
            $table->text('partners_content');
            $table->string('portofolio_title_id');
            $table->string('portofolio_title_en');
            $table->string('portofolio_title_subtitle_id');
            $table->string('portofolio_title_subtitle_en');
            $table->string('portofolio_title_caption_id')->nullable();
            $table->string('portofolio_title_caption_en')->nullable();
            $table->text('portofolio_content')->nullable();
            $table->string('get_hired_title_id');
            $table->string('get_hired_title_en');
            $table->string('get_hired_title_subtitle_id');
            $table->string('get_hired_title_subtitle_en');
            $table->string('get_hired_title_caption_id')->nullable();
            $table->string('get_hired_title_caption_en')->nullable();
            $table->text('get_hired_content')->nullable();
            $table->string('admissions_title_id');
            $table->string('admissions_title_en');
            $table->string('admissions_title_subtitle_id');
            $table->string('admissions_title_subtitle_en');
            $table->string('admissions_title_caption_id')->nullable();
            $table->string('admissions_title_caption_en')->nullable();
            $table->text('admissions_content')->nullable();
            $table->string('program_fee_title_id');
            $table->string('program_fee_title_en');
            $table->string('program_fee_title_subtitle_id');
            $table->string('program_fee_title_subtitle_en');
            $table->string('program_fee_title_caption_id')->nullable();
            $table->string('program_fee_title_caption_en')->nullable();
            $table->text('program_fee_content')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('program_details');
    }
};
