<div class="card card-default">
    <div class="card-header">
        <div class="row">
            <div class="col-sm-9">
                <?php echo e($record->id); ?>

            </div>
            <div class="col-sm-3">
                <div class="btn-group" style="float: left">
                    <a href="<?php echo e(route('tags.edit',$record->id)); ?>">
    <span class="fa fa-pencil"></span>
</a>
                    <a href="<?php echo e(route('tags.show',$record->id)); ?>">
    <span class="fa fa-eye"></span>
</a>
                    <form onsubmit="return confirm('Are you sure you want to delete?')"
      action="<?php echo e(route('tags.destroy',$record->id)); ?>"
      method="post"
      style="display: inline">
    <?php echo e(csrf_field()); ?>

    <?php echo e(method_field('DELETE')); ?>

    <button type="submit" class="btn btn-default cursor-pointer  btn-sm">
        <i class="text-danger fa fa-remove"></i>
    </button>
</form>
                </div>
            </div>
        </div>
    </div>
    <div class="card-block">
        <table class="table table-bordered table-striped">
            <tbody>
            		<tr>
			<th>Slug</th>
			<td><?php echo e($record->slug); ?></td>
		</tr>
		<tr>
			<th>Name</th>
			<td><?php echo e($record->name); ?></td>
		</tr>

            </tbody>
        </table>
    </div>
</div>
