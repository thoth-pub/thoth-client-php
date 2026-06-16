<?php

namespace ThothApi\GraphQL\Enums;

use ThothApi\GraphQL\Definition\EnumTypeDefinition;
use ThothApi\GraphQL\EnumValue;

final class ContributionType
{
    public const AUTHOR = 'AUTHOR';
    public const EDITOR = 'EDITOR';
    public const TRANSLATOR = 'TRANSLATOR';
    public const PHOTOGRAPHER = 'PHOTOGRAPHER';
    public const ILLUSTRATOR = 'ILLUSTRATOR';
    public const MUSIC_EDITOR = 'MUSIC_EDITOR';
    public const FOREWORD_BY = 'FOREWORD_BY';
    public const INTRODUCTION_BY = 'INTRODUCTION_BY';
    public const AFTERWORD_BY = 'AFTERWORD_BY';
    public const PREFACE_BY = 'PREFACE_BY';
    public const SOFTWARE_BY = 'SOFTWARE_BY';
    public const RESEARCH_BY = 'RESEARCH_BY';
    public const CONTRIBUTIONS_BY = 'CONTRIBUTIONS_BY';
    public const INDEXER = 'INDEXER';

    public static function value(string $value): EnumValue
    {
        return new EnumValue($value);
    }

    public static function definition(): EnumTypeDefinition
    {
        return new EnumTypeDefinition('ContributionType', [
            'AUTHOR',
            'EDITOR',
            'TRANSLATOR',
            'PHOTOGRAPHER',
            'ILLUSTRATOR',
            'MUSIC_EDITOR',
            'FOREWORD_BY',
            'INTRODUCTION_BY',
            'AFTERWORD_BY',
            'PREFACE_BY',
            'SOFTWARE_BY',
            'RESEARCH_BY',
            'CONTRIBUTIONS_BY',
            'INDEXER',
        ]);
    }
}
