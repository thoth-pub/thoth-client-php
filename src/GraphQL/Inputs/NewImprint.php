<?php

namespace ThothApi\GraphQL\Inputs;

use ThothApi\GraphQL\Definition\InputObjectTypeDefinition;
use ThothApi\GraphQL\InputObject;

final class NewImprint extends InputObject
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
    public function getImprintName()
    {
        return $this->get('imprintName');
    }

    /**
     * @param string $value
     */
    public function setImprintName($value): self
    {
        $this->set('imprintName', $value);
        return $this;
    }

    public function hasImprintName(): bool
    {
        return $this->has('imprintName');
    }

    public function unsetImprintName(): self
    {
        $this->remove('imprintName');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getImprintUrl()
    {
        return $this->get('imprintUrl');
    }

    /**
     * @param string|null $value
     */
    public function setImprintUrl($value): self
    {
        $this->set('imprintUrl', $value);
        return $this;
    }

    public function hasImprintUrl(): bool
    {
        return $this->has('imprintUrl');
    }

    public function unsetImprintUrl(): self
    {
        $this->remove('imprintUrl');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCrossmarkDoi()
    {
        return $this->get('crossmarkDoi');
    }

    /**
     * @param string|null $value
     */
    public function setCrossmarkDoi($value): self
    {
        $this->set('crossmarkDoi', $value);
        return $this;
    }

    public function hasCrossmarkDoi(): bool
    {
        return $this->has('crossmarkDoi');
    }

    public function unsetCrossmarkDoi(): self
    {
        $this->remove('crossmarkDoi');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getS3Bucket()
    {
        return $this->get('s3Bucket');
    }

    /**
     * @param string|null $value
     */
    public function setS3Bucket($value): self
    {
        $this->set('s3Bucket', $value);
        return $this;
    }

    public function hasS3Bucket(): bool
    {
        return $this->has('s3Bucket');
    }

    public function unsetS3Bucket(): self
    {
        $this->remove('s3Bucket');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCdnDomain()
    {
        return $this->get('cdnDomain');
    }

    /**
     * @param string|null $value
     */
    public function setCdnDomain($value): self
    {
        $this->set('cdnDomain', $value);
        return $this;
    }

    public function hasCdnDomain(): bool
    {
        return $this->has('cdnDomain');
    }

    public function unsetCdnDomain(): self
    {
        $this->remove('cdnDomain');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCloudfrontDistId()
    {
        return $this->get('cloudfrontDistId');
    }

    /**
     * @param string|null $value
     */
    public function setCloudfrontDistId($value): self
    {
        $this->set('cloudfrontDistId', $value);
        return $this;
    }

    public function hasCloudfrontDistId(): bool
    {
        return $this->has('cloudfrontDistId');
    }

    public function unsetCloudfrontDistId(): self
    {
        $this->remove('cloudfrontDistId');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDefaultCurrency()
    {
        return $this->get('defaultCurrency');
    }

    /**
     * @param string|null $value
     */
    public function setDefaultCurrency($value): self
    {
        $this->set('defaultCurrency', $value);
        return $this;
    }

    public function hasDefaultCurrency(): bool
    {
        return $this->has('defaultCurrency');
    }

    public function unsetDefaultCurrency(): self
    {
        $this->remove('defaultCurrency');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDefaultPlace()
    {
        return $this->get('defaultPlace');
    }

    /**
     * @param string|null $value
     */
    public function setDefaultPlace($value): self
    {
        $this->set('defaultPlace', $value);
        return $this;
    }

    public function hasDefaultPlace(): bool
    {
        return $this->has('defaultPlace');
    }

    public function unsetDefaultPlace(): self
    {
        $this->remove('defaultPlace');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDefaultLocale()
    {
        return $this->get('defaultLocale');
    }

    /**
     * @param string|null $value
     */
    public function setDefaultLocale($value): self
    {
        $this->set('defaultLocale', $value);
        return $this;
    }

    public function hasDefaultLocale(): bool
    {
        return $this->has('defaultLocale');
    }

    public function unsetDefaultLocale(): self
    {
        $this->remove('defaultLocale');
        return $this;
    }

    public static function definition(): InputObjectTypeDefinition
    {
        return new InputObjectTypeDefinition('NewImprint', [
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
                'name' => 'imprintName',
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
                'name' => 'imprintUrl',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'crossmarkDoi',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Doi',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 's3Bucket',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'cdnDomain',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'cloudfrontDistId',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'defaultCurrency',
                'description' => null,
                'type' => [
                    'kind' => 'ENUM',
                    'name' => 'CurrencyCode',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'defaultPlace',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'defaultLocale',
                'description' => null,
                'type' => [
                    'kind' => 'ENUM',
                    'name' => 'LocaleCode',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ])
        ]);
    }
}
