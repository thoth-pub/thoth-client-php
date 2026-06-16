<?php

namespace ThothApi\GraphQL\Enums;

use ThothApi\GraphQL\Definition\EnumTypeDefinition;
use ThothApi\GraphQL\EnumValue;

final class ReferenceField
{
    public const REFERENCE_ID = 'REFERENCE_ID';
    public const WORK_ID = 'WORK_ID';
    public const REFERENCE_ORDINAL = 'REFERENCE_ORDINAL';
    public const DOI = 'DOI';
    public const UNSTRUCTURED_CITATION = 'UNSTRUCTURED_CITATION';
    public const ISSN = 'ISSN';
    public const ISBN = 'ISBN';
    public const JOURNAL_TITLE = 'JOURNAL_TITLE';
    public const ARTICLE_TITLE = 'ARTICLE_TITLE';
    public const SERIES_TITLE = 'SERIES_TITLE';
    public const VOLUME_TITLE = 'VOLUME_TITLE';
    public const EDITION = 'EDITION';
    public const AUTHOR = 'AUTHOR';
    public const VOLUME = 'VOLUME';
    public const ISSUE = 'ISSUE';
    public const FIRST_PAGE = 'FIRST_PAGE';
    public const COMPONENT_NUMBER = 'COMPONENT_NUMBER';
    public const STANDARD_DESIGNATOR = 'STANDARD_DESIGNATOR';
    public const STANDARDS_BODY_NAME = 'STANDARDS_BODY_NAME';
    public const STANDARDS_BODY_ACRONYM = 'STANDARDS_BODY_ACRONYM';
    public const URL = 'URL';
    public const PUBLICATION_DATE = 'PUBLICATION_DATE';
    public const RETRIEVAL_DATE = 'RETRIEVAL_DATE';
    public const CREATED_AT = 'CREATED_AT';
    public const UPDATED_AT = 'UPDATED_AT';

    public static function value(string $value): EnumValue
    {
        return new EnumValue($value);
    }

    public static function definition(): EnumTypeDefinition
    {
        return new EnumTypeDefinition('ReferenceField', [
            'REFERENCE_ID',
            'WORK_ID',
            'REFERENCE_ORDINAL',
            'DOI',
            'UNSTRUCTURED_CITATION',
            'ISSN',
            'ISBN',
            'JOURNAL_TITLE',
            'ARTICLE_TITLE',
            'SERIES_TITLE',
            'VOLUME_TITLE',
            'EDITION',
            'AUTHOR',
            'VOLUME',
            'ISSUE',
            'FIRST_PAGE',
            'COMPONENT_NUMBER',
            'STANDARD_DESIGNATOR',
            'STANDARDS_BODY_NAME',
            'STANDARDS_BODY_ACRONYM',
            'URL',
            'PUBLICATION_DATE',
            'RETRIEVAL_DATE',
            'CREATED_AT',
            'UPDATED_AT',
        ]);
    }
}
