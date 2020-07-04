<?php

namespace App\Http\Controllers;

// We use PagesController to handle calls to static pages
class PagesController extends Controller {

    public function getIndex(){
        return view('index');
    }

    public function getWebDesign(){
        return view('web-design');
    }

    public function getWork(){
        return view('work');
    }

    public function getPortfolio(){
        return view('portfolio');
    }
}
?>