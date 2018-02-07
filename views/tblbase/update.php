<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tblbase */

$this->title = 'Update Tblbase: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Tblbases', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Derivative_CAP_ID, 'url' => ['view', 'id' => $model->Derivative_CAP_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tblbase-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
