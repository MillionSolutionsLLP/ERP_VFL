	<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  



  <div class="panel panel-default">
      



    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title  "  >




         <div class="btn-group ms-btn-full-width" role="group" aria-label="...">
          <span class="btn btn-default collapsed ms-btn-full-width-main" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne"><i class="fa fa-file-text-o" aria-hidden="true"></i> Bills</span>

           <span class="pull-right ms-mod-btn btn btn-default  ms-btn-full-width-side" ms-live-link="{{ action('\B\SM\Controller@indexData') }}">
            
            <i class="fa fa-home" aria-hidden="true"></i>


          </span> 
        </div>
       
      </h4>

     
    </div>
    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body list-group">
       
		  <a href="#" class="list-group-item ms-mod-btn" ms-live-link="{{ action('\B\SM\Controller@addBill') }}"><span class="badge"> <i class="fa fa-plus" aria-hidden="true"></i></span> Genrate Bill </a>

      <a href="#" class="list-group-item ms-mod-btn" ms-live-link="{{ action('\B\SM\Controller@addBillforAdmin') }}"><span class="badge"> <i class="fa fa-plus" aria-hidden="true"></i></span> Genrate Admin Bill </a>
      <a href="#" class="list-group-item ms-mod-btn" ms-live-link=""> <span class="badge"><i class="fa fa-pencil" aria-hidden="true"></i></span> Edit Bill</a>

      <a href="#" class="list-group-item ms-mod-btn" ms-live-link=""> <span class="badge"><i class="fa fa-print" aria-hidden="true"></i></span> Print Bill</a>



  
  

    


      </div>
    </div>
  </div>








</div>