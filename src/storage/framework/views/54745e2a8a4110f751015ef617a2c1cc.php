<div class="max-w-[448px] mx-auto flex space-x-2 overflow-x-auto whitespace-nowrap">
    <!-- Card Loop -->
    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="bg-white border border-gray-200  shadow dark:bg-gray-800 dark:border-gray-700 w-36 min-w-[144px] flex-shrink-0 text-wrap">
            <a href="/article/<?php echo e($item->id); ?>">
                <img class="p-2 w-full h-24 object-cover" src="storage/<?php echo e($item->image_url); ?>" alt="" />
            </a>
            <div class="p-3">
                <a href="#">
                    <h5 class="mb-1 text-[12.5px] font-bold tracking-tight text-gray-900 dark:text-white"><?php echo e($item->title); ?></h5>
                </a>
                <p class="mb-2 text-[0.625rem] font-normal text-gray-700 dark:text-gray-400"><?php echo Str::limit($item->text, 50); ?></p>
                <a href="#" class="inline-flex items-center px-2 py-1 text-xs font-medium text-white bg-orange-700 rounded-lg hover:bg-orange-800">
                    Read more
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
    <style>
        p{
            font-size: 10px;
        }
    </style>
</div>
<?php /**PATH C:\laragon\www\cimart\resources\views/livewire/front-article.blade.php ENDPATH**/ ?>