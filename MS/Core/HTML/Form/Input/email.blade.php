<?php

if(array_key_exists('index', $data))$index=$index+$data['index'];

?>
<div class="form-group col-lg-6">
    {{ Form::label($data['name'], $data['lable']) }}
    {{ Form::email($data['name'], $data['value'],['class'=>'form-control','tabindex'=>$index,'placeholder'=>'Enter '.$data['lable']] ) }}
</div>