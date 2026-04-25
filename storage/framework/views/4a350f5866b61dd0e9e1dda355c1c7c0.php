<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-between align-items-center mb-3">
    <h3>Daftar Mahasiswa</h3>
    <a href="<?php echo e(route('mahasiswa.create')); ?>" class="btn btn-primary">Tambah Mahasiswa</a>
</div>

<div class="card shadow-sm">
    <div class="card-body">
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Jurusan</th> <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $mahasiswas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mhs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($mhs->nim); ?></td>
                    <td><?php echo e($mhs->nama); ?></td>
                    <td>
                        <span class="badge bg-info text-dark"><?php echo e($mhs->jurusan->nama_jurusan); ?></span>
                    </td>
                    <td>
                        <a href="<?php echo e(route('mahasiswa.edit', $mhs->id_mahasiswa)); ?>" class="btn btn-sm btn-warning">Edit</a>
                        <form action="<?php echo e(route('mahasiswa.destroy', $mhs->id_mahasiswa)); ?>" method="POST" class="d-inline">
                            <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Hapus mahasiswa ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="4" class="text-center">Belum ada data mahasiswa.</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/jo/Documents/Code/UTS-Pemrograman-Web-2/resources/views/mahasiswa/index.blade.php ENDPATH**/ ?>