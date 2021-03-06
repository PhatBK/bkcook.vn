<?php $__env->startSection('content'); ?>

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
            <div class="row">
                        <?php if(session('thongbao')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('thongbao')); ?>

                        </div>
                        <?php endif; ?>
                        <?php if(session('thongbaoloi')): ?>
                        <div class="alert alert-danger">
                            <?php echo e(session('thongbaoloi')); ?>


                        </div>
                        <?php endif; ?>
                    </div>
            <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thể Loại
                    <small>Danh sách</small>
                </h1>
            </div>
            <div class="col-lg-12">
                <?php if(Session::has('themthanhcong')): ?>
                <div class="alert alert-success"><strong><?php echo e(Session::get('themthanhcong')); ?></strong></div>
                <?php elseif(Session::has('suathanhcong')): ?>
                <div class="alert alert-success"><strong><?php echo e(Session::get('suathanhcong')); ?></strong></div>
                <?php endif; ?>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example" style="table-layout:fixed;">
                <thead>
                    <tr align="center">
                        <th style="overflow:hidden;" title="ID">ID</th>
                        <th style="overflow:hidden;" title="Tên">Tên</th>
                        <th style="overflow:hidden;" title="Ảnh đại diện">Ảnh</th>
                        <th style="overflow:hidden;" title="Tên">Calos</th>
                        <th style="overflow:hidden;" title="Tên">Carbon</th>
                        <th style="overflow:hidden;" title="Tên">Chất Xơ</th>
                        <th style="overflow:hidden;" title="Tên">Chất Béo</th>
                        <th style="overflow:hidden;" title="Tên">Chất Béo Bão Hòa</th>
                        <th style="overflow:hidden;" title="Tên">Protein</th>
                        <th style="overflow:hidden;" title="Ngày tạo">Ngày tạo</th>
                        <th style="overflow:hidden;" title="Ngày cập nhật">Ngày cập nhật</th>
                        <th style="overflow:hidden;" title="Xoá thể loại">Xoá</th>
                        <th style="overflow:hidden;" title="Sửa thể loại">Sửa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $nguyenlieus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="odd gradeX" align="center">
                        <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;"><?php echo e($nl ->id); ?></td>
                        <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;"  title="<?php echo e($nl->ten); ?>"><?php echo e($nl ->ten); ?></td>
                        <td><img src="<?php echo e($nl->anh); ?>" alt="" width="50px" height="50px"></td>
                        <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;"  title="<?php echo e($nl->calos); ?>"><?php echo e($nl ->calos); ?></td>
                        <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;"  title="<?php echo e($nl->carbon); ?>"><?php echo e($nl ->carbon); ?></td>
                        <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;"  title="<?php echo e($nl->xo); ?>"><?php echo e($nl ->xo); ?></td>
                        <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;"  title="<?php echo e($nl->fat); ?>"><?php echo e($nl ->fat); ?></td>
                        <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;"  title="<?php echo e($nl->fat_baohoa); ?>"><?php echo e($nl ->fat_baohoa); ?></td>
                        <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;"  title="<?php echo e($nl->protein); ?>"><?php echo e($nl ->protein); ?></td>
                        <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;"  title="<?php echo e($nl->created_at); ?>"><?php echo e($nl ->created_at); ?></td>
                        <td style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;"  title="<?php echo e($nl->updated_at); ?>"><?php echo e($nl ->updated_at); ?></td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/nguyenlieu/xoa/<?php echo e($nl ->id); ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?')""> Xóa</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/nguyenlieu/sua/<?php echo e($nl ->id); ?>">Sửa</a></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>