<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\mdycompany */

$this->title = 'Create Mdycompany';
$this->params['breadcrumbs'][] = ['label' => 'Mdycompanies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mdycompany-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
