<?php

namespace ThothApi\GraphQL\Inputs;

use ThothApi\GraphQL\Definition\InputObjectTypeDefinition;
use ThothApi\GraphQL\InputObject;

final class PatchWork extends InputObject
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
    public function getWorkType()
    {
        return $this->get('workType');
    }

    /**
     * @param string $value
     */
    public function setWorkType($value): self
    {
        $this->set('workType', $value);
        return $this;
    }

    public function hasWorkType(): bool
    {
        return $this->has('workType');
    }

    public function unsetWorkType(): self
    {
        $this->remove('workType');
        return $this;
    }

    /**
     * @return string
     */
    public function getWorkStatus()
    {
        return $this->get('workStatus');
    }

    /**
     * @param string $value
     */
    public function setWorkStatus($value): self
    {
        $this->set('workStatus', $value);
        return $this;
    }

    public function hasWorkStatus(): bool
    {
        return $this->has('workStatus');
    }

    public function unsetWorkStatus(): self
    {
        $this->remove('workStatus');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getReference()
    {
        return $this->get('reference');
    }

    /**
     * @param string|null $value
     */
    public function setReference($value): self
    {
        $this->set('reference', $value);
        return $this;
    }

    public function hasReference(): bool
    {
        return $this->has('reference');
    }

    public function unsetReference(): self
    {
        $this->remove('reference');
        return $this;
    }

    /**
     * @return int|null
     */
    public function getEdition()
    {
        return $this->get('edition');
    }

    /**
     * @param int|null $value
     */
    public function setEdition($value): self
    {
        $this->set('edition', $value);
        return $this;
    }

    public function hasEdition(): bool
    {
        return $this->has('edition');
    }

    public function unsetEdition(): self
    {
        $this->remove('edition');
        return $this;
    }

    /**
     * @return string
     */
    public function getImprintId()
    {
        return $this->get('imprintId');
    }

    /**
     * @param string $value
     */
    public function setImprintId($value): self
    {
        $this->set('imprintId', $value);
        return $this;
    }

    public function hasImprintId(): bool
    {
        return $this->has('imprintId');
    }

    public function unsetImprintId(): self
    {
        $this->remove('imprintId');
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
    public function getPublicationDate()
    {
        return $this->get('publicationDate');
    }

    /**
     * @param string|null $value
     */
    public function setPublicationDate($value): self
    {
        $this->set('publicationDate', $value);
        return $this;
    }

    public function hasPublicationDate(): bool
    {
        return $this->has('publicationDate');
    }

    public function unsetPublicationDate(): self
    {
        $this->remove('publicationDate');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getWithdrawnDate()
    {
        return $this->get('withdrawnDate');
    }

    /**
     * @param string|null $value
     */
    public function setWithdrawnDate($value): self
    {
        $this->set('withdrawnDate', $value);
        return $this;
    }

    public function hasWithdrawnDate(): bool
    {
        return $this->has('withdrawnDate');
    }

    public function unsetWithdrawnDate(): self
    {
        $this->remove('withdrawnDate');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPlace()
    {
        return $this->get('place');
    }

    /**
     * @param string|null $value
     */
    public function setPlace($value): self
    {
        $this->set('place', $value);
        return $this;
    }

    public function hasPlace(): bool
    {
        return $this->has('place');
    }

    public function unsetPlace(): self
    {
        $this->remove('place');
        return $this;
    }

    /**
     * @return int|null
     */
    public function getPageCount()
    {
        return $this->get('pageCount');
    }

    /**
     * @param int|null $value
     */
    public function setPageCount($value): self
    {
        $this->set('pageCount', $value);
        return $this;
    }

    public function hasPageCount(): bool
    {
        return $this->has('pageCount');
    }

    public function unsetPageCount(): self
    {
        $this->remove('pageCount');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPageBreakdown()
    {
        return $this->get('pageBreakdown');
    }

    /**
     * @param string|null $value
     */
    public function setPageBreakdown($value): self
    {
        $this->set('pageBreakdown', $value);
        return $this;
    }

    public function hasPageBreakdown(): bool
    {
        return $this->has('pageBreakdown');
    }

    public function unsetPageBreakdown(): self
    {
        $this->remove('pageBreakdown');
        return $this;
    }

    /**
     * @return int|null
     */
    public function getImageCount()
    {
        return $this->get('imageCount');
    }

    /**
     * @param int|null $value
     */
    public function setImageCount($value): self
    {
        $this->set('imageCount', $value);
        return $this;
    }

    public function hasImageCount(): bool
    {
        return $this->has('imageCount');
    }

    public function unsetImageCount(): self
    {
        $this->remove('imageCount');
        return $this;
    }

    /**
     * @return int|null
     */
    public function getTableCount()
    {
        return $this->get('tableCount');
    }

    /**
     * @param int|null $value
     */
    public function setTableCount($value): self
    {
        $this->set('tableCount', $value);
        return $this;
    }

    public function hasTableCount(): bool
    {
        return $this->has('tableCount');
    }

    public function unsetTableCount(): self
    {
        $this->remove('tableCount');
        return $this;
    }

    /**
     * @return int|null
     */
    public function getAudioCount()
    {
        return $this->get('audioCount');
    }

    /**
     * @param int|null $value
     */
    public function setAudioCount($value): self
    {
        $this->set('audioCount', $value);
        return $this;
    }

    public function hasAudioCount(): bool
    {
        return $this->has('audioCount');
    }

    public function unsetAudioCount(): self
    {
        $this->remove('audioCount');
        return $this;
    }

    /**
     * @return int|null
     */
    public function getVideoCount()
    {
        return $this->get('videoCount');
    }

    /**
     * @param int|null $value
     */
    public function setVideoCount($value): self
    {
        $this->set('videoCount', $value);
        return $this;
    }

    public function hasVideoCount(): bool
    {
        return $this->has('videoCount');
    }

    public function unsetVideoCount(): self
    {
        $this->remove('videoCount');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLicense()
    {
        return $this->get('license');
    }

    /**
     * @param string|null $value
     */
    public function setLicense($value): self
    {
        $this->set('license', $value);
        return $this;
    }

    public function hasLicense(): bool
    {
        return $this->has('license');
    }

    public function unsetLicense(): self
    {
        $this->remove('license');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCopyrightHolder()
    {
        return $this->get('copyrightHolder');
    }

    /**
     * @param string|null $value
     */
    public function setCopyrightHolder($value): self
    {
        $this->set('copyrightHolder', $value);
        return $this;
    }

    public function hasCopyrightHolder(): bool
    {
        return $this->has('copyrightHolder');
    }

    public function unsetCopyrightHolder(): self
    {
        $this->remove('copyrightHolder');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLandingPage()
    {
        return $this->get('landingPage');
    }

    /**
     * @param string|null $value
     */
    public function setLandingPage($value): self
    {
        $this->set('landingPage', $value);
        return $this;
    }

    public function hasLandingPage(): bool
    {
        return $this->has('landingPage');
    }

    public function unsetLandingPage(): self
    {
        $this->remove('landingPage');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLccn()
    {
        return $this->get('lccn');
    }

    /**
     * @param string|null $value
     */
    public function setLccn($value): self
    {
        $this->set('lccn', $value);
        return $this;
    }

    public function hasLccn(): bool
    {
        return $this->has('lccn');
    }

    public function unsetLccn(): self
    {
        $this->remove('lccn');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getOclc()
    {
        return $this->get('oclc');
    }

    /**
     * @param string|null $value
     */
    public function setOclc($value): self
    {
        $this->set('oclc', $value);
        return $this;
    }

    public function hasOclc(): bool
    {
        return $this->has('oclc');
    }

    public function unsetOclc(): self
    {
        $this->remove('oclc');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getGeneralNote()
    {
        return $this->get('generalNote');
    }

    /**
     * @param string|null $value
     */
    public function setGeneralNote($value): self
    {
        $this->set('generalNote', $value);
        return $this;
    }

    public function hasGeneralNote(): bool
    {
        return $this->has('generalNote');
    }

    public function unsetGeneralNote(): self
    {
        $this->remove('generalNote');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBibliographyNote()
    {
        return $this->get('bibliographyNote');
    }

    /**
     * @param string|null $value
     */
    public function setBibliographyNote($value): self
    {
        $this->set('bibliographyNote', $value);
        return $this;
    }

    public function hasBibliographyNote(): bool
    {
        return $this->has('bibliographyNote');
    }

    public function unsetBibliographyNote(): self
    {
        $this->remove('bibliographyNote');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getToc()
    {
        return $this->get('toc');
    }

    /**
     * @param string|null $value
     */
    public function setToc($value): self
    {
        $this->set('toc', $value);
        return $this;
    }

    public function hasToc(): bool
    {
        return $this->has('toc');
    }

    public function unsetToc(): self
    {
        $this->remove('toc');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getResourcesDescription()
    {
        return $this->get('resourcesDescription');
    }

    /**
     * @param string|null $value
     */
    public function setResourcesDescription($value): self
    {
        $this->set('resourcesDescription', $value);
        return $this;
    }

    public function hasResourcesDescription(): bool
    {
        return $this->has('resourcesDescription');
    }

    public function unsetResourcesDescription(): self
    {
        $this->remove('resourcesDescription');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCoverUrl()
    {
        return $this->get('coverUrl');
    }

    /**
     * @param string|null $value
     */
    public function setCoverUrl($value): self
    {
        $this->set('coverUrl', $value);
        return $this;
    }

    public function hasCoverUrl(): bool
    {
        return $this->has('coverUrl');
    }

    public function unsetCoverUrl(): self
    {
        $this->remove('coverUrl');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCoverCaption()
    {
        return $this->get('coverCaption');
    }

    /**
     * @param string|null $value
     */
    public function setCoverCaption($value): self
    {
        $this->set('coverCaption', $value);
        return $this;
    }

    public function hasCoverCaption(): bool
    {
        return $this->has('coverCaption');
    }

    public function unsetCoverCaption(): self
    {
        $this->remove('coverCaption');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFirstPage()
    {
        return $this->get('firstPage');
    }

    /**
     * @param string|null $value
     */
    public function setFirstPage($value): self
    {
        $this->set('firstPage', $value);
        return $this;
    }

    public function hasFirstPage(): bool
    {
        return $this->has('firstPage');
    }

    public function unsetFirstPage(): self
    {
        $this->remove('firstPage');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLastPage()
    {
        return $this->get('lastPage');
    }

    /**
     * @param string|null $value
     */
    public function setLastPage($value): self
    {
        $this->set('lastPage', $value);
        return $this;
    }

    public function hasLastPage(): bool
    {
        return $this->has('lastPage');
    }

    public function unsetLastPage(): self
    {
        $this->remove('lastPage');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPageInterval()
    {
        return $this->get('pageInterval');
    }

    /**
     * @param string|null $value
     */
    public function setPageInterval($value): self
    {
        $this->set('pageInterval', $value);
        return $this;
    }

    public function hasPageInterval(): bool
    {
        return $this->has('pageInterval');
    }

    public function unsetPageInterval(): self
    {
        $this->remove('pageInterval');
        return $this;
    }

    public static function definition(): InputObjectTypeDefinition
    {
        return new InputObjectTypeDefinition('PatchWork', [
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
                'name' => 'workType',
                'description' => null,
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'ENUM',
                        'name' => 'WorkType',
                        'ofType' => null,
                    ],
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'workStatus',
                'description' => null,
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'ENUM',
                        'name' => 'WorkStatus',
                        'ofType' => null,
                    ],
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'reference',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'edition',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Int',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'imprintId',
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
                'name' => 'publicationDate',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Date',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'withdrawnDate',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Date',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'place',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'pageCount',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Int',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'pageBreakdown',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'imageCount',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Int',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'tableCount',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Int',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'audioCount',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Int',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'videoCount',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Int',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'license',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'copyrightHolder',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'landingPage',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'lccn',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'oclc',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'generalNote',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'bibliographyNote',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'toc',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'resourcesDescription',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'coverUrl',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'coverCaption',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'firstPage',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'lastPage',
                'description' => null,
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'defaultValue' => null,
            ]),
            \ThothApi\GraphQL\Definition\ArgumentDefinition::fromIntrospection([
                'name' => 'pageInterval',
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
