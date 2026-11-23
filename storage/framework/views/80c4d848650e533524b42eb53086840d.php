<?php $__env->startSection('content'); ?>
<p class="eyebrow">Authentication</p><h1>Create account</h1>
<div class="form-card">
    <?php echo $__env->make('partials.errors', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <form method="POST" action="<?php echo e(route('register')); ?>">
        <?php echo csrf_field(); ?>
        <label for="username">Username</label><input id="username" name="username" value="<?php echo e(old('username')); ?>" required>
        <label for="full_name">Full name</label><input id="full_name" name="full_name" value="<?php echo e(old('full_name')); ?>" required>
        <label for="email">Email address</label><input id="email" type="email" name="email" value="<?php echo e(old('email')); ?>" required>
        <label for="password">Password</label><input id="password" type="password" name="password" required minlength="8">
        <label for="password_confirmation">Confirm password</label><input id="password_confirmation" type="password" name="password_confirmation" required minlength="8">
        <div class="actions"><button class="button" type="submit">Register</button><a class="button secondary" href="<?php echo e(route('login')); ?>">Sign in</a></div>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\TFA8_sejera\resources\views/auth/register.blade.php ENDPATH**/ ?>