<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'tblotherinfo-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<!--<?php echo $form->textFieldRow($model,'profileid',array('class'=>'span5')); ?>-->

	<?php
	echo $form->dropDownList($model, 'profileid',
	    CHtml::listData( Tblprofile::model()->findAll(), 'id', 'fullname' )
	);
	?>

	<!--<?php echo $form->textFieldRow($model,'category',array('class'=>'span5')); ?>

	<?php echo $form->dropDownList($model,'category', array('test1'=>'Test 1','test2'=>'Test 2'), array('class'=>'span5')); ?>-->

	<?php
	echo $form->dropDownList($model, 'category',
	    CHtml::listData( Category::model()->findAll(), 'id', 'category' )
	);
	?>

	<?php echo $form->textAreaRow($model,'notes',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<!--?php echo $form->textFieldRow($model,'dateentered',array('class'=>'span5')); ?-->

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
