<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'username',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'fullname',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'email',array('class'=>'span5','maxlength'=>100)); ?>

	<!--?php echo $form->textFieldRow($model,'dateentered',array('class'=>'span5')); ?-->

	<?php
	echo $form->labelEx($model, 'dateentered');
	$this->widget('zii.widgets.jui.CJuiDatePicker',
		array(
			'attribute'=>'dateentered',
			'name'=>'dateentered',
			'value'=>$model->dateentered,
			'model'=>$model,
			'options'=>array(
				'showAnim'=>'slide',
				'showButtonPanel'=>true,
				'dateFormat'=>'yy-mm-dd',
			),
			'htmlOptions'=>array('style'=>''),
		)	
	);
	?>


	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
