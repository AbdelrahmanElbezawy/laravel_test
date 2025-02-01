<?php $__env->startSection('title', 'Home'); ?>


<?php $__env->startSection('content'); ?>
  <div class="grid grid-cols-6">
    <div class="moods col-span-4 gap-2">
      <div class="grid grid-cols-2 lg:grid-cols-6 gap-2">
        <?php $__currentLoopData = $entries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="/entries/<?php echo e($entry->id); ?>">
          <div class="w-16 h-16 justify-center items-center flex" style="background-color:<?php echo e($entry->mood->color); ?>">
            <span class="text-black text-lg">
              <?php echo e(\Carbon\Carbon::parse($entry->date)->format('m/d')); ?>

            </span>
          </div>
        </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>
    <div class="legend col-span-2 pl-0 md:pl-20">
      <span class="font-bold">Legend</span>
      <ul>
      <?php $__currentLoopData = $moods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mood): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
          <span class="w-3 h-3 inline-block" style="background-color:<?php echo e($mood->color); ?>"></span>
          <?php echo e($mood->name); ?>

        </li>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul> 
    </div>
  </div>
</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /root/laravel_test/laravel-crud-mysql/resources/views/home.blade.php ENDPATH**/ ?>