

<?php $__env->startSection('content'); ?>

<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
    
    <?php if(count($simple) == 0): ?>

    <p>Nie znaleziono</p>

    <?php else: ?>

        <?php $__currentLoopData = $simple; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="bg-gray-50 border border-gray-200 rounded p-6">
            <div class="flex">
                <img
                    class="hidden w-48 mr-6 md:block"
                    src="images/acme.png"
                    alt=""
                />
                <div>
                    <h3 class="text-2xl">
                        <a href="show.html"><?php echo e($value->tytuł); ?></a>
                    </h3>
                    <div class="text-xl font-bold mb-4">Acme Corp</div>
                    <ul class="flex">
                        <li
                            class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                        >
                            <a href="#">Laravel</a>
                        </li>
                        <li
                            class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                        >
                            <a href="#">API</a>
                        </li>
                        <li
                            class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                        >
                            <a href="#">Backend</a>
                        </li>
                        <li
                            class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                        >
                            <a href="#">Vue</a>
                        </li>
                    </ul>
                    <div class="text-lg mt-4">
                        <i class="fa-solid fa-location-dot"></i> Boston,
                        MA
                    </div>
                </div>
            </div>
        </div>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    <?php endif; ?>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('układ', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Inx\projekt_gym\resources\views/simple.blade.php ENDPATH**/ ?>