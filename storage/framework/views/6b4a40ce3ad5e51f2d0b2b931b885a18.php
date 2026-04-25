<?php $__env->startSection('title', 'Dashboard - Sistem Akademik'); ?>

<?php $__env->startSection('content'); ?>
<div class="card shadow-sm">
    <div class="card-header bg-primary text-white">
        <h5 class="mb-0">Dashboard Utama</h5>
    </div>
    <div class="card-body">
        <h4>Selamat Datang, <?php echo e(Auth::user()->name); ?>!</h4>
        <p class="text-muted mb-4">Silakan pilih menu di bawah ini untuk mengelola data akademik.</p>

        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="card border-primary h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title">Data Jurusan</h5>
                        <p class="card-text">Kelola data program studi.</p>
                        <a href="<?php echo e(route('jurusan.index')); ?>" class="btn btn-outline-primary">Buka Menu</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card border-success h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title">Data Mahasiswa</h5>
                        <p class="card-text">Kelola biodata mahasiswa.</p>
                        <a href="<?php echo e(route('mahasiswa.index')); ?>" class="btn btn-outline-success">Buka Menu</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card border-info h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title">Data Matakuliah</h5>
                        <p class="card-text">Kelola daftar matakuliah.</p>
                        <a href="<?php echo e(route('matakuliah.index')); ?>" class="btn btn-outline-info">Buka Menu</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/jo/Documents/Code/UTS-Pemrograman-Web-2/resources/views/dashboard.blade.php ENDPATH**/ ?>