<?php

namespace ThothApi\GraphQL\Queries;

class BookReviewQuery extends AbstractQuery
{
    public function getQuery(): string
    {
        return $this->buildQuery(
            <<<GQL
            query(\$bookReviewId: Uuid!) {
                bookReview(bookReviewId: \$bookReviewId) {
                    ...bookReviewFields
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
                \$field: BookReviewField = REVIEW_ORDINAL
                \$direction: Direction = ASC
                \$publishers: [Uuid!] = []
            ) {
                bookReviews(
                    limit: \$limit
                    offset: \$offset
                    order: {
                        field: \$field
                        direction: \$direction
                    }
                    publishers: \$publishers
                ) {
                    ...bookReviewFields
                }
            }
            GQL
        );
    }

    public function getCountQuery(): string
    {
        return <<<GQL
        query {
            bookReviewCount
        }
        GQL;
    }

    protected function getFieldsFragment(): string
    {
        return <<<GQL
        fragment bookReviewFields on BookReview {
            bookReviewId
            workId
            title
            authorName
            reviewerOrcid
            reviewerInstitutionId
            url
            doi
            reviewDate
            journalName
            journalVolume
            journalNumber
            journalIssn
            pageRange
            text
            reviewOrdinal
        }
        GQL;
    }
}
