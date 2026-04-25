<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-between align-items-center mb-3">
    <h3>Daftar Matakuliah</h3>
    <a href="<?php echo e(route('matakuliah.create')); ?>" class="btn btn-info text-white">Tambah Matakuliah</a>
</div>

<div class="card shadow-sm">
    <div class="card-body">
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Nama Matakuliah</th>
                    <th>SKS</th>
                    <th>Jurusan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $matakuliahs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($mk->nama_matakuliah); ?></td>
                    <td><?php echo e($mk->sks); ?></td>
                    <td><?php echo e($mk->jurusan->nama_jurusan); ?></td>
                    <td>
                        <a href="<?php echo e(route('matakuliah.edit', $mk->id_matakuliah)); ?>" class="btn btn-sm btn-warning">Edit</a>
                        <form action="<?php echo e(route('matakuliah.destroy', $mk->id_matakuliah)); ?>" method="POST" class="d-inline">
                            <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Hapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/jo/Documents/Code/UTS-Pemrograman-Web-2/resources/views/matakuliah/index.blade.php ENDPATH**/ ?>