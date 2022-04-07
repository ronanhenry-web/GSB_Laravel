<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Rechercher un médicament')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container text-black bg-success">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <form method="get" action="<?php echo e(route('rechercheMedoc')); ?>">
                                <?php echo csrf_field(); ?>
                                    <div class="form-control py-8 mx-12 pl-8">
                                        <label class="input-group">
                                            <span>Liste des médicaments !</span>
                                            <select name="rechercheMedoc" onChange="form.submit()" class="select select-bordered select-success" required>
                                                <option selected="selected" disabled>Choisissez votre médicament</option>
                                                <?php $__currentLoopData = $medicaments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($info->MED_DEPOTLEGAL); ?>"><?php echo e($info->MED_NOMCOMMERCIAL); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </label>
                                    </div>
                                </form>
                                <div class="overflow-x-auto">
                                    <table class="table w-full text-black">
                                        <tbody>
                                            <tr>
                                                <td class="bg-gray-100">
                                                    <span class="underline text-black pl-2 pr-2">NOM :</span>
                                                    <p><?php echo e($medicament->MED_NOMCOMMERCIAL); ?></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="bg-gray-100">
                                                    <span class="underline text-black pl-2 pr-2">CODE :</span>
                                                    <p><?php echo e($medicament->FAM_CODE); ?></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="bg-gray-100">
                                                    <span class="underline w-full text-black pl-2 pr-2">COMPOSITION :</span>
                                                    <p><?php echo e($medicament->MED_COMPOSITION); ?></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="bg-gray-100">
                                                    <span class="underline w-full text-wrap text-black pl-2 pr-2">EFFETS :</span>
                                                    <p><?php echo e($medicament->MED_EFFETS); ?></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="bg-gray-100">
                                                    <span class="underline text-black pl-2 pr-2">CONTRE INDICATION :</span>
                                                    <p><?php echo e($medicament->MED_CONTREINDIC); ?></p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH C:\wamp64\www\gsb\resources\views/medicament.blade.php ENDPATH**/ ?>