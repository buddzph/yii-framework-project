<?php
$this->breadcrumbs=array(
	'Tblotherinfos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Tblotherinfo','url'=>array('index')),
	array('label'=>'Create Tblotherinfo','url'=>array('create')),
	array('label'=>'Update Tblotherinfo','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Tblotherinfo','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tblotherinfo','url'=>array('admin')),
);
?>

<h1>View Tblotherinfo #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'profiletable.fullname',
		'categorytable.category',
		'notes',
		'dateentered',
	),
)); ?>
