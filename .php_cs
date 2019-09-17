<?php

$config = PhpCsFixer\Config::create()
    ->setRules([
        '@Symfony' => true,
        '@Symfony:risky' => true,
        'array_syntax' => array('syntax' => 'short'),
        'native_function_invocation' => true,
        'ordered_imports' => true,
        'declare_strict_types' => true,
        'single_import_per_statement' => false,
        // Required for compatibility with StyleCI Symfony preset
        'blank_line_before_statement' => [
            'statements' => ['break', 'continue', 'declare', 'return', 'throw', 'try'],
        ],
    ])
    ->setRiskyAllowed(true)
    ->setUsingCache(true)
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->in(__DIR__.'/src')
            ->name('*.php')

    )
;

return $config;
