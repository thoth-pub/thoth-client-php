<?php

namespace ThothApi\GraphQL\Enums;

use ThothApi\GraphQL\Definition\EnumTypeDefinition;
use ThothApi\GraphQL\EnumValue;

final class AwardRole
{
    public const SHORT_LISTED = 'SHORT_LISTED';
    public const WINNER = 'WINNER';
    public const LONG_LISTED = 'LONG_LISTED';
    public const COMMENDED = 'COMMENDED';
    public const RUNNER_UP = 'RUNNER_UP';
    public const JOINT_WINNER = 'JOINT_WINNER';
    public const NOMINATED = 'NOMINATED';

    public static function value(string $value): EnumValue
    {
        return new EnumValue($value);
    }

    public static function definition(): EnumTypeDefinition
    {
        return new EnumTypeDefinition('AwardRole', [
            'SHORT_LISTED',
            'WINNER',
            'LONG_LISTED',
            'COMMENDED',
            'RUNNER_UP',
            'JOINT_WINNER',
            'NOMINATED',
        ]);
    }
}
