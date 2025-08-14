<?php

$finder = PhpCsFixer\Finder::create()->in(__DIR__);

$config = new PhpCsFixer\Config();

return $config
    ->setRiskyAllowed(true)
    ->setRules([
        '@PSR2' => true,
        'array_syntax' => ['syntax' => 'short'],        // array() ではなく []
        'no_useless_else' => true,                     // 不要な else を削除
        'ordered_class_elements' => ['order' => ['public', 'protected', 'private']], // メソッド順
    ])
    ->setFinder($finder);