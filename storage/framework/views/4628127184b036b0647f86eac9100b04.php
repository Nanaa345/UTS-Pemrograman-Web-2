<?php $__env->startSection('title', 'Data Mahasiswa'); ?>

<?php $__env->startSection('content'); ?>
<div class="card shadow">
    <div class="card-header bg-success text-white">
        <h5 class="mb-0">Tambah Data Mahasiswa</h5>
    </div>
    <div class="card-body">
        <form action="<?php echo e(route('mahasiswa.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label class="form-label">NIM</label>
                <input type="text" name="nim" class="form-control" placeholder="Contoh: 230101" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Nama Lengkap</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukkan nama" required>
            </div>
            
            <div class="mb-3">
                <label class="form-label">Pilih Jurusan</label>
                <select name="id_jurusan" class="form-select" required>
                    <option value="">-- Pilih Jurusan --</option>
                    <?php $__currentLoopData = $jurusans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $j): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($j->id_jurusan); ?>"><?php echo e($j->nama_jurusan); ?> (Akreditasi: <?php echo e($j->akreditasi); ?>)</option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <small class="text-muted">Data ini diambil otomatis dari tabel Jurusan</small>
            </div>

            <div class="mt-4">
                <button type="submit" class="btn btn-success text-white">Simpan Data</button>
                <a href="<?php echo e(route('mahasiswa.index')); ?>" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

    
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/jo/Documents/Code/UTS-Pemrograman-Web-2/resources/views/mahasiswa/create.blade.php ENDPATH**/ ?>