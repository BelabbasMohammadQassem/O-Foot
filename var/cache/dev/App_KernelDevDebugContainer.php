<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSbJVDwj\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSbJVDwj/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerSbJVDwj.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerSbJVDwj\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerSbJVDwj\App_KernelDevDebugContainer([
    'container.build_hash' => 'SbJVDwj',
    'container.build_id' => 'c4e9ac23',
    'container.build_time' => 1720005599,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSbJVDwj');
