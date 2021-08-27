<?php /** @var $model \App\Models\User */?>

<h1>Login</h1>
<?php $form = \Mosaab\MVC\Form\Form::begin('', 'POST') ?>
    <?php echo $form->field($model,'email') ?>
    <?php echo $form->field($model,'password')->passwordField() ?>
    <button type="submit" class="btn btn-primary">Submit</button>

<?php \Mosaab\MVC\Form\Form::end() ?>