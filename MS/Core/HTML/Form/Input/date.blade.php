<?php

if(array_key_exists('index', $data))$index=$index+$data['index'];

	if(array_key_exists('ClassData', $data)){
	    	
		if(array_key_exists('form-class-div',$data['ClassData']))$input_class=$data['ClassData']['form-class-div'];

	
	}
?>
<div class="form-group {{ $input_class or 'col-lg-6' }}">
    {{ Form::label($data['name'], $data['lable']) }}
    {{ Form::date($data['name'], $data['value'],['class'=>'form-control','placeholder'=>'Enter '.$data['lable']] ) }}
</div>