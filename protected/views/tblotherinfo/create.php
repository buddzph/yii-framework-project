<?php
$this->breadcrumbs=array(
	'Tblotherinfos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tblotherinfo','url'=>array('index')),
	array('label'=>'Manage Tblotherinfo','url'=>array('admin')),
);
?>

<h1>Create Tblotherinfo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>