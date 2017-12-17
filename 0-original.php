<?php

include __DIR__ . '/../vendor/autoload.php';
include __DIR__ . '/0-original/OroKernel.php';
include __DIR__ . '/AppKernel.php';

$kernel = new AppKernel('prod', false);

$kernel->collectBundles();
