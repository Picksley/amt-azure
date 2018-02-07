<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tblbase */

$this->title = 'Create Tblbase';
$this->params['breadcrumbs'][] = ['label' => 'Tblbases', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tblbase-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
