<?php $__env->startSection('content'); ?>
<div class="page-head"><div><p class="eyebrow">POS user records</p><h1>Users</h1></div><p class="count"><?php echo e($users->count()); ?> records // database online</p></div>
<div class="toolbar"><span>Manage accounts and profile images.</span><a class="button" href="<?php echo e(route('users.create')); ?>">+ Add user</a></div>
<div class="table-wrap"><table><thead><tr><th>#</th><th>Avatar</th><th>Username</th><th>Full name</th><th>Action</th></tr></thead><tbody>
<?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
<tr><td class="id">#<?php echo e($user->id); ?></td><td><?php if($user->avatar): ?><img class="avatar" src="<?php echo e(asset('storage/'.$user->avatar)); ?>" alt="Avatar of <?php echo e($user->full_name); ?>"><?php else: ?><span class="avatar-placeholder"><?php echo e(strtoupper(substr($user->full_name, 0, 1))); ?></span><?php endif; ?></td><td><?php echo e($user->username); ?></td><td><?php echo e($user->full_name); ?></td><td><a href="<?php echo e(route('users.show', $user)); ?>">View</a> | <a href="<?php echo e(route('users.edit', $user)); ?>">Edit</a> <form style="display:inline" method="POST" action="<?php echo e(route('users.destroy', $user)); ?>"><?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?><button type="submit" style="background:none;border:0;color:var(--danger);font:inherit;cursor:pointer" onclick="return confirm('Delete this user?')">Delete</button></form></td></tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
<tr><td colspan="5">No users found.</td></tr>
<?php endif; ?>
</tbody></table></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\TFA8_sejera\resources\views/users/index.blade.php ENDPATH**/ ?>