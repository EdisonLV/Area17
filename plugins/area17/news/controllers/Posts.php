<?php namespace Area17\News\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Posts Back-end Controller
 */
class Posts extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController',
        'Backend.Behaviors.ReorderController',
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Area17.News', 'news', 'posts');
    }
}
