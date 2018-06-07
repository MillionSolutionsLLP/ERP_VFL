<?php
namespace B\PM;

class Controller extends \App\Http\Controllers\Controller
{
	public function __construct(){
     

        //$this->middleware('groupname')->except(['method_name']);
    }
	public function index(){


		$data=[];
		//dd(Base::migrate([['id'=>0]]));
		return view('PM.V.panel_data')->with('data',$data);
		
	}


		public function indexData(){


		$data=[];
		return view('PM.V.Object.MasterDetails')->with('data',$data);
		
	}




		public function addProduct(){


		$id=0;
		$build=new \MS\Core\Helper\Builder (__NAMESPACE__);

		$build->title("Add Product")->content($id)->action("addProduct");

		$build->btn([
								'action'=>"\\B\\PM\\Controller@indexData",
								'color'=>"btn-info",
								'icon'=>"fa fa-fast-backward",
								'text'=>"Back"
							]);
		$build->btn([
								//'action'=>"\\B\\MAS\\Controller@addCCPost",
								'color'=>"btn-success",
								'icon'=>"fa fa-floppy-o",
								'text'=>"Save"
							]);

		return $build->view();

	}


	public function addProductPost(R\Product $r){
				$status=200;
			$tableId=0;
			$rData=$r->all();
			$model=new Model($tableId);
			$model->MS_add($rData,$tableId);	
			$array=[
	 		'msg'=>"OK",
	 		'redirectData'=>action('\B\PM\Controller@indexData'),
			];

	 		$json=collect($array)->toJson();
	 		return response()->json($array, $status);


	}


		public function editProduct($UniqId){




			$id=0;
			$model=new Model($id);
			$build=new \MS\Core\Helper\Builder (__NAMESPACE__);
			//dd($model->where('UniqId',\MS\Core\Helper\Comman::de4url($UniqId))->get()->first()->toArray());
			
			$nullCheck=$model->where('UniqId',\MS\Core\Helper\Comman::de4url($UniqId))->get()->first();
			//dd($nullCheck);
			if($nullCheck =! null ){
				$data=$model->where('UniqId',\MS\Core\Helper\Comman::de4url($UniqId))->get()->first()->toArray();
			}else{
				$data=[];
			}
			
			
			//dd($data);

			$build->title("Edit Product")->content($id,$data)->action("editProductPost");

			$build->btn([
									'action'=>"\\B\\PM\\Controller@indexData",
									'color'=>"btn-info",
									'icon'=>"fa fa-fast-backward",
									'text'=>"Back"
								]);
			$build->btn([
									//'action'=>"\\B\\MAS\\Controller@editCompany",
									'color'=>"btn-success",
									'icon'=>"fa fa-floppy-o",
									'text'=>"Save"
								]);

			return $build->view();

	}


	public function editProductPost(R\Product $r){

		$status=200;
			$rData=$r->all();

			//dd($rData);

			$tableId=0;
			$model=new Model($tableId);
			$model->MS_update($rData,$tableId);	

			



			//return ;
			$array=[
	 		'msg'=>"OK",
	 	//	'redirect'=>action('\B\Users\Controller@login_form_otp'),
	 		'redirectData'=>action('\B\PM\Controller@indexData'),

	 		// 	'db Password'=>$psw,
	 		// 'in Password'=>$input['Password']
	 		];
	 		$json=collect($array)->toJson();
	 		return response()->json($array, $status);
		
	}


	public function deleteProduct($UniqId){

			$status=200;
			$tableId=0;
			$rData=['UniqId'=>\MS\Core\Helper\Comman::de4url($UniqId)];
			$model=new Model($tableId);
			$model->MS_delete($rData,$tableId);	
			return  $this->indexData();

	}



}