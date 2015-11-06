<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{

    public function __construct()
    {
        //$this->middleware('demo');
    }

    public function about()
    {
    	//using with
    	$name = "Wan Zulsarhan";
    	
    	//return view('pages.about')->with('name',$name);
    	
    	/*
    	return view('pages.about')
    	->with([
    		'first'=>'Wan',
    		'last'=>'Zulsarhan'
    		]);
    	*/
		
		//using array of data as second argument
		$data = [];
		$data['first'] = 'Wann';
		$data['last'] = 'Zuzuz';
		//return view('pages.about',$data);

		//using compact
		//$first = 'Wan';
		//$last = 21;
		$people = ['Wan Zulsarhan', 'Asyraf Samsudin', 'Ibtisam Ostham', 'Edward'];
		return view('pages.about',compact('people'));
    }

    public function contact()
    {
    	$first = 'Zulsarhan';
    	return view('pages.contact',compact('first'));
    }
}
