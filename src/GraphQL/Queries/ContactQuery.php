<?php

namespace ThothApi\GraphQL\Queries;

class ContactQuery extends AbstractQuery
{
    public function getQuery(): string
    {
        return $this->buildQuery(
            <<<GQL
            query(\$contactId: Uuid!) {
                contact(contactId: \$contactId) {
                    ...contactFields
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
                \$field: ContactField = EMAIL
                \$direction: Direction = ASC
                \$publishers: [Uuid!] = []
                \$contactTypes: [ContactType!] = []
            ) {
                contacts(
                    limit: \$limit
                    offset: \$offset
                    order: {
                        field: \$field
                        direction: \$direction
                    }
                    publishers: \$publishers
                    contactTypes: \$contactTypes
                ) {
                    ...contactFields
                }
            }
            GQL
        );
    }

    public function getCountQuery(): string
    {
        return <<<GQL
        query(\$contactTypes: [ContactType!] = []) {
            contactCount(contactTypes: \$contactTypes)
        }
        GQL;
    }

    protected function getFieldsFragment(): string
    {
        return <<<GQL
        fragment contactFields on Contact {
            contactId
            publisherId
            contactType
            email
        }
        GQL;
    }
}
