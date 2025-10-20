

<?php $__env->startSection('title', 'Pesan Masuk'); ?>

<?php $__env->startSection('content'); ?>
<div class="container" style="padding-top: 120px; padding-bottom: 50px;">

   <div class="container" style="padding-top: 120px; padding-bottom: 50px;">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="fw-bold">Pesan Masuk 📥</h1>
    </div>
  
    <div class="card border-0 shadow-lg rounded-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Subjek</th>
                            <th scope="col">Diterima</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr style="transition: all 0.2s;">
                                <th scope="row"><?php echo e($loop->iteration); ?></th>
                                <td><?php echo e($message->name); ?></td>
                                <td><?php echo e($message->email); ?></td>
                                <td><?php echo e(Str::limit($message->subject, 30)); ?></td>
                                <td><span class="badge bg-success"><?php echo e($message->created_at->format('d M Y, H:i')); ?></span></td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-gradient-primary" data-bs-toggle="modal" data-bs-target="#messageModal<?php echo e($message->id); ?>">
                                        <i class="bi bi-envelope-open"></i> Lihat
                                    </button>
                                </td>
                            </tr>

                            <div class="modal fade" id="messageModal<?php echo e($message->id); ?>" tabindex="-1" aria-labelledby="messageModalLabel<?php echo e($message->id); ?>" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content border-0 shadow-lg rounded-4">
                                        <div class="modal-header bg-gradient-primary text-white">
                                            <h5 class="modal-title" id="messageModalLabel<?php echo e($message->id); ?>">Detail Pesan dari: <?php echo e($message->name); ?></h5>
                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p><strong>Email:</strong> <?php echo e($message->email); ?></p>
                                            <p><strong>Subjek:</strong> <?php echo e($message->subject); ?></p>
                                            <hr>
                                            <p><?php echo e($message->message); ?></p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-gradient-secondary" data-bs-dismiss="modal">Tutup</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="6" class="text-center text-muted">Belum ada pesan yang masuk.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<style>

.table-hover tbody tr:hover {
    background-color: #ffe6f0;
    cursor: pointer;
    transform: translateY(-1px);
    transition: all 0.2s;
}

.btn-gradient-primary {
    background: linear-gradient(90deg, #FF758C, #FF7EB3);
    color: white;
    border: none;
    transition: transform 0.2s, box-shadow 0.2s;
}
.btn-gradient-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 15px rgba(255, 114, 135, 0.3);
}

.btn-gradient-secondary {
    background: linear-gradient(90deg, #6c757d, #adb5bd);
    color: white;
    border: none;
}
</style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH G:\portofolio-app\resources\views/admin/messages/index.blade.php ENDPATH**/ ?>