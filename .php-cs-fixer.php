<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__ . '/src'); // src 配下のみ整形対象

return $config
->setRiskyAllowed(true)
->setRules([
'@PSR2' => true, // PSR2 のコーディング規約を適用
]);