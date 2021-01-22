<h1>Create an account</h1>
<?php $form = app\core\form\Form::begin('', 'post') ?>
    <?php echo $form->field($model,'firstname')?>
    <?php echo $form->field($model,'lastname')?>
    <?php echo $form->field($model,'email')?>
    <?php echo $form->field($model,'password')?>
    <?php echo $form->field($model,'confirmPassword')?>
    <button type="submit" class="btn btn-primary">Submit</button>
<?php app\core\form\Form::end()?>
<!-- <form action="" method="post">
    <div class="form-group">
        <label>Firstname</label>
        <input type="text" name="firstname" class="form-control<?php echo $model->hasError('firstname') ? ' is-invalid' : '' ?>">
        <div class="invalid-feedback">
            <?php echo $model->getFirstError('firstname') ?>
        </div>
    </div>
    <div class="form-group">
        <label>Lastname</label>
        <input type="text" name="lastname" class="form-control">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control">
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" class="form-control">
    </div>
    <div class="form-group">
        <label>Confirm password</label>
        <input type="password" name="confirmPassword" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form> -->