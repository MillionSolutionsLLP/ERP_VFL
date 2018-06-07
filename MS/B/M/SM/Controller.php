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


	public function addBill(){

		$id=1;
		$build=new \MS\Core\Helper\Builder (__NAMESPACE__);

		$build->title("Genrate Bill")->content($id)->action("addBillPost")->btn([
								'action'=>"\\B\\BM\\Controller@indexData",
								'color'=>"btn-info",
								'icon'=>"fa fa-fast-backward",
								'text'=>"Back"
							])->btn([
								//'action'=>"\\B\\MAS\\Controller@addCCPost",
								'color'=>"btn-success",
								'icon'=>"fa fa-floppy-o",
								'text'=>"Save"
							])->js(["BM.J.booking"])->extraFrom(2,['title'=>'Product Details','multiple'=>true,'multipleAdd'=>true]);


		return $build->view();
	}



	public function addBillforAdmin(){

		$id=4;
		$build=new \MS\Core\Helper\Builder (__NAMESPACE__);
		//dd(\Carbon::now()->daysInMonth);

$date=[];
		for ($i=0; $i < \Carbon::now()->daysInMonth + 1; $i++) { 
			$date[]=	['ProductDate'=>\Carbon::now()->day($i+1)->toDateString(),"TeaQuantity"=>0,"CoffeeQuantity"=>0];
		}


		$build->title("Genrate Bill")->content($id)->action("addBillPost")->btn([
								'action'=>"\\B\\BM\\Controller@indexData",
								'color'=>"btn-info",
								'icon'=>"fa fa-fast-backward",
								'text'=>"Back"
							])->btn([
								//'action'=>"\\B\\MAS\\Controller@addCCPost",
								'color'=>"btn-success",
								'icon'=>"fa fa-floppy-o",
								'text'=>"Save"
							])->js(["BM.J.booking"])->extraFrom(3,['title'=>'Date wise Details','multiple'=>true,'multipleAdd'=>false,'data'=>$date ]);


		return $build->view();
	}

	public function addBillPost(){}

	

}