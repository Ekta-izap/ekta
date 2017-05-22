<?php
use Yii\helpers\HTML;
use Yii\widgets\ActiveForm;
?>
<?php
if(Yii::$app->session->hasflash('success'))
{
    echo "done";
}?>
<?php
$form -> ActiveForm ::begin();
?>
<?= $form->field($model,'email');
?>
<?html::submitButton('submit',['class'=>'btn btn-success']);
?>
