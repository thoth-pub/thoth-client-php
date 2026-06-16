<?php

namespace ThothApi\GraphQL\Enums;

use ThothApi\GraphQL\Definition\EnumTypeDefinition;
use ThothApi\GraphQL\EnumValue;

final class WorkField
{
    public const WORK_ID = 'WORK_ID';
    public const WORK_TYPE = 'WORK_TYPE';
    public const WORK_STATUS = 'WORK_STATUS';
    public const FULL_TITLE = 'FULL_TITLE';
    public const TITLE = 'TITLE';
    public const SUBTITLE = 'SUBTITLE';
    public const REFERENCE = 'REFERENCE';
    public const EDITION = 'EDITION';
    public const DOI = 'DOI';
    public const PUBLICATION_DATE = 'PUBLICATION_DATE';
    public const WITHDRAWN_DATE = 'WITHDRAWN_DATE';
    public const PLACE = 'PLACE';
    public const PAGE_COUNT = 'PAGE_COUNT';
    public const PAGE_BREAKDOWN = 'PAGE_BREAKDOWN';
    public const IMAGE_COUNT = 'IMAGE_COUNT';
    public const TABLE_COUNT = 'TABLE_COUNT';
    public const AUDIO_COUNT = 'AUDIO_COUNT';
    public const VIDEO_COUNT = 'VIDEO_COUNT';
    public const LICENSE = 'LICENSE';
    public const COPYRIGHT_HOLDER = 'COPYRIGHT_HOLDER';
    public const LANDING_PAGE = 'LANDING_PAGE';
    public const LCCN = 'LCCN';
    public const OCLC = 'OCLC';
    public const SHORT_ABSTRACT = 'SHORT_ABSTRACT';
    public const LONG_ABSTRACT = 'LONG_ABSTRACT';
    public const GENERAL_NOTE = 'GENERAL_NOTE';
    public const BIBLIOGRAPHY_NOTE = 'BIBLIOGRAPHY_NOTE';
    public const TOC = 'TOC';
    public const RESOURCES_DESCRIPTION = 'RESOURCES_DESCRIPTION';
    public const COVER_URL = 'COVER_URL';
    public const COVER_CAPTION = 'COVER_CAPTION';
    public const CREATED_AT = 'CREATED_AT';
    public const UPDATED_AT = 'UPDATED_AT';
    public const FIRST_PAGE = 'FIRST_PAGE';
    public const LAST_PAGE = 'LAST_PAGE';
    public const PAGE_INTERVAL = 'PAGE_INTERVAL';
    public const UPDATED_AT_WITH_RELATIONS = 'UPDATED_AT_WITH_RELATIONS';

    public static function value(string $value): EnumValue
    {
        return new EnumValue($value);
    }

    public static function definition(): EnumTypeDefinition
    {
        return new EnumTypeDefinition('WorkField', [
            'WORK_ID',
            'WORK_TYPE',
            'WORK_STATUS',
            'FULL_TITLE',
            'TITLE',
            'SUBTITLE',
            'REFERENCE',
            'EDITION',
            'DOI',
            'PUBLICATION_DATE',
            'WITHDRAWN_DATE',
            'PLACE',
            'PAGE_COUNT',
            'PAGE_BREAKDOWN',
            'IMAGE_COUNT',
            'TABLE_COUNT',
            'AUDIO_COUNT',
            'VIDEO_COUNT',
            'LICENSE',
            'COPYRIGHT_HOLDER',
            'LANDING_PAGE',
            'LCCN',
            'OCLC',
            'SHORT_ABSTRACT',
            'LONG_ABSTRACT',
            'GENERAL_NOTE',
            'BIBLIOGRAPHY_NOTE',
            'TOC',
            'RESOURCES_DESCRIPTION',
            'COVER_URL',
            'COVER_CAPTION',
            'CREATED_AT',
            'UPDATED_AT',
            'FIRST_PAGE',
            'LAST_PAGE',
            'PAGE_INTERVAL',
            'UPDATED_AT_WITH_RELATIONS',
        ]);
    }
}
