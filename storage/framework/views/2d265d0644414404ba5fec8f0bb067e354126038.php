
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
  <div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">
  <header class="text-center">
      <h2 class="text-2xl font-bold uppercase mb-1">
        Edit Gig
      </h2>
      <p class="mb-4">Edit: <?php echo e($listing->title); ?></p>
  </header>

  <form method="POST" action="/firstproject/public/listings/<?php echo e($listing->id); ?>" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
      <div class="mb-6">
          <label
              for="company"
              class="inline-block text-lg mb-2"
              >Company Name</label>
          <input
              type="text"
              class="border border-gray-200 rounded p-2 w-full"
              name="company" value="<?php echo e($listing->company); ?>"/>

          <?php $__errorArgs = ['company'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="text-red-500 txt-xs mt-1"><?php echo e($message); ?></p>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
      </div>

      <div class="mb-6">
          <label for="title" class="inline-block text-lg mb-2"
              >Job Title</label>
          <input
              type="text"
              class="border border-gray-200 rounded p-2 w-full"
              name="title" value="<?php echo e($listing->title); ?>"
              placeholder="Example: Senior Laravel Developer"/>
          <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="text-red-500 txt-xs mt-1"><?php echo e($message); ?></p>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
      </div>

      <div class="mb-6">
          <label
              for="location"
              class="inline-block text-lg mb-2">Job Location</label>
          <input
              type="text"
              class="border border-gray-200 rounded p-2 w-full"
              name="location" value="<?php echo e($listing->location); ?>"
              placeholder="Example: Remote, Boston MA, etc"/>
          <?php $__errorArgs = ['location'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
             <p class="text-red-500 txt-xs mt-1"><?php echo e($message); ?></p>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
      </div>

      <div class="mb-6">
          <label for="email" class="inline-block text-lg mb-2"
              >Contact Email</label>
          <input
              type="text"
              class="border border-gray-200 rounded p-2 w-full"
              name="email" value="<?php echo e($listing->email); ?>"/>
          <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <p class="text-red-500 txt-xs mt-1"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
      </div>

      <div class="mb-6">
          <label
              for="website"
              class="inline-block text-lg mb-2">
              Website/Application URL
          </label>
          <input
              type="text"
              class="border border-gray-200 rounded p-2 w-full"
              name="website" value="<?php echo e($listing->website); ?>"/>
              <?php $__errorArgs = ['website'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="text-red-500 txt-xs mt-1"><?php echo e($message); ?></p>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
      </div>

      <div class="mb-6">
          <label for="tags" class="inline-block text-lg mb-2">
              Tags (Comma Separated)
          </label>
          <input
              type="text"
              class="border border-gray-200 rounded p-2 w-full"
              name="tags" value="<?php echo e($listing->tags); ?>"
              placeholder="Example: Laravel, Backend, Postgres, etc"/>
          <?php $__errorArgs = ['tags'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="text-red-500 txt-xs mt-1"><?php echo e($message); ?></p>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
      </div>

      <div class="mb-6">
          <label for="logo" class="inline-block text-lg mb-2">
              Company Logo
          </label>
          <input
              type="file"
              class="border border-gray-200 rounded p-2 w-full"
              name="logo" />

              <img
              class="w-48 mr-6 mb-6"
              src="<?php echo e($listing->logo ? asset('storage/'. $listing->logo) : asset('/images/no-image.png')); ?>"
              alt=""/>

              <?php $__errorArgs = ['logo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-red-500 txt-xs mt-1"><?php echo e($message); ?></p>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
      </div>

      <div class="mb-6">
          <label
              for="description"
              class="inline-block text-lg mb-2">
              Job Description
          </label>
          <textarea
              class="border border-gray-200 rounded p-2 w-full"
              name="description" 
              rows="10"
              placeholder="Include tasks, requirements, salary, etc"><?php echo e($listing->description); ?></textarea>
              <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-red-500 txt-xs mt-1"><?php echo e($message); ?></p>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
      </div>

      <div class="mb-6">
          <button
              class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
              Update Gig
          </button>

          <a href="/" class="text-black ml-4"> Back </a>
      </div>
  </form>
  </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\firstproject\resources\views/listings/edit.blade.php ENDPATH**/ ?>