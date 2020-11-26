<?php
/** @var $model \app\models\User */
?>
<h1>Login</h1>


<?php $form = \anup\phpmvc\form\Form::begin('/login', 'post') ?>

<?php echo $form->field($model, 'email') ?>
<?php echo $form->field($model, 'password')->passwordField() ?>

<button type="submit" class="btn btn-primary">Submit</button>

<?php \anup\phpmvc\form\Form::end() ?>
