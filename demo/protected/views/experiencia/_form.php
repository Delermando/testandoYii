<?php
/* @var $this ExperienciaController */
/* @var $model Experiencia */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'experiencia-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'empresa'); ?>
		<?php echo $form->textField($model,'empresa',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'empresa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'inicio'); ?>
		<?php 
                    $this->widget('zii.widgets.jui.CJuiDatePicker',
                        array(
                            'model'=> $model,
                            'attribute' => 'inicio',
                            'language' => 'pt',
                            'options' => array(
                                'dateFormat' => 'yy-mm-dd',
                                'constraintInput' => 'false',
                                'duration' => 'fast',
                                'showAnim' => 'slide'
                            )
                        )
                    );
                ?>  
		<?php echo $form->error($model,'inicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fim'); ?>
		<?php 
                    $this->widget('zii.widgets.jui.CJuiDatePicker',
                        array(
                            'model'=> $model,
                            'attribute' => 'inicio',
                            'language' => 'pt',
                            'options' => array(
                                'dateFormat' => 'yy-mm-dd',
                                'constraintInput' => 'false',
                                'duration' => 'fast',
                                'showAnim' => 'slide'
                            )
                        )
                    );
                ?>
		<?php echo $form->error($model,'fim'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idUsuario'); ?>
		<?php echo $form->dropDownList($model,'idUsuario', CHtml::listData(Usuarios::model()->findAll("estado = 1"), 'id', 'nome')); ?>
		<?php echo $form->error($model,'idUsuario'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->