<?php

namespace App\Http\Controllers;

// We use PagesController to handle calls to static pages
class PagesController extends Controller {

    public function getIndex(){
        return view('index');
    }

    public function getWork(){
        return view('work');
    }

    public function getWebPortfolio(){
        return view('work');
    }
    public function getDataPortfolio(){
        return view('work');
    }
}
?>