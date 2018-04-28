<?php
$this->breadcrumbs=array(
	'Tblprofiles'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tblprofile','url'=>array('index')),
	array('label'=>'Manage Tblprofile','url'=>array('admin')),
);
?>

<h1>Create Tblprofile</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>