<?php
$this->breadcrumbs=array(
	'Tblotherinfos',
);

$this->menu=array(
	array('label'=>'Create Tblotherinfo','url'=>array('create')),
	array('label'=>'Manage Tblotherinfo','url'=>array('admin')),
);
?>

<h1>Tblotherinfos</h1>

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
        array('name'=>'profiletable.fullname', 'header'=>'First name'),
        array('name'=>'categorytable.category', 'header'=>'Category'),
        array('name'=>'notes', 'header'=>'Notes'),
        array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
            'htmlOptions'=>array('style'=>'width: 50px'),
        ),
    ),
)); ?>