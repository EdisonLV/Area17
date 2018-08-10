<?php namespace Area17\News\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Authors Back-end Controller
 */
class Authors extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Area17.News', 'news', 'authors');
    }
}
