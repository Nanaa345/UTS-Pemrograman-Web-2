<?php $__env->startSection('content'); ?>
<div class="card shadow">
    <div class="card-header bg-warning text-dark">
        <h5 class="mb-0">Edit Data Jurusan</h5>
    </div>
    <div class="card-body">
        <form action="<?php echo e(route('jurusan.update', $jurusan->id_jurusan)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            
            <div class="mb-3">
                <label class="form-label">Nama Jurusan</label>
                <input type="text" name="nama_jurusan" class="form-control" value="<?php echo e($jurusan->nama_jurusan); ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Akreditasi</label>
                <select name="akreditasi" class="form-select" required>
                    <option value="A" <?php echo e($jurusan->akreditasi == 'A' ? 'selected' : ''); ?>>A</option>
                    <option value="B" <?php echo e($jurusan->akreditasi == 'B' ? 'selected' : ''); ?>>B</option>
                    <option value="C" <?php echo e($jurusan->akreditasi == 'C' ? 'selected' : ''); ?>>C</option>
                    <option value="Unggul" <?php echo e($jurusan->akreditasi == 'Unggul' ? 'selected' : ''); ?>>Unggul</option>
                </select>
            </div>
            
            <div class="mt-4">
                <button type="submit" class="btn btn-warning">Update Data</button>
                <a href="<?php echo e(route('jurusan.index')); ?>" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/jo/Documents/Code/UTS-Pemrograman-Web-2/resources/views/jurusan/edit.blade.php ENDPATH**/ ?>