

<?php $__env->startSection('title', 'Manage Projects'); ?>

<?php $__env->startSection('content'); ?>
<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Manage Projects</h1>
        <a href="<?php echo e(route('projects.create')); ?>" class="btn btn-primary">Add New Project</a>
    </div>

    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Created</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($project->id); ?></td>
                        <td>
                            <img src="<?php echo e(asset('storage/' . $project->image)); ?>" alt="<?php echo e($project->title); ?>" width="100">
                        </td>
                        <td><?php echo e($project->title); ?></td>
                        <td><?php echo e($project->created_at->format('d M Y')); ?></td>
                        <td>
                            <div class="d-flex">
                                <a href="<?php echo e(route('projects.show', $project)); ?>" class="btn btn-sm btn-info me-2">View</a>
                                <a href="<?php echo e(route('projects.edit', $project)); ?>" class="btn btn-sm btn-warning me-2">Edit</a>
                                <form action="<?php echo e(route('projects.destroy', $project)); ?>" method="POST" onsubmit="return confirm('Are you sure?')">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="5" class="text-center">No projects found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH G:\portofolio-app\resources\views/admin/projects/index.blade.php ENDPATH**/ ?>