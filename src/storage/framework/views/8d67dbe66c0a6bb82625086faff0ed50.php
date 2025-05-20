<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
  <div class="pt-10"></div>

  <!-- Hero Section -->
  <div class="bg-gradient-to-r from-orange-300 to-orange-500 min-h-screen">
      <div class="max-w-[448px] mx-auto px-4 py-12 space-y-8">
          <!-- Hero Section -->
          <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('hero', ['class' => 'mb-12']);

$__html = app('livewire')->mount($__name, $__params, 'lw-4061806475-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

          <!-- Introduction Section -->
          <div class="bg-white shadow-xl rounded-lg p-6 space-y-8">
              <!-- Introduction -->
              <div class="description space-y-6">
                  <?php echo $data[0]->description; ?>

              </div>

              <!-- Tim Kami Section -->
              <div>
                  <h3 class="text-3xl font-bold text-orange-700 mb-4">Tim Kami</h3>
                  <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                      <?php $__currentLoopData = $data[0]->person; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <div class="text-center bg-gray-100 p-4 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                              <img src="<?php echo e(asset('storage/' . $member['image_url'])); ?>" alt="<?php echo e($member['name']); ?>" class="rounded-full w-24 h-24 mx-auto mb-3 shadow-md">
                              <h4 class="text-lg font-bold"><?php echo e($member['name']); ?></h4>
                          </div>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </div>
              </div>

              <!-- Call to Action -->
              <div class="text-center">
                  <h3 class="text-3xl font-bold text-orange-700 mb-4">Bergabunglah dengan Kami</h3>
                  <p class="text-gray-700 mb-4">Jadilah bagian dari perubahan positif. Bersama-sama, kita dapat menciptakan dampak yang lebih besar.</p>
                  <a href="/register" class="bg-blue-600 text-white font-bold py-2 px-6 rounded-full hover:bg-blue-700 transition-all duration-300 shadow-lg">
                      Daftar Sekarang
                  </a>
              </div>
          </div>
      </div>
  </div>

  <style>
      /* Style for description */
      .description {
          font-size: 1rem;
          line-height: 1.6rem;
          color: #4A4A4A;
      }

      .description p {
          margin-bottom: 1rem;
      }

      .description h3 {
          font-size: 1.5rem;
          font-weight: 600;
          margin-bottom: 1rem;
          color: #F97316;
      }

      .description ul {
          list-style-type: disc;
          padding-left: 1.5rem;
      }

      .description li {
          margin-bottom: 0.75rem;
      }

      .description a {
          color: #1D4ED8;
          text-decoration: underline;
      }

      .description a:hover {
          color: #2563EB;
      }

      /* Hover effects */
      .card {
          transition: box-shadow 0.3s ease-in-out;
      }

      .card:hover {
          box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
      }

      /* Button hover */
      .btn-hover:hover {
          transform: translateY(-2px);
          box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
      }

      /* Background and shadow tweaks */
      .shadow-lg {
          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      }

      .shadow-xl {
          box-shadow: 0 6px 16px rgba(0, 0, 0, 0.1);
      }

      .shadow-2xl {
          box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
      }
  </style>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\cimart\resources\views/about.blade.php ENDPATH**/ ?>