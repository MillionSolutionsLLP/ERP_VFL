<?php
namespace B\SM;

class Controller extends \App\Http\Controllers\Controller
{
	public function __construct(){
     

        //$this->middleware('groupname')->except(['method_name']);
    }
	public function index(){




			$data=[

			

			];
		return view('SM.V.panel_data')->with('data',$data);
		
		
	}


	public function indexData(){




			$data=[

			

			];
		return view('SM.V.Object.MasterDetails')->with('data',$data);
		
		
	}

}