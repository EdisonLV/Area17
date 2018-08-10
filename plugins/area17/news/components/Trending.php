<?php namespace Area17\News\Components;

use Cms\Classes\ComponentBase;
use Area17\News\Models\Post;

class Trending extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Trending Posts Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function onRun()
    {
      $this->page['posts'] = Post::take(4)->with('author')->latest()->get();
    }
}
