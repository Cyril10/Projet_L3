<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerEZkRNZF\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerEZkRNZF/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerEZkRNZF.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerEZkRNZF\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerEZkRNZF\App_KernelDevDebugContainer([
    'container.build_hash' => 'EZkRNZF',
    'container.build_id' => '4141728d',
    'container.build_time' => 1679416775,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerEZkRNZF');