<?php $__env->startSection('content'); ?>

<form action="" method="POST" enctype="multipart/form-data">
	<input type="hidden" name="_token" value="<?php echo Csrf_Token(); ?>" />
	<div class="form-group">
		<?php
		$idloaitin=$tintuc['idLoaiTin'];
		$kq=App\loaitin::where('id',$idloaitin)->first();
		$idtheloai=$kq->idTheLoai;
		?>
		<label>Chon The Loai</label>
		<select class="form-control" name="theloai" id="theloai">
			<?php $__currentLoopData = $theloai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<option
				<?php if($tl['id']==$idtheloai): ?>
				<?php echo "selected"; ?>

				<?php endif; ?>
				>
				<?php echo $tl['Ten']; ?>

				</option>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

		</select>
	</div>

	<div class="form-group">
		<label>Chon Loai Tin</label>
		<select class="form-control" name="loaitin" id="loaitin">
			<?php $__currentLoopData = $loaitin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<option value="<?php echo e($lt['id']); ?>"
				<?php if($lt['id']==$idloaitin): ?>
				<?php echo "selected"; ?>

				<?php endif; ?>
				>
				<?php echo $lt['Ten']; ?>

				</option>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</select>
</div>
	<div class="form-group">
		<label>Tieu De</label>
		<input value="<?php echo $tintuc['TieuDe']; ?>" class="form-control" name="txtTieuDe" placeholder="Please Enter Title" />
	</div>

	<div class="form-group">
		<label>Noi dung Tom Tat</label>
		<textarea id="tomtat" class="form-control ckeditor" name="txtTomTat" rows="2"><?php echo $tintuc['TomTat']; ?></textarea>
	</div>

	<div class="form-group">
		<label>Noi dung </label>
		<textarea id="noidung" class="form-control ckeditor" name="txtNoiDung" rows="3"><?php echo $tintuc['NoiDung']; ?></textarea>
	</div>

	<div class="form-group">
		<label>Hinh anh </label>
		<p>
			<img src="<?php echo e(url("public/admin/upload/images/tin-tuc")); ?>/<?php echo $tintuc['Hinh']; ?>" width="200px" height="200px" />
		</p>
		<input type="file" name="Hinh" id="Hinh" />
	</div>

	<div class="form-group">
		<label>Noi bat</label>
		<label class="radio-inline">
			<input name="rdoStatus" value="1" <?php if($tintuc['NoiBat']==1): ?> <?php echo "checked"; ?> <?php endif; ?> type="radio">Co
		</label>
		<label class="radio-inline">
			<input name="rdoStatus" value="0" <?php if($tintuc['NoiBat']==0): ?> <?php echo "checked"; ?> <?php endif; ?> type="radio">Khong
		</label>
	</div>

	<button type="submit" class="btn btn-default">Category Add</button>
	<button type="reset" class="btn btn-default">Reset</button>
<form>

	<?php $__env->stopSection(); ?>
<?php echo $__env->make('cate.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>