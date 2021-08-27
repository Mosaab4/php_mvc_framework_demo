<?php

use App\Core\Form\Form;
use App\Core\Form\TextareaField;
use App\Models\ContactForm;

$this->title = 'contact';
?>

<?php /** @var $model ContactForm */ ?>

<?php $form = Form::begin('', 'post') ?>

<?php echo $form->field($model, 'subject') ?>
<?php echo $form->field($model, 'email') ?>
<?php echo new TextareaField($model, 'body') ?>

<button class="btn btn-primary" type="submit">Submit</button>

<?php Form::end(); ?>
