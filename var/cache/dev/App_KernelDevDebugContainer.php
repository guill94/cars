<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWmQw2Hk\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWmQw2Hk/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerWmQw2Hk.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerWmQw2Hk\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerWmQw2Hk\App_KernelDevDebugContainer([
    'container.build_hash' => 'WmQw2Hk',
    'container.build_id' => '95d1ab01',
    'container.build_time' => 1648634632,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerWmQw2Hk');
