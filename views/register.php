<?php /** @var $model \App\Models\User */?>

<h1>Register</h1>
<?php $form = \App\Core\Form\Form::begin('', 'POST') ?>
    <div class="row">
        <div class="col">
            <?php echo $form->field($model,'firstname') ?>
        </div>
        <div class="col">
            <?php echo $form->field($model,'lastname') ?>
        </div>
    </div>

    <?php echo $form->field($model,'email') ?>
    <?php echo $form->field($model,'password')->passwordField() ?>
    <?php echo $form->field($model,'passwordConfirmation')->passwordField() ?>

    <button type="submit" class="btn btn-primary">Submit</button>

<?php \App\Core\Form\Form::end() ?>