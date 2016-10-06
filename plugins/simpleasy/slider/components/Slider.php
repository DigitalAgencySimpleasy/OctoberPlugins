<?php namespace Simpleasy\Slider\Components;

use Cms\Classes\ComponentBase;
use Simpleasy\Slider\Models\Slide;

class Slider extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Слайдер',
            'description' => 'Слайдер для всего на странице :)'
        ];
    }

    public function defineProperties()
    {
        return [
            'layout' => [
                'title'         => 'Вид слайдера',
                'description'   => 'Выбор отображения слайдера',
                'type'          => 'dropdown',
                'options'       => ['half' => 'половина экрана', 'fullside' => 'по всей ширине экрана', 'fullscreen' => 'на полный экран', 'frame' => 'ограничен рамками контента'],
                'default'       => 'fullside',
            ]
        ];
    }

    public function getSlides()
    {
        $layout = $this->property('layout');
        $slides = Slide::orderBy('id', 'asc')->get();
        return ['layout' => $layout, 'slides' => $slides];
    }

}