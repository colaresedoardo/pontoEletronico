<?php
  $error=[];
  $message=null;
    if($exception){
        $message =[
            'type'=>'error',
            'message'=>$exception->getMessage()
        ];
        if(get_class($exception)==='ValidationException'){
            $error = $exception->getErrors();
        }
    }


$alertType="danger";
if($message['type']==='error'){
    $alertType='danger';
}else{
    $alertType='success';
}

?>

<?php  if ($message!=null): ?>
<div role="alert" class="my-3 alert alert-<?=$alertType?>" >
        <?=$message['message']; ?>
</div>

<?php endif ?>