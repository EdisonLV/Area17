<?php namespace Area17\News\Components;

use Cms\Classes\ComponentBase;
use Area17\News\Models\Post;

class Posts extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Posts Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function onRun()
    {
      $this->page['posts'] = Post::featured()->take(7)->get();
    }
}
