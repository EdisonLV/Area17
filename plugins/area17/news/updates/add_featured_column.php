<?php namespace Area17\News\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class AddFeaturedColumn extends Migration
{
    public function up()
    {
        Schema::table('area17_news_posts', function ($table) {
            $table->boolean('is_featured')->default(false);
        });
    }

    public function down()
    {
      Schema::table('area17_news_posts', function ($table) {
          $table->dropColumn('is_featured');
      });
    }
}
