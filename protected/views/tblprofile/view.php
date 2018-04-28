<?php
$this->breadcrumbs=array(
	'Tblprofiles'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Tblprofile','url'=>array('index')),
	array('label'=>'Create Tblprofile','url'=>array('create')),
	array('label'=>'Update Tblprofile','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Tblprofile','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tblprofile','url'=>array('admin')),
);
?>

<h1>View Tblprofile #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'password',
		'fullname',
		'email',
		'dateentered',
	),
)); ?>
