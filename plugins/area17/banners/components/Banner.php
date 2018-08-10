<?php namespace Area17\Banners\Components;

use Cms\Classes\ComponentBase;
use Area17\Banners\Models\Banner as BannerModel;

class Banner extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Banner Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
      return [
          'banner' => [
              'title'   => 'Banners',
              'type'    => 'dropdown',
              'required' => true
          ]
      ];
    }

    public function getBannerOptions()
    {
        return BannerModel::lists('title', 'id');
    }

    public function onRun()
    {
      $this->page['banner'] = BannerModel::find($this->property('banner'));
    }
}
