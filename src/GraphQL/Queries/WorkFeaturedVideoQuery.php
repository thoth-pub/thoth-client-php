<?php

namespace ThothApi\GraphQL\Queries;

class WorkFeaturedVideoQuery extends AbstractQuery
{
    public function getQuery(): string
    {
        return $this->buildQuery(
            <<<GQL
            query(\$workFeaturedVideoId: Uuid!) {
                workFeaturedVideo(workFeaturedVideoId: \$workFeaturedVideoId) {
                    ...workFeaturedVideoFields
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
                \$field: WorkFeaturedVideoField = UPDATED_AT
                \$direction: Direction = ASC
                \$publishers: [Uuid!] = []
            ) {
                workFeaturedVideos(
                    limit: \$limit
                    offset: \$offset
                    order: {
                        field: \$field
                        direction: \$direction
                    }
                    publishers: \$publishers
                ) {
                    ...workFeaturedVideoFields
                }
            }
            GQL
        );
    }

    public function getCountQuery(): string
    {
        return <<<GQL
        query {
            workFeaturedVideoCount
        }
        GQL;
    }

    protected function getFieldsFragment(): string
    {
        return <<<GQL
        fragment workFeaturedVideoFields on WorkFeaturedVideo {
            workFeaturedVideoId
            workId
            title
            url
            width
            height
        }
        GQL;
    }
}
