<?php $__env->startSection('content'); ?>
<p class="eyebrow">Authentication</p><h1>Sign in</h1>
<div class="form-card">
    <?php echo $__env->make('partials.errors', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <form method="POST" action="<?php echo e(route('login')); ?>">
        <?php echo csrf_field(); ?>
        <label for="email">Email address</label>
        <input id="email" type="email" name="email" value="<?php echo e(old('email')); ?>" required autofocus>
        <label for="password">Password</label>
        <input id="password" type="password" name="password" required>
        <label><input type="checkbox" name="remember" value="1" style="width:auto"> Remember me</label>
        <div class="actions"><button class="button" type="submit">Sign in</button><a class="button secondary" href="<?php echo e(route('register')); ?>">Register</a></div>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\TFA8_sejera\resources\views/auth/login.blade.php ENDPATH**/ ?>