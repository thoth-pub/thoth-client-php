<?php

namespace ThothApi\GraphQL\Inputs;

use ThothApi\GraphQL\Definition\InputObjectTypeDefinition;
use ThothApi\GraphQL\InputObject;

final class NewPublication extends InputObject
{
    /**
     * @return string
     */
    public function getPublicationType()
    {
        return $this->get('publicationType');
    }

    /**
     * @param string $value
     */
    public function setPublicationType($value): self
    {
        $this->set('publicationType', $value);
        return $this;
    }

    public function hasPublicationType(): bool
    {
        return $this->has('publicationType');
    }

    public function unsetPublicationType(): self
    {
        $this->remove('publicationType');
        return $this;
    }

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
     * @return string|null
     */
    public function getIsbn()
    {
        return $this->get('isbn');
    }

    /**
     * @param string|null $value
     */
    public function setIsbn($value): self
    {
        $this->set('isbn', $value);
        return $this;
    }

    public function hasIsbn(): bool
    {
        return $this->has('isbn');
    }

    public function unsetIsbn(): self
    {
        $this->remove('isbn');
        return $this;
    }

    /**
     * @return float|null
     */
    public function getWidthMm()
    {
        return $this->get('widthMm');
    }

    /**
     * @param float|null $value
     */
    public function setWidthMm($value): self
    {
        $this->set('widthMm', $value);
        return $this;
    }

    public function hasWidthMm(): bool
    {
        return $this->has('widthMm');
    }

    public function unsetWidthMm(): self
    {
        $this->remove('widthMm');
        return $this;
    }

    /**
     * @return float|null
     */
    public function getWidthIn()
    {
        return $this->get('widthIn');
    }

    /**
     * @param float|null $value
     */
    public function setWidthIn($value): self
    {
        $this->set('widthIn', $value);
        return $this;
    }

    public function hasWidthIn(): bool
    {
        return $this->has('widthIn');
    }

    public function unsetWidthIn(): self
    {
        $this->remove('widthIn');
        return $this;
    }

    /**
     * @return float|null
     */
    public function getHeightMm()
    {
        return $this->get('heightMm');
    }

    /**
     * @param float|null $value
     */
    public function setHeightMm($value): self
    {
        $this->set('heightMm', $value);
        return $this;
    }

    public function hasHeightMm(): bool
    {
        return $this->has('heightMm');
    }

    public function unsetHeightMm(): self
    {
        $this->remove('heightMm');
        return $this;
    }

    /**
     * @return float|null
     */
    public function getHeightIn()
    {
        return $this->get('heightIn');
    }

    /**
     * @param float|null $value
     */
    public function setHeightIn($value): self
    {
        $this->set('heightIn', $value);
        return $this;
    }

    public function hasHeightIn(): bool
    {
        return $this->has('heightIn');
    }

    public function unsetHeightIn(): self
    {
        $this->remove('heightIn');
        return $this;
    }

    /**
     * @return float|null
     */
    public function getDepthMm()
    {
        return $this->get('depthMm');
    }

    /**
     * @param float|null $value
     */
    public function setDepthMm($value): self
    {
        $this->set('depthMm', $value);
        return $this;
    }

    public function hasDepthMm(): bool
    {
        return $this->has('depthMm');
    }

    public function unsetDepthMm(): self
    {
        $this->remove('depthMm');
        return $this;
    }

    /**
     * @return float|null
     */
    public function getDepthIn()
    {
        return $this->get('depthIn');
    }

    /**
     * @param float|null $value
     */
    public function setDepthIn($value): self
    {
        $this->set('depthIn', $value);
        return $this;
    }

    public function hasDepthIn(): bool
    {
        return $this->has('depthIn');
    }

    public function unsetDepthIn(): self
    {
        $this->remove('depthIn');
        return $this;
    }

    /**
     * @return float|null
     */
    public function getWeightG()
    {
        return $this->get('weightG');
    }

    /**
     * @param float|null $value
     */
    public function setWeightG($value): self
    {
        $this->set('weightG', $value);
        return $this;
    }

    public function hasWeightG(): bool
    {
        return $this->has('weightG');
    }

    public function unsetWeightG(): self
    {
        $this->remove('weightG');
        return $this;
    }

    /**
     * @return float|null
     */
    public function getWeightOz()
    {
        return $this->get('weightOz');
    }

    /**
     * @param float|null $value
     */
    public function setWeightOz($value): self
    {
        $this->set('weightOz', $value);
        return $this;
    }

    public function hasWeightOz(): bool
    {
        return $this->has('weightOz');
    }

    public function unsetWeightOz(): self
    {
        $this->remove('weightOz');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAccessibilityStandard()
    {
        return $this->get('accessibilityStandard');
    }

    /**
     * @param string|null $value
     */
    public function setAccessibilityStandard($value): self
    {
        $this->set('accessibilityStandard', $value);
        return $this;
    }

    public function hasAccessibilityStandard(): bool
    {
        return $this->has('accessibilityStandard');
    }

    public function unsetAccessibilityStandard(): self
    {
        $this->remove('accessibilityStandard');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAccessibilityAdditionalStandard()
    {
        return $this->get('accessibilityAdditionalStandard');
    }

    /**
     * @param string|null $value
     */
    public function setAccessibilityAdditionalStandard($value): self
    {
        $this->set('accessibilityAdditionalStandard', $value);
        return $this;
    }

    public function hasAccessibilityAdditionalStandard(): bool
    {
        return $this->has('accessibilityAdditionalStandard');
    }

    public function unsetAccessibilityAdditionalStandard(): self
    {
        $this->remove('accessibilityAdditionalStandard');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAccessibilityException()
    {
        return $this->get('accessibilityException');
    }

    /**
     * @param string|null $value
     */
    public function setAccessibilityException($value): self
    {
        $this->set('accessibilityException', $value);
        return $this;
    }

    public function hasAccessibilityException(): bool
    {
        return $this->has('accessibilityException');
    }

    public function unsetAccessibilityException(): self
    {
        $this->remove('accessibilityException');
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
        return new InputObjectTypeDefinition('NewPublication', [
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'publicationType',
                'description' => null,
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'ENUM',
                        'name' => 'PublicationType',
                        'ofType' => null,
                    ],
                ],
                'defaultValue' => null,
            ]),
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
                'name' => 'isbn',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Isbn',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'widthMm',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Float',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'widthIn',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Float',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'heightMm',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Float',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'heightIn',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Float',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'depthMm',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Float',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'depthIn',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Float',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'weightG',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Float',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'weightOz',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Float',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'accessibilityStandard',
                'description' => null,
                'type' => [
                    'kind' => 'ENUM',
                    'name' => 'AccessibilityStandard',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'accessibilityAdditionalStandard',
                'description' => null,
                'type' => [
                    'kind' => 'ENUM',
                    'name' => 'AccessibilityStandard',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'accessibilityException',
                'description' => null,
                'type' => [
                    'kind' => 'ENUM',
                    'name' => 'AccessibilityException',
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
