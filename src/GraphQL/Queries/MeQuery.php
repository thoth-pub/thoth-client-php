<?php

namespace ThothApi\GraphQL\Queries;

class MeQuery extends AbstractQuery
{
    public function getQuery(): string
    {
        return $this->buildQuery(
            <<<GQL
            query {
                me {
                    ...meFields
                }
            }
            GQL
        );
    }

    protected function getFieldsFragment(): string
    {
        return <<<GQL
        fragment meFields on Me {
            userId
            email
            firstName
            lastName
            isSuperuser
            publisherContexts {
                permissions {
                    publisherAdmin
                    workLifecycle
                    cdnWrite
                }
            }
        }
        GQL;
    }
}
