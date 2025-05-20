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
    <?php
        $colors = ['Putih', 'Hitam', 'Abu-abu'];
        $sizes = ['S', 'M', 'L', 'XL'];
    ?>

    <div class="max-w-[448px] mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="lg:grid lg:grid-cols-1 lg:gap-x-8 lg:items-start">
            
            <div class="flex-shrink-0 overflow-hidden rounded-lg">
                <img class="h-64 w-full object-cover" src="<?php echo e(asset('storage/' . $data->image_url)); ?>"
                    alt="<?php echo e($data->name); ?>">
            </div>

            
            <div class="mt-6">
                <h1 class="text-xl font-extrabold tracking-tight text-gray-900"><?php echo e($data->name); ?></h1>
                <div class="mt-2 flex items-center">
                    <div class="flex items-center">
                        <?php for($i = 0; $i < $averageRating; $i++): ?>
                            <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        <?php endfor; ?>
                    </div>
                    <p class="ml-2 text-sm text-gray-500">(<?php echo e($data->review_count); ?> ulasan)</p>
                </div>
        
                <?php if($data->discounted_price > 0): ?>
                <div class="flex items-center mt-2">
                    <span
                        class="text-red-500 font-bold text-xl">Rp<?php echo e($data->discounted_price); ?></span>
                    <span
                        class="ml-2 text-gray-500 line-through text-xl">Rp<?php echo e(number_format($data->price)); ?></span>
                </div>
                <?php else: ?>
                <div class="mt-3">
                    <p class="text-xl text-gray-900">Rp<?php echo e(number_format($data->price, 0, ',', '.')); ?></p>
                </div>
                <?php endif; ?>

                
                <div class="mt-8 space-y-4">
                    <!-- Tombol Tambah ke Keranjang -->
                    <button onclick="openModal()"
                        class="w-full bg-orange-600 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500">
                        <svg class="mr-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        Tambah ke Keranjang
                    </button>

                    <!-- Tombol Beli Sekarang -->
                    <form action="/api/checkout" method="POST">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="product_id" value="<?php echo e($data->id); ?>">
                        <button type="submit"
                            class="w-full bg-green-600 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                            <svg class="mr-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            Beli Sekarang
                        </button>
                    </form>
                </div>
            </div>
        </div>

        
        <div class="mt-12">
            <div class="border-b border-gray-200">
                <nav class="-mb-px flex space-x-8" aria-label="Tabs">
                    <?php $__currentLoopData = ['Deskripsi', 'Ulasan']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <button
                            class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm"
                            onclick="setActiveTab('<?php echo e(strtolower($tab)); ?>')">
                            <?php echo e($tab); ?>

                        </button>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </nav>
            </div>
            <div class="mt-6 prose prose-sm max-w-none">
                <div id="deskripsi" class="hidden">
                    <?php echo $data->description; ?>

                </div>

                <div id="ulasan" class="hidden">
                    
                    <div class="mt-6">
                        <h3 class="text-lg font-medium text-gray-900">Ulasan Pelanggan</h3>

                        <?php if($data->review->count() > -1): ?>
                            <ul class="divide-y divide-gray-200">
                                <?php $__currentLoopData = $data->review; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="py-4">
                                        <div class="flex items-center space-x-4">
                                            <!-- Informasi Pengguna -->
                                            <div>
                                                <p class="text-sm font-medium text-gray-900"><?php echo e($review->user->name); ?>

                                                </p>
                                                <p class="text-xs text-gray-500">
                                                    <?php echo e($review->created_at->format('d F, Y')); ?></p>
                                            </div>
                                        </div>

                                        <!-- Rating -->
                                        <div class="mt-1 flex items-center">
                                            <?php for($i = 1; $i <= 5; $i++): ?>
                                                <svg class="h-4 w-4 <?php echo e($i <= $review->rating ? 'text-yellow-400' : 'text-gray-300'); ?>"
                                                    fill="currentColor" viewBox="0 0 20 20">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                            <?php endfor; ?>
                                        </div>

                                        <!-- Teks Ulasan -->
                                        <div class="mt-2 text-sm text-gray-600">
                                            <?php echo e($review->comment); ?>

                                        </div>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        <?php else: ?>
                            <p class="text-gray-500">Belum ada ulasan. Jadilah yang pertama memberikan ulasan!</p>
                        <?php endif; ?>
                    </div>

                    <div class="mt-6">
                        <h3 class="text-lg font-medium text-gray-900">Tulis Ulasan</h3>
                        <form action="<?php echo e(route('review.store')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="product_id" value="<?php echo e($data->id); ?>">
                            <div class="mt-2">
                                <label for="rating" class="block text-sm font-medium text-gray-700">Penilaian</label>
                                <select id="rating" name="rating"
                                    class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm">
                                    <?php for($i = 1; $i <= 5; $i++): ?>
                                        <option value="<?php echo e($i); ?>"><?php echo e($i); ?></option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                            <div class="mt-4">
                                <label for="comment" class="block text-sm font-medium text-gray-700">Ulasan</label>
                                <textarea id="comment" name="comment" rows="3"
                                    class="shadow-sm focus:ring-orange-500 focus:border-orange-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
                            </div>
                            <div class="mt-4">
                                <button type="submit"
                                    class="bg-orange-600 text-white px-4 py-2 rounded-md hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-orange-500">
                                    Kirim Ulasan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>

    
    <div id="confirmationModal" class="fixed z-10 inset-0 overflow-y-auto hidden" aria-labelledby="modal-title"
        role="dialog" aria-modal="true">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <div
                class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                                Tambah ke Keranjang
                            </h3>
                            <div class="mt-2">
                                <p class="text-sm text-gray-500">
                                    Apakah Anda yakin ingin menambahkan produk ini ke keranjang Anda?
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <!-- Tombol Tambah ke Keranjang -->
                    <?php if(auth()->guard()->check()): ?>
                        <!-- Pengguna yang sudah login bisa menambah ke keranjang -->
                        <form action="/api/placeCart" method="POST">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="id" value="<?php echo e($data->id); ?>">
                            <input type="hidden" name="user_id" value="<?php echo e(auth()->user()->id); ?>">
                            <button type="submit" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-orange-600 text-base font-medium text-white hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500 sm:ml-3 sm:w-auto sm:text-sm">
                                Konfirmasi
                            </button>
                        </form>
                        <button type="button" onclick="closeModal()" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                            Batal
                        </button>
                    <?php else: ?>
                        <!-- Pengguna yang belum login diarahkan ke halaman login -->
                        <a href="<?php echo e(route('login')); ?>"
                            class="w-full bg-orange-600 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500">
                            <svg class="mr-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            Tambah ke Keranjang (Harus Login)
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <script>
        function setActiveTab(tabId) {
            // Sembunyikan semua konten tab
            document.querySelectorAll('.prose > div').forEach(div => div.classList.add('hidden'));
            // Tampilkan konten tab yang dipilih
            document.getElementById(tabId).classList.remove('hidden');
        }

        function openModal() {
            document.getElementById('confirmationModal').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('confirmationModal').classList.add('hidden');
        }
    </script>
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
<?php /**PATH /var/www/html/resources/views/detailPage.blade.php ENDPATH**/ ?>