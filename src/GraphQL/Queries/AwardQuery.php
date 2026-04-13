<?php

namespace ThothApi\GraphQL\Queries;

class AwardQuery extends AbstractQuery
{
    public function getQuery(): string
    {
        return $this->buildQuery(
            <<<GQL
            query(\$awardId: Uuid!) {
                award(awardId: \$awardId) {
                    ...awardFields
                }
            }
            GQL
        );
    }

    public function getManyQuery(): string
    {
        return $this->buildQuery(
            <<<GQL
            query(
                \$limit: Int = 100
                \$offset: Int = 0
                \$field: AwardField = AWARD_ORDINAL
                \$direction: Direction = ASC
                \$publishers: [Uuid!] = []
            ) {
                awards(
                    limit: \$limit
                    offset: \$offset
                    order: {
                        field: \$field
                        direction: \$direction
                    }
                    publishers: \$publishers
                ) {
                    ...awardFields
                }
            }
            GQL
        );
    }

    public function getCountQuery(): string
    {
        return <<<GQL
        query {
            awardCount
        }
        GQL;
    }

    protected function getFieldsFragment(): string
    {
        return <<<GQL
        fragment awardFields on Award {
            awardId
            workId
            title
            url
            category
            year
            jury
            country
            role
            prizeStatement
            awardOrdinal
        }
        GQL;
    }
}
