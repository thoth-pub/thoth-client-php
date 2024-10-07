<?php

namespace ThothClient\GraphQL\Queries;

class ReferenceQuery extends AbstractQuery
{
    public function getQuery(): string
    {
        return $this->buildQuery(
            <<<GQL
            query(\$referenceId: Uuid!) {
                reference(referenceId: \$referenceId) {
                    ...referenceFields
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
                \$field: ReferenceField = REFERENCE_ORDINAL
                \$direction: Direction = ASC
                \$publishers: [Uuid!] = []
            ) {
                references (
                    limit: \$limit
                    offset: \$offset
                    order: {
                        field: \$field
                        direction: \$direction
                    }
                    publishers: \$publishers
                ) {
                    ...referenceFields
                }
            }
            GQL
        );
    }

    public function getCountQuery(): string
    {
        return <<<GQL
        query {
            referenceCount
        }
        GQL;
    }

    protected function getFieldsFragment(): string
    {
        return <<<GQL
        fragment referenceFields on Reference {
            referenceId
            workId
            referenceOrdinal
            doi
            unstructuredCitation
            issn
            isbn
            journalTitle
            articleTitle
            seriesTitle
            volumeTitle
            edition
            author
            volume
            issue
            firstPage
            componentNumber
            standardDesignator
            standardsBodyName
            standardsBodyAcronym
            url
            publicationDate
            retrievalDate
        }
        GQL;
    }
}
