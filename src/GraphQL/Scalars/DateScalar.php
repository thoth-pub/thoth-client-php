<?php

namespace ThothApi\GraphQL\Scalars;

use ThothApi\GraphQL\Definition\ScalarTypeDefinition;

final class DateScalar
{
    public static function definition(): ScalarTypeDefinition
    {
        return new ScalarTypeDefinition('Date', 'Date in the proleptic Gregorian calendar (without time zone).

Represents a description of the date (as used for birthdays, for example).
It cannot represent an instant on the time-line.

[`Date` scalar][1] compliant.

See also [`chrono::NaiveDate`][2] for details.

[1]: https://graphql-scalars.dev/docs/scalars/date
[2]: https://docs.rs/chrono/latest/chrono/naive/struct.NaiveDate.html');
    }
}
