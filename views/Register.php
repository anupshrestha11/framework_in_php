<?php
/** @var $model \app\models\User */
?>
<h1>Register</h1>


<?php $form = \anup\phpmvc\form\Form::begin('/register', 'post') ?>

    <div class="row">
        <div class="col">
            <?php echo $form->field($model, 'firstName')  ?>
        </div>
        <div class="col">
            <?php echo $form->field($model, 'lastName')  ?>
        </div>
    </div>

    <?php echo $form->field($model, 'email')  ?>
    <?php echo $form->field($model, 'password')->passwordField()  ?>
    <?php echo $form->field($model, 'confirmPassword')->passwordField()  ?>
    <button type="submit" class="btn btn-primary">Submit</button>

<?php  \anup\phpmvc\form\Form::end()?>
