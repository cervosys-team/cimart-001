<div>
    <div class="swiper-container relative bg-white max-w-[448px] mx-auto shadow-md overflow-hidden">
        <!-- Swiper Wrapper -->
        <div class="swiper-wrapper">
            <!-- Static Slide 1 -->


            <!-- Dynamic Slides -->
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="swiper-slide relative aspect-w-16 aspect-h-9">
                    <!-- Background Image -->
                    <img src="/storage/<?php echo e($item->image_url); ?>" alt="Banner Image" class="w-full h-full object-cover">
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>

    <!-- Swiper Initialization -->
    <script>
        var swiper = new Swiper('.swiper-container', {
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    </script>
</div>
<?php /**PATH /var/www/html/resources/views/components/hero.blade.php ENDPATH**/ ?>