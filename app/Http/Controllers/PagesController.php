<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //


    public function index() {

        $title="Welcome to the Index Page of Laravel";
        return view ('pages/index', compact('title'));


    }


    public function about() {

        $title="About us";

        return view('pages.about', compact('title'));

    }

    public function welcome() {

    return view('welcome');

}


    public function services() {


        $data= array(

            'title' =>'Services',
            'services' =>['Web design', 'Programming', 'Audiology']


        );

        return view('pages.services')->with($data);

    }


}
