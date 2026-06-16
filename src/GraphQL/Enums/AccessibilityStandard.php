<?php

namespace ThothApi\GraphQL\Enums;

use ThothApi\GraphQL\Definition\EnumTypeDefinition;
use ThothApi\GraphQL\EnumValue;

final class AccessibilityStandard
{
    public const WCAG21AA = 'WCAG21AA';
    public const WCAG21AAA = 'WCAG21AAA';
    public const WCAG22AA = 'WCAG22AA';
    public const WCAG22AAA = 'WCAG22AAA';
    public const EPUB_A11Y10AA = 'EPUB_A11Y10AA';
    public const EPUB_A11Y10AAA = 'EPUB_A11Y10AAA';
    public const EPUB_A11Y11AA = 'EPUB_A11Y11AA';
    public const EPUB_A11Y11AAA = 'EPUB_A11Y11AAA';
    public const PDF_UA1 = 'PDF_UA1';
    public const PDF_UA2 = 'PDF_UA2';

    public static function value(string $value): EnumValue
    {
        return new EnumValue($value);
    }

    public static function definition(): EnumTypeDefinition
    {
        return new EnumTypeDefinition('AccessibilityStandard', [
            'WCAG21AA',
            'WCAG21AAA',
            'WCAG22AA',
            'WCAG22AAA',
            'EPUB_A11Y10AA',
            'EPUB_A11Y10AAA',
            'EPUB_A11Y11AA',
            'EPUB_A11Y11AAA',
            'PDF_UA1',
            'PDF_UA2',
        ]);
    }
}
