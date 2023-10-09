<?php

$config = new PhpCsFixer\Config();
return $config
    ->setRiskyAllowed(true)
    ->setRules([
        '@PhpCsFixer' => true,
        '@PSR12' => true,
        '@PHP71Migration' => true,
        'concat_space' => ['spacing' => 'one'],
        'php_unit_test_class_requires_covers' => false,
        'php_unit_internal_class' => false,
        'yoda_style' => ['equal' => false, 'identical' => false],
        'multiline_whitespace_before_semicolons' => ['strategy' => 'no_multi_line'],
        'phpdoc_align' => ['align' => 'left']
    ])
    ->setFinder(PhpCsFixer\Finder::create()
        // ->exclude('folder-to-exclude') // if you want to exclude some folders, you can do it like this!
        ->in(__DIR__)
    );
