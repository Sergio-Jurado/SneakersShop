<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNxKUw4u\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNxKUw4u/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerNxKUw4u.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerNxKUw4u\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerNxKUw4u\App_KernelDevDebugContainer([
    'container.build_hash' => 'NxKUw4u',
    'container.build_id' => 'da1e32f8',
    'container.build_time' => 1714043047,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerNxKUw4u');
