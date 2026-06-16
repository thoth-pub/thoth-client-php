<?php

namespace ThothApi\GraphQL\Enums;

use ThothApi\GraphQL\Definition\EnumTypeDefinition;
use ThothApi\GraphQL\EnumValue;

final class LocationPlatform
{
    public const PROJECT_MUSE = 'PROJECT_MUSE';
    public const OAPEN = 'OAPEN';
    public const DOAB = 'DOAB';
    public const JSTOR = 'JSTOR';
    public const EBSCO_HOST = 'EBSCO_HOST';
    public const OCLC_KB = 'OCLC_KB';
    public const PROQUEST_KB = 'PROQUEST_KB';
    public const PROQUEST_EXLIBRIS = 'PROQUEST_EXLIBRIS';
    public const EBSCO_KB = 'EBSCO_KB';
    public const JISC_KB = 'JISC_KB';
    public const GOOGLE_BOOKS = 'GOOGLE_BOOKS';
    public const INTERNET_ARCHIVE = 'INTERNET_ARCHIVE';
    public const SCIENCE_OPEN = 'SCIENCE_OPEN';
    public const SCIELO_BOOKS = 'SCIELO_BOOKS';
    public const ZENODO = 'ZENODO';
    public const PUBLISHER_WEBSITE = 'PUBLISHER_WEBSITE';
    public const THOTH = 'THOTH';
    public const OTHER = 'OTHER';

    public static function value(string $value): EnumValue
    {
        return new EnumValue($value);
    }

    public static function definition(): EnumTypeDefinition
    {
        return new EnumTypeDefinition('LocationPlatform', [
            'PROJECT_MUSE',
            'OAPEN',
            'DOAB',
            'JSTOR',
            'EBSCO_HOST',
            'OCLC_KB',
            'PROQUEST_KB',
            'PROQUEST_EXLIBRIS',
            'EBSCO_KB',
            'JISC_KB',
            'GOOGLE_BOOKS',
            'INTERNET_ARCHIVE',
            'SCIENCE_OPEN',
            'SCIELO_BOOKS',
            'ZENODO',
            'PUBLISHER_WEBSITE',
            'THOTH',
            'OTHER',
        ]);
    }
}
