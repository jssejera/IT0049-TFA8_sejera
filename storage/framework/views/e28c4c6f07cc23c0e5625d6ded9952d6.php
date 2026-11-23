<?php $__env->startSection('content'); ?>
<div class="page-head"><div><p class="eyebrow">Customer records</p><h1>Customers</h1></div><p class="count"><?php echo e($customers->count()); ?> records // database online</p></div>
<div class="toolbar"><span>Manage customer details.</span><a class="button" href="<?php echo e(route('customers.create')); ?>">+ Add customer</a></div>
<div class="table-wrap"><table><thead><tr><th>#</th><th>Full name</th><th>Email</th><th>Phone</th><th>Action</th></tr></thead><tbody>
<?php $__empty_1 = true; $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
<tr><td class="id">#<?php echo e($customer->id); ?></td><td><?php echo e($customer->full_name); ?></td><td><?php echo e($customer->email); ?></td><td><?php echo e($customer->phone ?: '—'); ?></td><td><a href="<?php echo e(route('customers.show', $customer)); ?>">View</a> | <a href="<?php echo e(route('customers.edit', $customer)); ?>">Edit</a> <form style="display:inline" method="POST" action="<?php echo e(route('customers.destroy', $customer)); ?>"><?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?><button type="submit" style="background:none;border:0;color:var(--danger);font:inherit;cursor:pointer" onclick="return confirm('Delete this customer?')">Delete</button></form></td></tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
<tr><td colspan="5">No customers found.</td></tr>
<?php endif; ?>
</tbody></table></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\TFA8_sejera\resources\views/customers/index.blade.php ENDPATH**/ ?>