<?php

namespace App\Services;
use App\Page;
use App\Topmenu;

class Navigation
{
    //Метод для видбору сторінок для топ меню
    public function show(){
        $topmenus = Topmenu::all();
        $pages = Page::whereIn('page_id',$topmenus)->get();
        return $pages;
    }
}
