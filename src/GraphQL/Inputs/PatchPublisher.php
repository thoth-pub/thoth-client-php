<?php

namespace ThothApi\GraphQL\Inputs;

use ThothApi\GraphQL\Definition\InputObjectTypeDefinition;
use ThothApi\GraphQL\InputObject;

final class PatchPublisher extends InputObject
{
    /**
     * @return string
     */
    public function getPublisherId()
    {
        return $this->get('publisherId');
    }

    /**
     * @param string $value
     */
    public function setPublisherId($value): self
    {
        $this->set('publisherId', $value);
        return $this;
    }

    public function hasPublisherId(): bool
    {
        return $this->has('publisherId');
    }

    public function unsetPublisherId(): self
    {
        $this->remove('publisherId');
        return $this;
    }

    /**
     * @return string
     */
    public function getPublisherName()
    {
        return $this->get('publisherName');
    }

    /**
     * @param string $value
     */
    public function setPublisherName($value): self
    {
        $this->set('publisherName', $value);
        return $this;
    }

    public function hasPublisherName(): bool
    {
        return $this->has('publisherName');
    }

    public function unsetPublisherName(): self
    {
        $this->remove('publisherName');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPublisherShortname()
    {
        return $this->get('publisherShortname');
    }

    /**
     * @param string|null $value
     */
    public function setPublisherShortname($value): self
    {
        $this->set('publisherShortname', $value);
        return $this;
    }

    public function hasPublisherShortname(): bool
    {
        return $this->has('publisherShortname');
    }

    public function unsetPublisherShortname(): self
    {
        $this->remove('publisherShortname');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPublisherUrl()
    {
        return $this->get('publisherUrl');
    }

    /**
     * @param string|null $value
     */
    public function setPublisherUrl($value): self
    {
        $this->set('publisherUrl', $value);
        return $this;
    }

    public function hasPublisherUrl(): bool
    {
        return $this->has('publisherUrl');
    }

    public function unsetPublisherUrl(): self
    {
        $this->remove('publisherUrl');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getZitadelId()
    {
        return $this->get('zitadelId');
    }

    /**
     * @param string|null $value
     */
    public function setZitadelId($value): self
    {
        $this->set('zitadelId', $value);
        return $this;
    }

    public function hasZitadelId(): bool
    {
        return $this->has('zitadelId');
    }

    public function unsetZitadelId(): self
    {
        $this->remove('zitadelId');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAccessibilityStatement()
    {
        return $this->get('accessibilityStatement');
    }

    /**
     * @param string|null $value
     */
    public function setAccessibilityStatement($value): self
    {
        $this->set('accessibilityStatement', $value);
        return $this;
    }

    public function hasAccessibilityStatement(): bool
    {
        return $this->has('accessibilityStatement');
    }

    public function unsetAccessibilityStatement(): self
    {
        $this->remove('accessibilityStatement');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAccessibilityReportUrl()
    {
        return $this->get('accessibilityReportUrl');
    }

    /**
     * @param string|null $value
     */
    public function setAccessibilityReportUrl($value): self
    {
        $this->set('accessibilityReportUrl', $value);
        return $this;
    }

    public function hasAccessibilityReportUrl(): bool
    {
        return $this->has('accessibilityReportUrl');
    }

    public function unsetAccessibilityReportUrl(): self
    {
        $this->remove('accessibilityReportUrl');
        return $this;
    }

    public static function definition(): InputObjectTypeDefinition
    {
        return new InputObjectTypeDefinition('PatchPublisher', [
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'publisherId',
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
                'name' => 'publisherName',
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
                'name' => 'publisherShortname',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'publisherUrl',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'zitadelId',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'accessibilityStatement',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'accessibilityReportUrl',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ])
        ]);
    }
}
