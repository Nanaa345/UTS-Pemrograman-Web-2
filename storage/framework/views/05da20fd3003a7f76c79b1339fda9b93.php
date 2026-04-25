<?php $__env->startSection('content'); ?>
<div class="card shadow">
    <div class="card-header bg-primary text-white"><h5>Tambah Jurusan</h5></div>
    <div class="card-body">
        <form action="<?php echo e(route('jurusan.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label class="form-label">Nama Jurusan</label>
                <input type="text" name="nama_jurusan" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Akreditasi</label>
                <select name="akreditasi" class="form-select" required>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="Unggul">Unggul</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?php echo e(route('jurusan.index')); ?>" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/jo/Documents/Code/UTS-Pemrograman-Web-2/resources/views/jurusan/create.blade.php ENDPATH**/ ?>