<?php $__env->startSection('content'); ?>
<div class="card shadow">
    <div class="card-header bg-info text-white">
        <h5 class="mb-0">Tambah Data Matakuliah</h5>
    </div>
    <div class="card-body">
        <form action="<?php echo e(route('matakuliah.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            
            <div class="mb-3">
                <label class="form-label">Nama Matakuliah</label>
                <input type="text" name="nama_matakuliah" class="form-control" placeholder="Contoh: Pemrograman Web 2" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Jumlah SKS</label>
                <input type="number" name="sks" class="form-control" placeholder="Contoh: 3" min="1" max="6" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Pilih Jurusan</label>
                <select name="id_jurusan" class="form-select" required>
                    <option value="">-- Pilih Jurusan --</option>
                    <?php $__currentLoopData = $jurusans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $j): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($j->id_jurusan); ?>"><?php echo e($j->nama_jurusan); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div class="mt-4">
                <button type="submit" class="btn btn-info text-white">Simpan Data</button>
                <a href="<?php echo e(route('matakuliah.index')); ?>" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/jo/Documents/Code/UTS-Pemrograman-Web-2/resources/views/matakuliah/create.blade.php ENDPATH**/ ?>