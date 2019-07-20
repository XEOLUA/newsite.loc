<?php

namespace App\Http\Controllers;

use App\Page;
use App\Topmenu;
use App\User;
use Illuminate\Support\Facades\Auth;


class IndexController extends Controller
{
    //
    protected $pages;
    protected $topmenus;

    public function __construct(){
        $this->topmenus = Topmenu::all();
        $this->pages = Page::whereIn('page_id',$this->topmenus)->get();
    }

    public function index() {
      return view('layouts.master')->with(['pages'=>$this->pages]);
    }


    //Метод відображення шаблону master із передаванням id-сторінки навігації та колекції сторінок pages
    public  function  show($id){
        $page=Page::all()->where('page_id',$id)->first();
      return view('layouts.master')->with(['page'=>$page, 'pages'=>$this->pages]);
    }


}
