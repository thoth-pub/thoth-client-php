<?php

namespace ThothApi\GraphQL\Queries;

class ImprintQuery extends AbstractQuery
{
    public function getQuery(): string
    {
        return $this->buildQueryWithRestrictedFields(
            <<<'GQL'
            query($imprintId: Uuid!) {
                imprint(imprintId: $imprintId) {
                    ...imprintFields
                }
            }
            GQL,
            true
        );
    }

    public function getManyQuery(): string
    {
        return $this->getManyQueryWithRestrictedFields(false);
    }

    public function getManyQueryWithRestrictedFields(bool $includeRestrictedFields = false): string
    {
        return $this->buildQueryWithRestrictedFields(
            <<<'GQL'
            query(
                $limit: Int = 100
                $offset: Int = 0
                $filter: String = ""
                $field: ImprintField = IMPRINT_NAME
                $direction: Direction = ASC
                $publishers: [Uuid!] = []
            ) {
                imprints(
                    limit: $limit
                    offset: $offset
                    filter: $filter
                    order: {
                    field: $field
                    direction: $direction
                    }
                    publishers: $publishers
                ) {
                    ...imprintFields
                }
            }
            GQL,
            $includeRestrictedFields
        );
    }

    public function getCountQuery(): string
    {
        return <<<GQL
        query(
            \$filter: String = ""
            \$publishers: [Uuid!] = []
        ) {
            imprintCount(
                filter: \$filter
                publishers: \$publishers
            )
        }
        GQL;
    }

    protected function getFieldsFragment(): string
    {
        return $this->getFieldsFragmentWithRestrictedFields(true);
    }

    protected function getFieldsFragmentWithRestrictedFields(bool $includeRestrictedFields = false): string
    {
        $restrictedFields = $includeRestrictedFields ? <<<GQL
            s3Bucket
            cdnDomain
            cloudfrontDistId
        GQL : '';

        return <<<GQL
        fragment imprintFields on Imprint {
            imprintId
            publisherId
            imprintName
            imprintUrl
            crossmarkDoi
        {$restrictedFields}
            defaultCurrency
            defaultPlace
            defaultLocale
        }
        GQL;
    }

    private function buildQueryWithRestrictedFields(string $queryBody, bool $includeRestrictedFields): string
    {
        $fragment = $this->getFieldsFragmentWithRestrictedFields($includeRestrictedFields);
        return <<<GQL
        {$queryBody}
        {$fragment}
        GQL;
    }
}
