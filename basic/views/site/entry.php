<?php
/**
 * Created by PhpStorm.
 * User: shixi_jianjian
 * Date: 2017/8/30
 * Time: 13:53
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'name')->label('名字') ?>
    <?= $form->field($model, 'email')->label('邮箱') ?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>

