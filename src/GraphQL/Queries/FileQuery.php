<?php

namespace ThothApi\GraphQL\Queries;

class FileQuery extends AbstractQuery
{
    public function getQuery(): string
    {
        return $this->buildQuery(
            <<<GQL
            query(\$fileId: Uuid!) {
                file(fileId: \$fileId) {
                    ...fileFields
                }
            }
            GQL
        );
    }

    protected function getFieldsFragment(): string
    {
        return <<<GQL
        fragment fileFields on File {
            fileId
            fileType
            workId
            publicationId
            additionalResourceId
            workFeaturedVideoId
            objectKey
            cdnUrl
            mimeType
            bytes
            sha256
        }
        GQL;
    }
}
