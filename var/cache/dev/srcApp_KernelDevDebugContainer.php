<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRAsGY6H\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRAsGY6H/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerRAsGY6H.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerRAsGY6H\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerRAsGY6H\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'RAsGY6H',
    'container.build_id' => '58b870b6',
    'container.build_time' => 1617203422,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerRAsGY6H');
