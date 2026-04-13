<?php

namespace ThothApi\GraphQL\Queries;

class EndorsementQuery extends AbstractQuery
{
    public function getQuery(): string
    {
        return $this->buildQuery(
            <<<GQL
            query(\$endorsementId: Uuid!) {
                endorsement(endorsementId: \$endorsementId) {
                    ...endorsementFields
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
                \$field: EndorsementField = ENDORSEMENT_ORDINAL
                \$direction: Direction = ASC
                \$publishers: [Uuid!] = []
            ) {
                endorsements(
                    limit: \$limit
                    offset: \$offset
                    order: {
                        field: \$field
                        direction: \$direction
                    }
                    publishers: \$publishers
                ) {
                    ...endorsementFields
                }
            }
            GQL
        );
    }

    public function getCountQuery(): string
    {
        return <<<GQL
        query {
            endorsementCount
        }
        GQL;
    }

    protected function getFieldsFragment(): string
    {
        return <<<GQL
        fragment endorsementFields on Endorsement {
            endorsementId
            workId
            authorName
            authorRole
            authorOrcid
            authorInstitutionId
            url
            text
            endorsementOrdinal
        }
        GQL;
    }
}
