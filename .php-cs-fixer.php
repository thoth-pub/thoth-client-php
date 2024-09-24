<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__ . '/src')
    ->in(__DIR__ . '/tests');

return (new PhpCsFixer\Config())
    ->setRules([
        '@PSR12' => true,
        'array_indentation' => true,
        'array_syntax' => ['syntax' => 'short'],
        'binary_operator_spaces' => true,
        'concat_space' => ['spacing' => 'one'],
        'explicit_string_variable' => true,
        'list_syntax' => ['syntax' => 'short'],
        'method_chaining_indentation' => true,
        'no_unused_imports' => true,
        'no_spaces_around_offset' => true,
        'no_whitespace_before_comma_in_array' => true,
        'ordered_imports' => ['sort_algorithm' => 'alpha'],
        'single_quote' => true,
        'standardize_increment' => true,
        'standardize_not_equals' => true,
        'ternary_to_null_coalescing' => true,
    ])
    ->setFinder($finder);
