<?php
$this->breadcrumbs=array(
	'Tblprofiles',
);

$this->menu=array(
	array('label'=>'Create Tblprofile','url'=>array('create')),
	array('label'=>'Manage Tblprofile','url'=>array('admin')),
);
?>

<h1>Tblprofiles</h1>

<?php /*$this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
));*/ ?>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
    'type'=>'striped bordered condensed',
    'dataProvider'=>$dataProvider,
    'template'=>"{items}",
    'columns'=>array(
        array('name'=>'id', 'header'=>'#'),
        array('name'=>'fullname', 'header'=>'First name'),
        array('name'=>'email', 'header'=>'Email'),
        array('name'=>'dateentered', 'header'=>'Dateentered'),
        array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
            'htmlOptions'=>array('style'=>'width: 50px'),
        ),
    ),
)); ?>
