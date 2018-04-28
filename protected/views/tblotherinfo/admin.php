<?php
$this->breadcrumbs=array(
	'Tblotherinfos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Tblotherinfo','url'=>array('index')),
	array('label'=>'Create Tblotherinfo','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('tblotherinfo-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Tblotherinfos</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'tblotherinfo-grid',
	'type'=>'striped bordered condensed',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		array(
			'name'=>'profileid',
			'filter'=>CHtml::listData(Tblprofile::model()->findAll(), 'id', 'fullname'),
			'value'=>'Tblprofile::Model()->FindByPk($data->profileid)->fullname',
		),
		// 'profiletable.fullname',
		// 'categorytable.category',
		array(
			'name'=>'category',
			'filter'=>CHtml::listData(Category::model()->findAll(), 'id', 'category'),
			'value'=>'Category::Model()->FindByPk($data->category)->category',
		),
		'notes',
		'dateentered',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
