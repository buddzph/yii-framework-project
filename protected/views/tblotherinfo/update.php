<?php
$this->breadcrumbs=array(
	'Tblotherinfos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tblotherinfo','url'=>array('index')),
	array('label'=>'Create Tblotherinfo','url'=>array('create')),
	array('label'=>'View Tblotherinfo','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Tblotherinfo','url'=>array('admin')),
);
?>

<h1>Update Tblotherinfo <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>