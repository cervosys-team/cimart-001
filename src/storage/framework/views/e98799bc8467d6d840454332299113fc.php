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
    <!-- Konten di sini -->
    <div class="pt-10">
        <!-- Konten halaman Anda di sini -->
    </div> 
    <?php if (isset($component)) { $__componentOriginal20742eb2771d985bdc9eeee85f5ff6b5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal20742eb2771d985bdc9eeee85f5ff6b5 = $attributes; } ?>
<?php $component = App\View\Components\Hero::resolve(['data' => $banner] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('hero'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Hero::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal20742eb2771d985bdc9eeee85f5ff6b5)): ?>
<?php $attributes = $__attributesOriginal20742eb2771d985bdc9eeee85f5ff6b5; ?>
<?php unset($__attributesOriginal20742eb2771d985bdc9eeee85f5ff6b5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal20742eb2771d985bdc9eeee85f5ff6b5)): ?>
<?php $component = $__componentOriginal20742eb2771d985bdc9eeee85f5ff6b5; ?>
<?php unset($__componentOriginal20742eb2771d985bdc9eeee85f5ff6b5); ?>
<?php endif; ?>
    <br>
    <?php if (isset($component)) { $__componentOriginal3e2122a43095086c515a77f546a1f934 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3e2122a43095086c515a77f546a1f934 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.category','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('category'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3e2122a43095086c515a77f546a1f934)): ?>
<?php $attributes = $__attributesOriginal3e2122a43095086c515a77f546a1f934; ?>
<?php unset($__attributesOriginal3e2122a43095086c515a77f546a1f934); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3e2122a43095086c515a77f546a1f934)): ?>
<?php $component = $__componentOriginal3e2122a43095086c515a77f546a1f934; ?>
<?php unset($__componentOriginal3e2122a43095086c515a77f546a1f934); ?>
<?php endif; ?>

    <div>
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('title', ['title' => 'Rekomendasi dari Kami']);

$__html = app('livewire')->mount($__name, $__params, 'lw-2349861642-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        <div class="max-w-[448px] mx-auto bg-blue-400 rounded-lg shadow-lg">
            <!-- Bagian Promo -->
            <div class="flex items-center space-x-4">
                <!-- Kartu Produk (Dapat Di-scroll) -->
                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('front-products', ['category' => 'recomendation']);

$__html = app('livewire')->mount($__name, $__params, 'lw-2349861642-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            </div>
        </div>

        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('title', ['title' => 'Promo Besar']);

$__html = app('livewire')->mount($__name, $__params, 'lw-2349861642-2', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        <div class="max-w-[448px] mx-auto bg-blue-400 rounded-lg shadow-lg">
            <!-- Bagian Promo -->
            <div class="flex items-center space-x-4">
                <!-- Kartu Produk (Dapat Di-scroll) -->
                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('front-products', ['category' => 'promotion']);

$__html = app('livewire')->mount($__name, $__params, 'lw-2349861642-3', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            </div>
        </div>
        
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('title', ['title' => 'Produk Baru di Cimart']);

$__html = app('livewire')->mount($__name, $__params, 'lw-2349861642-4', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        <div class="max-w-[448px] mx-auto bg-blue-400 rounded-lg shadow-lg">
            <!-- Bagian Promo -->
            <div class="flex items-center space-x-4">
                <!-- Kartu Produk (Dapat Di-scroll) -->
                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('front-products', ['category' => 'new']);

$__html = app('livewire')->mount($__name, $__params, 'lw-2349861642-5', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            </div>
        </div>
        
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('title', ['title' => 'Temukan Artikel']);

$__html = app('livewire')->mount($__name, $__params, 'lw-2349861642-6', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('front-article', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-2349861642-7', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('title', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-2349861642-8', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    </div>
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
<?php /**PATH C:\laragon\www\cimart\resources\views/dashboard.blade.php ENDPATH**/ ?>