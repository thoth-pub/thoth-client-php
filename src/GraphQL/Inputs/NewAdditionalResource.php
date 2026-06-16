<?php

namespace ThothApi\GraphQL\Inputs;

use ThothApi\GraphQL\Definition\InputObjectTypeDefinition;
use ThothApi\GraphQL\InputObject;

final class NewAdditionalResource extends InputObject
{
    /**
     * @return string
     */
    public function getWorkId()
    {
        return $this->get('workId');
    }

    /**
     * @param string $value
     */
    public function setWorkId($value): self
    {
        $this->set('workId', $value);
        return $this;
    }

    public function hasWorkId(): bool
    {
        return $this->has('workId');
    }

    public function unsetWorkId(): self
    {
        $this->remove('workId');
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->get('title');
    }

    /**
     * @param string $value
     */
    public function setTitle($value): self
    {
        $this->set('title', $value);
        return $this;
    }

    public function hasTitle(): bool
    {
        return $this->has('title');
    }

    public function unsetTitle(): self
    {
        $this->remove('title');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescription()
    {
        return $this->get('description');
    }

    /**
     * @param string|null $value
     */
    public function setDescription($value): self
    {
        $this->set('description', $value);
        return $this;
    }

    public function hasDescription(): bool
    {
        return $this->has('description');
    }

    public function unsetDescription(): self
    {
        $this->remove('description');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAttribution()
    {
        return $this->get('attribution');
    }

    /**
     * @param string|null $value
     */
    public function setAttribution($value): self
    {
        $this->set('attribution', $value);
        return $this;
    }

    public function hasAttribution(): bool
    {
        return $this->has('attribution');
    }

    public function unsetAttribution(): self
    {
        $this->remove('attribution');
        return $this;
    }

    /**
     * @return string
     */
    public function getResourceType()
    {
        return $this->get('resourceType');
    }

    /**
     * @param string $value
     */
    public function setResourceType($value): self
    {
        $this->set('resourceType', $value);
        return $this;
    }

    public function hasResourceType(): bool
    {
        return $this->has('resourceType');
    }

    public function unsetResourceType(): self
    {
        $this->remove('resourceType');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDoi()
    {
        return $this->get('doi');
    }

    /**
     * @param string|null $value
     */
    public function setDoi($value): self
    {
        $this->set('doi', $value);
        return $this;
    }

    public function hasDoi(): bool
    {
        return $this->has('doi');
    }

    public function unsetDoi(): self
    {
        $this->remove('doi');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getHandle()
    {
        return $this->get('handle');
    }

    /**
     * @param string|null $value
     */
    public function setHandle($value): self
    {
        $this->set('handle', $value);
        return $this;
    }

    public function hasHandle(): bool
    {
        return $this->has('handle');
    }

    public function unsetHandle(): self
    {
        $this->remove('handle');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getUrl()
    {
        return $this->get('url');
    }

    /**
     * @param string|null $value
     */
    public function setUrl($value): self
    {
        $this->set('url', $value);
        return $this;
    }

    public function hasUrl(): bool
    {
        return $this->has('url');
    }

    public function unsetUrl(): self
    {
        $this->remove('url');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDate()
    {
        return $this->get('date');
    }

    /**
     * @param string|null $value
     */
    public function setDate($value): self
    {
        $this->set('date', $value);
        return $this;
    }

    public function hasDate(): bool
    {
        return $this->has('date');
    }

    public function unsetDate(): self
    {
        $this->remove('date');
        return $this;
    }

    /**
     * @return int
     */
    public function getResourceOrdinal()
    {
        return $this->get('resourceOrdinal');
    }

    /**
     * @param int $value
     */
    public function setResourceOrdinal($value): self
    {
        $this->set('resourceOrdinal', $value);
        return $this;
    }

    public function hasResourceOrdinal(): bool
    {
        return $this->has('resourceOrdinal');
    }

    public function unsetResourceOrdinal(): self
    {
        $this->remove('resourceOrdinal');
        return $this;
    }

    public static function definition(): InputObjectTypeDefinition
    {
        return new InputObjectTypeDefinition('NewAdditionalResource', [
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'workId',
                'description' => null,
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'SCALAR',
                        'name' => 'Uuid',
                        'ofType' => null,
                    ],
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'title',
                'description' => null,
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'SCALAR',
                        'name' => 'String',
                        'ofType' => null,
                    ],
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'description',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'attribution',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'resourceType',
                'description' => null,
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'ENUM',
                        'name' => 'ResourceType',
                        'ofType' => null,
                    ],
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'doi',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Doi',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'handle',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'url',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'date',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Date',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'resourceOrdinal',
                'description' => null,
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'SCALAR',
                        'name' => 'Int',
                        'ofType' => null,
                    ],
                ],
                'defaultValue' => null,
            ])
        ]);
    }
}
