<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXITEcxc\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXITEcxc/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXITEcxc.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXITEcxc\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXITEcxc\App_KernelDevDebugContainer([
    'container.build_hash' => 'XITEcxc',
    'container.build_id' => 'de9b96c9',
    'container.build_time' => 1648583613,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXITEcxc');
