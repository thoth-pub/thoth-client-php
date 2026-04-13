<?php

namespace ThothApi\GraphQL\Models;

class AdditionalResource extends AbstractModel
{
    public function getAdditionalResourceId(): ?string
    {
        return $this->getData('workResourceId');
    }

    public function setAdditionalResourceId(?string $additionalResourceId): void
    {
        $this->setData('workResourceId', $additionalResourceId);
    }
}
