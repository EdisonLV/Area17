<?php namespace Area17\News\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class AddAuthorColumn extends Migration
{
    public function up()
    {
        Schema::table('area17_news_posts', function ($table) {
            $table->integer('author_id')->unsigned();
        });
    }

    public function down()
    {
      Schema::table('area17_news_posts', function ($table) {
          $table->dropColumn('author_id');
      });
    }
}
