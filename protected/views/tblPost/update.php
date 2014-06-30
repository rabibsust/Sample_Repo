<?php
/* @var $this TblPostController */
/* @var $model TblPost */

$this->breadcrumbs=array(
	'Table Posts'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TblPost', 'url'=>array('index')),
	array('label'=>'Create TblPost', 'url'=>array('create')),
	array('label'=>'View TblPost', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TblPost', 'url'=>array('admin')),
);
?>

<h1>Update Table Post <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>