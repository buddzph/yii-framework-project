<?php
$this->breadcrumbs=array(
	'Tblprofiles'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tblprofile','url'=>array('index')),
	array('label'=>'Create Tblprofile','url'=>array('create')),
	array('label'=>'View Tblprofile','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Tblprofile','url'=>array('admin')),
);
?>

<h1>Update Tblprofile <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>