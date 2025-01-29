<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnNavbarFooterVariantsAndBreadcrumbStatusInPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->string('navbar_variant')->nullable();
            $table->string('footer_variant')->nullable();
            $table->string('breadcrumb_status')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn('navbar_variant');
            $table->dropColumn('footer_variant');
            $table->dropColumn('breadcrumb_status');
        });
    }
}
