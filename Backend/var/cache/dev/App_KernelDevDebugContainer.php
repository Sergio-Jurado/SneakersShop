<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerLO7RlMr\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerLO7RlMr/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerLO7RlMr.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerLO7RlMr\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerLO7RlMr\App_KernelDevDebugContainer([
    'container.build_hash' => 'LO7RlMr',
    'container.build_id' => '60327cb8',
    'container.build_time' => 1717928644,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerLO7RlMr');
