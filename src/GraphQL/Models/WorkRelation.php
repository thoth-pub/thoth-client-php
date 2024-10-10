<?php

namespace ThothApi\GraphQL\Models;

class WorkRelation extends AbstractModel
{
    public const RELATION_TYPE_REPLACES = 'REPLACES';
    public const RELATION_TYPE_HAS_TRANSLATION = 'HAS_TRANSLATION';
    public const RELATION_TYPE_HAS_PART = 'HAS_PART';
    public const RELATION_TYPE_HAS_CHILD = 'HAS_CHILD';
    public const RELATION_TYPE_IS_REPLACED_BY = 'IS_REPLACED_BY';
    public const RELATION_TYPE_IS_TRANSLATION_OF = 'IS_TRANSLATION_OF';
    public const RELATION_TYPE_IS_PART_OF = 'IS_PART_OF';
    public const RELATION_TYPE_IS_CHILD_OF = 'IS_CHILD_OF';

    public function getWorkRelationId(): ?string
    {
        return $this->getData('workRelationId');
    }

    public function setWorkRelationId(?string $workRelationId): void
    {
        $this->setData('workRelationId', $workRelationId);
    }

    public function getRelatorWorkId(): ?string
    {
        return $this->getData('relatorWorkId');
    }

    public function setRelatorWorkId(?string $relatorWorkId): void
    {
        $this->setData('relatorWorkId', $relatorWorkId);
    }

    public function getRelatedWorkId(): ?string
    {
        return $this->getData('relatedWorkId');
    }

    public function setRelatedWorkId(?string $relatedWorkId): void
    {
        $this->setData('relatedWorkId', $relatedWorkId);
    }

    public function getRelationType(): ?string
    {
        return $this->getData('relationType');
    }

    public function setRelationType(?string $relationType): void
    {
        $this->setData('relationType', $relationType);
    }

    public function getRelationOrdinal(): ?int
    {
        return $this->getData('relationOrdinal');
    }

    public function setRelationOrdinal(?int $relationOrdinal): void
    {
        $this->setData('relationOrdinal', $relationOrdinal);
    }
}
