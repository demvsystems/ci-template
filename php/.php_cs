<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__)
;

return PhpCsFixer\Config::create()
    ->setUsingCache(false)
    ->setRiskyAllowed(true)
    ->setRules([
        '@PSR2'                                 => true,
        '@Symfony'                              => true,
        '@PHP71Migration'                       => true,
        'yoda_style'                            => false,
        'phpdoc_summary'                        => false,
        'phpdoc_no_package'                     => false,
        'array_syntax'                          => ['syntax' => 'short'],
        'no_php4_constructor'                   => true,
        'no_useless_else'                       => true,
        'no_useless_return'                     => true,
        'ordered_imports'                       => true,
        'phpdoc_no_empty_return'                => false,
        'phpdoc_order'                          => true,
        'pre_increment'                         => false,
        'semicolon_after_instruction'           => true,
        'ternary_to_null_coalescing'            => true,
        'dir_constant'                          => true,
        'no_unreachable_default_argument_value' => true,
        'phpdoc_add_missing_param_annotation'   => true,
        'phpdoc_var_without_name'               => false,
        'visibility_required'                   => ['property', 'method'],
        'concat_space'                          => ['spacing' => 'one'],
        'binary_operator_spaces'                => [
            'align_double_arrow' => true,
            'align_equals'       => true,
        ],
    ])
    ->setFinder($finder)
;
