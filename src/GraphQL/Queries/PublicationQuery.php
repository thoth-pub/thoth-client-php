<?php

namespace ThothClient\GraphQL\Queries;

class PublicationQuery extends AbstractQuery
{
    public function getQuery(): string
    {
        return $this->buildQuery(
            <<<GQL
            query(
                \$publicationId: Uuid!
                \$lengthUnit: LengthUnit = MM
                \$weightUnit: WeightUnit = G
            ) {
                publication(publicationId: \$publicationId) {
                    ...publicationFields
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
                \$filter: String = ""
                \$limit: Int = 100
                \$offset: Int = 0
                \$field: PublicationField = PUBLICATION_TYPE
                \$direction: Direction = ASC
                \$publicationTypes: [PublicationType!] = []
                \$publishers: [Uuid!] = []
                \$lengthUnit: LengthUnit = MM
                \$weightUnit: WeightUnit = G
            ) {
                publications(
                    limit: \$limit
                    filter: \$filter
                    offset: \$offset
                    order: {
                        field: \$field
                        direction: \$direction
                    }
                    publicationTypes: \$publicationTypes
                    publishers: \$publishers
                ) {
                    ...publicationFields
                }
            }
            GQL
        );
    }

    public function getCountQuery(): string
    {
        return <<<GQL
        query(
            \$filter: String = ""
            \$publicationTypes: [PublicationType!] = []
            \$publishers: [Uuid!] = []
        ) {
            publicationCount(
                filter: \$filter
                publicationTypes: \$publicationTypes
                publishers: \$publishers
            )
        }
        GQL;
    }

    protected function getFieldsFragment(): string
    {
        return <<<GQL
        fragment publicationFields on Publication {
            publicationId
            publicationType
            workId
            isbn
            width(units: \$lengthUnit)
            height(units: \$lengthUnit)
            depth(units: \$lengthUnit)
            weight(units: \$weightUnit)
        }
        GQL;
    }
}
