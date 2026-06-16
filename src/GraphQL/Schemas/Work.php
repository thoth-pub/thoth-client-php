<?php

namespace ThothApi\GraphQL\Schemas;

use ThothApi\GraphQL\Definition\ObjectTypeDefinition;
use ThothApi\GraphQL\ObjectData;

final class Work extends ObjectData
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
     * @return string
     */
    public function getFullTitle()
    {
        return $this->get('fullTitle');
    }

    /**
     * @param string $value
     */
    public function setFullTitle($value): self
    {
        $this->set('fullTitle', $value);
        return $this;
    }

    public function hasFullTitle(): bool
    {
        return $this->has('fullTitle');
    }

    public function unsetFullTitle(): self
    {
        $this->remove('fullTitle');
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
    public function getSubtitle()
    {
        return $this->get('subtitle');
    }

    /**
     * @param string|null $value
     */
    public function setSubtitle($value): self
    {
        $this->set('subtitle', $value);
        return $this;
    }

    public function hasSubtitle(): bool
    {
        return $this->has('subtitle');
    }

    public function unsetSubtitle(): self
    {
        $this->remove('subtitle');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getShortAbstract()
    {
        return $this->get('shortAbstract');
    }

    /**
     * @param string|null $value
     */
    public function setShortAbstract($value): self
    {
        $this->set('shortAbstract', $value);
        return $this;
    }

    public function hasShortAbstract(): bool
    {
        return $this->has('shortAbstract');
    }

    public function unsetShortAbstract(): self
    {
        $this->remove('shortAbstract');
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLongAbstract()
    {
        return $this->get('longAbstract');
    }

    /**
     * @param string|null $value
     */
    public function setLongAbstract($value): self
    {
        $this->set('longAbstract', $value);
        return $this;
    }

    public function hasLongAbstract(): bool
    {
        return $this->has('longAbstract');
    }

    public function unsetLongAbstract(): self
    {
        $this->remove('longAbstract');
        return $this;
    }

    /**
     * @return Title[]
     */
    public function getTitles()
    {
        return $this->get('titles');
    }

    /**
     * @param Title[] $value
     */
    public function setTitles($value): self
    {
        $this->set('titles', $value);
        return $this;
    }

    public function hasTitles(): bool
    {
        return $this->has('titles');
    }

    public function unsetTitles(): self
    {
        $this->remove('titles');
        return $this;
    }

    /**
     * @return GraphQLAbstract[]
     */
    public function getAbstracts()
    {
        return $this->get('abstracts');
    }

    /**
     * @param GraphQLAbstract[] $value
     */
    public function setAbstracts($value): self
    {
        $this->set('abstracts', $value);
        return $this;
    }

    public function hasAbstracts(): bool
    {
        return $this->has('abstracts');
    }

    public function unsetAbstracts(): self
    {
        $this->remove('abstracts');
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
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->get('createdAt');
    }

    /**
     * @param string $value
     */
    public function setCreatedAt($value): self
    {
        $this->set('createdAt', $value);
        return $this;
    }

    public function hasCreatedAt(): bool
    {
        return $this->has('createdAt');
    }

    public function unsetCreatedAt(): self
    {
        $this->remove('createdAt');
        return $this;
    }

    /**
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->get('updatedAt');
    }

    /**
     * @param string $value
     */
    public function setUpdatedAt($value): self
    {
        $this->set('updatedAt', $value);
        return $this;
    }

    public function hasUpdatedAt(): bool
    {
        return $this->has('updatedAt');
    }

    public function unsetUpdatedAt(): self
    {
        $this->remove('updatedAt');
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

    /**
     * @return string
     */
    public function getUpdatedAtWithRelations()
    {
        return $this->get('updatedAtWithRelations');
    }

    /**
     * @param string $value
     */
    public function setUpdatedAtWithRelations($value): self
    {
        $this->set('updatedAtWithRelations', $value);
        return $this;
    }

    public function hasUpdatedAtWithRelations(): bool
    {
        return $this->has('updatedAtWithRelations');
    }

    public function unsetUpdatedAtWithRelations(): self
    {
        $this->remove('updatedAtWithRelations');
        return $this;
    }

    /**
     * @return Imprint
     */
    public function getImprint()
    {
        return $this->get('imprint');
    }

    /**
     * @param Imprint $value
     */
    public function setImprint($value): self
    {
        $this->set('imprint', $value);
        return $this;
    }

    public function hasImprint(): bool
    {
        return $this->has('imprint');
    }

    public function unsetImprint(): self
    {
        $this->remove('imprint');
        return $this;
    }

    /**
     * @return Contribution[]
     */
    public function getContributions()
    {
        return $this->get('contributions');
    }

    /**
     * @param Contribution[] $value
     */
    public function setContributions($value): self
    {
        $this->set('contributions', $value);
        return $this;
    }

    public function hasContributions(): bool
    {
        return $this->has('contributions');
    }

    public function unsetContributions(): self
    {
        $this->remove('contributions');
        return $this;
    }

    /**
     * @return Language[]
     */
    public function getLanguages()
    {
        return $this->get('languages');
    }

    /**
     * @param Language[] $value
     */
    public function setLanguages($value): self
    {
        $this->set('languages', $value);
        return $this;
    }

    public function hasLanguages(): bool
    {
        return $this->has('languages');
    }

    public function unsetLanguages(): self
    {
        $this->remove('languages');
        return $this;
    }

    /**
     * @return Publication[]
     */
    public function getPublications()
    {
        return $this->get('publications');
    }

    /**
     * @param Publication[] $value
     */
    public function setPublications($value): self
    {
        $this->set('publications', $value);
        return $this;
    }

    public function hasPublications(): bool
    {
        return $this->has('publications');
    }

    public function unsetPublications(): self
    {
        $this->remove('publications');
        return $this;
    }

    /**
     * @return Subject[]
     */
    public function getSubjects()
    {
        return $this->get('subjects');
    }

    /**
     * @param Subject[] $value
     */
    public function setSubjects($value): self
    {
        $this->set('subjects', $value);
        return $this;
    }

    public function hasSubjects(): bool
    {
        return $this->has('subjects');
    }

    public function unsetSubjects(): self
    {
        $this->remove('subjects');
        return $this;
    }

    /**
     * @return Funding[]
     */
    public function getFundings()
    {
        return $this->get('fundings');
    }

    /**
     * @param Funding[] $value
     */
    public function setFundings($value): self
    {
        $this->set('fundings', $value);
        return $this;
    }

    public function hasFundings(): bool
    {
        return $this->has('fundings');
    }

    public function unsetFundings(): self
    {
        $this->remove('fundings');
        return $this;
    }

    /**
     * @return Issue[]
     */
    public function getIssues()
    {
        return $this->get('issues');
    }

    /**
     * @param Issue[] $value
     */
    public function setIssues($value): self
    {
        $this->set('issues', $value);
        return $this;
    }

    public function hasIssues(): bool
    {
        return $this->has('issues');
    }

    public function unsetIssues(): self
    {
        $this->remove('issues');
        return $this;
    }

    /**
     * @return WorkRelation[]
     */
    public function getRelations()
    {
        return $this->get('relations');
    }

    /**
     * @param WorkRelation[] $value
     */
    public function setRelations($value): self
    {
        $this->set('relations', $value);
        return $this;
    }

    public function hasRelations(): bool
    {
        return $this->has('relations');
    }

    public function unsetRelations(): self
    {
        $this->remove('relations');
        return $this;
    }

    /**
     * @return File|null
     */
    public function getFrontcover()
    {
        return $this->get('frontcover');
    }

    /**
     * @param File|null $value
     */
    public function setFrontcover($value): self
    {
        $this->set('frontcover', $value);
        return $this;
    }

    public function hasFrontcover(): bool
    {
        return $this->has('frontcover');
    }

    public function unsetFrontcover(): self
    {
        $this->remove('frontcover');
        return $this;
    }

    /**
     * @return Reference[]
     */
    public function getReferences()
    {
        return $this->get('references');
    }

    /**
     * @param Reference[] $value
     */
    public function setReferences($value): self
    {
        $this->set('references', $value);
        return $this;
    }

    public function hasReferences(): bool
    {
        return $this->has('references');
    }

    public function unsetReferences(): self
    {
        $this->remove('references');
        return $this;
    }

    /**
     * @return WorkResource[]
     */
    public function getAdditionalResources()
    {
        return $this->get('additionalResources');
    }

    /**
     * @param WorkResource[] $value
     */
    public function setAdditionalResources($value): self
    {
        $this->set('additionalResources', $value);
        return $this;
    }

    public function hasAdditionalResources(): bool
    {
        return $this->has('additionalResources');
    }

    public function unsetAdditionalResources(): self
    {
        $this->remove('additionalResources');
        return $this;
    }

    /**
     * @return Award[]
     */
    public function getAwards()
    {
        return $this->get('awards');
    }

    /**
     * @param Award[] $value
     */
    public function setAwards($value): self
    {
        $this->set('awards', $value);
        return $this;
    }

    public function hasAwards(): bool
    {
        return $this->has('awards');
    }

    public function unsetAwards(): self
    {
        $this->remove('awards');
        return $this;
    }

    /**
     * @return Endorsement[]
     */
    public function getEndorsements()
    {
        return $this->get('endorsements');
    }

    /**
     * @param Endorsement[] $value
     */
    public function setEndorsements($value): self
    {
        $this->set('endorsements', $value);
        return $this;
    }

    public function hasEndorsements(): bool
    {
        return $this->has('endorsements');
    }

    public function unsetEndorsements(): self
    {
        $this->remove('endorsements');
        return $this;
    }

    /**
     * @return BookReview[]
     */
    public function getBookReviews()
    {
        return $this->get('bookReviews');
    }

    /**
     * @param BookReview[] $value
     */
    public function setBookReviews($value): self
    {
        $this->set('bookReviews', $value);
        return $this;
    }

    public function hasBookReviews(): bool
    {
        return $this->has('bookReviews');
    }

    public function unsetBookReviews(): self
    {
        $this->remove('bookReviews');
        return $this;
    }

    /**
     * @return WorkFeaturedVideo|null
     */
    public function getFeaturedVideo()
    {
        return $this->get('featuredVideo');
    }

    /**
     * @param WorkFeaturedVideo|null $value
     */
    public function setFeaturedVideo($value): self
    {
        $this->set('featuredVideo', $value);
        return $this;
    }

    public function hasFeaturedVideo(): bool
    {
        return $this->has('featuredVideo');
    }

    public function unsetFeaturedVideo(): self
    {
        $this->remove('featuredVideo');
        return $this;
    }

    public static function definition(): ObjectTypeDefinition
    {
        return new ObjectTypeDefinition('Work', [
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'workId',
                'description' => 'Thoth ID of the work',
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'SCALAR',
                        'name' => 'Uuid',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'workType',
                'description' => 'Type of the work',
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'ENUM',
                        'name' => 'WorkType',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'workStatus',
                'description' => 'Publication status of the work',
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'ENUM',
                        'name' => 'WorkStatus',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'fullTitle',
                'description' => 'Concatenation of title and subtitle with punctuation mark',
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'SCALAR',
                        'name' => 'String',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => true,
                'deprecationReason' => 'Please use Work `titles` field instead to get the correct full title in a multilingual manner',
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'title',
                'description' => 'Main title of the work (excluding subtitle)',
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'SCALAR',
                        'name' => 'String',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => true,
                'deprecationReason' => 'Please use Work `titles` field instead to get the correct title in a multilingual manner',
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'subtitle',
                'description' => 'Secondary title of the work (excluding main title)',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'isDeprecated' => true,
                'deprecationReason' => 'Please use Work `titles` field instead to get the correct sub_title in a multilingual manner',
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'shortAbstract',
                'description' => 'Short abstract of the work. Where a work has two different versions of the abstract, the truncated version should be entered here. Otherwise, it can be left blank. This field is not output in metadata formats; where relevant, Long Abstract is used instead.',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'isDeprecated' => true,
                'deprecationReason' => 'Please use Work `abstracts` field instead to get the correct short abstract in a multilingual manner',
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'longAbstract',
                'description' => 'Abstract of the work. Where a work has only one abstract, it should be entered here, and Short Abstract can be left blank. Long Abstract is output in metadata formats, and Short Abstract is not.',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'isDeprecated' => true,
                'deprecationReason' => 'Please use Work `abstracts` field instead to get the correct long abstract in a multilingual manner',
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'titles',
                'description' => 'Query titles by work ID',
                'args' => [
                    [
                        'name' => 'limit',
                        'description' => 'The number of items to return',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'Int',
                            'ofType' => null,
                        ],
                        'defaultValue' => '100',
                    ],
                    [
                        'name' => 'offset',
                        'description' => 'The number of items to skip',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'Int',
                            'ofType' => null,
                        ],
                        'defaultValue' => '0',
                    ],
                    [
                        'name' => 'filter',
                        'description' => 'A query string to search. This argument is a test, do not rely on it. At present it simply searches for case insensitive literals on title_, subtitle, full_title fields',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'String',
                            'ofType' => null,
                        ],
                        'defaultValue' => '""',
                    ],
                    [
                        'name' => 'order',
                        'description' => 'The order in which to sort the results',
                        'type' => [
                            'kind' => 'INPUT_OBJECT',
                            'name' => 'TitleOrderBy',
                            'ofType' => null,
                        ],
                        'defaultValue' => '{field: "CANONICAL", direction: "DESC"}',
                    ],
                    [
                        'name' => 'localeCodes',
                        'description' => 'If set, only shows results with these locale codes',
                        'type' => [
                            'kind' => 'LIST',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'NON_NULL',
                                'name' => null,
                                'ofType' => [
                                    'kind' => 'ENUM',
                                    'name' => 'LocaleCode',
                                    'ofType' => null,
                                ],
                            ],
                        ],
                        'defaultValue' => '[]',
                    ],
                    [
                        'name' => 'markupFormat',
                        'description' => 'If set, only shows results with this markup format',
                        'type' => [
                            'kind' => 'ENUM',
                            'name' => 'MarkupFormat',
                            'ofType' => null,
                        ],
                        'defaultValue' => '"JATS_XML"',
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'LIST',
                        'name' => null,
                        'ofType' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'OBJECT',
                                'name' => 'Title',
                                'ofType' => null,
                            ],
                        ],
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'abstracts',
                'description' => 'Query abstracts by work ID',
                'args' => [
                    [
                        'name' => 'limit',
                        'description' => 'The number of items to return',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'Int',
                            'ofType' => null,
                        ],
                        'defaultValue' => '100',
                    ],
                    [
                        'name' => 'offset',
                        'description' => 'The number of items to skip',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'Int',
                            'ofType' => null,
                        ],
                        'defaultValue' => '0',
                    ],
                    [
                        'name' => 'filter',
                        'description' => 'A query string to search. This argument is a test, do not rely on it. At present it simply searches for case insensitive literals on title_, subtitle, full_title fields',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'String',
                            'ofType' => null,
                        ],
                        'defaultValue' => '""',
                    ],
                    [
                        'name' => 'order',
                        'description' => 'The order in which to sort the results',
                        'type' => [
                            'kind' => 'INPUT_OBJECT',
                            'name' => 'AbstractOrderBy',
                            'ofType' => null,
                        ],
                        'defaultValue' => '{field: "CANONICAL", direction: "DESC"}',
                    ],
                    [
                        'name' => 'localeCodes',
                        'description' => 'If set, only shows results with these locale codes',
                        'type' => [
                            'kind' => 'LIST',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'NON_NULL',
                                'name' => null,
                                'ofType' => [
                                    'kind' => 'ENUM',
                                    'name' => 'LocaleCode',
                                    'ofType' => null,
                                ],
                            ],
                        ],
                        'defaultValue' => '[]',
                    ],
                    [
                        'name' => 'markupFormat',
                        'description' => 'If set, only shows results with this markup format',
                        'type' => [
                            'kind' => 'ENUM',
                            'name' => 'MarkupFormat',
                            'ofType' => null,
                        ],
                        'defaultValue' => '"JATS_XML"',
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'LIST',
                        'name' => null,
                        'ofType' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'OBJECT',
                                'name' => 'Abstract',
                                'ofType' => null,
                            ],
                        ],
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'reference',
                'description' => 'Internal reference code',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'edition',
                'description' => 'Edition number of the work (not applicable to chapters)',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Int',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'imprintId',
                'description' => 'Thoth ID of the work\'s imprint',
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'SCALAR',
                        'name' => 'Uuid',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'doi',
                'description' => 'Digital Object Identifier of the work as full URL, using the HTTPS scheme and the doi.org domain (e.g. https://doi.org/10.11647/obp.0001)',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Doi',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'publicationDate',
                'description' => 'Date the work was published',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Date',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'withdrawnDate',
                'description' => 'Date the work was withdrawn from publication. Only applies to out of print and withdrawn works.',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Date',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'place',
                'description' => 'Place of publication of the work',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'pageCount',
                'description' => 'Total number of pages in the work. In most cases, unnumbered pages (e.g. endpapers) should be omitted from this count.',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Int',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'pageBreakdown',
                'description' => 'Breakdown of work\'s page count into front matter, main content, and/or back matter (e.g. \'xi + 140\')',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'imageCount',
                'description' => 'Total number of images in the work',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Int',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'tableCount',
                'description' => 'Total number of tables in the work',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Int',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'audioCount',
                'description' => 'Total number of audio fragments in the work',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Int',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'videoCount',
                'description' => 'Total number of video fragments in the work',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'Int',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'license',
                'description' => 'URL of the license which applies to this work (frequently a Creative Commons license for open-access works)',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'copyrightHolder',
                'description' => 'Copyright holder of the work',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'landingPage',
                'description' => 'URL of the web page of the work',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'lccn',
                'description' => 'Library of Congress Control Number of the work (not applicable to chapters)',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'oclc',
                'description' => 'OCLC (WorldCat) Control Number of the work (not applicable to chapters)',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'generalNote',
                'description' => 'A general-purpose field used to include information that does not have a specific designated field',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'bibliographyNote',
                'description' => 'Indicates that the work contains a bibliography or other similar information',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'toc',
                'description' => 'Table of contents of the work (not applicable to chapters)',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'resourcesDescription',
                'description' => 'Description of additional resources linked to this work',
                'args' => [
                    [
                        'name' => 'markupFormat',
                        'description' => 'Markup format used for rendering resources description',
                        'type' => [
                            'kind' => 'ENUM',
                            'name' => 'MarkupFormat',
                            'ofType' => null,
                        ],
                        'defaultValue' => '"JATS_XML"',
                    ],
                ],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'coverUrl',
                'description' => 'URL of the work\'s cover image',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'coverCaption',
                'description' => 'Caption describing the work\'s cover image',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'createdAt',
                'description' => 'Date and time at which the work record was created',
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'SCALAR',
                        'name' => 'Timestamp',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'updatedAt',
                'description' => 'Date and time at which the work record was last updated',
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'SCALAR',
                        'name' => 'Timestamp',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'firstPage',
                'description' => 'Page number on which the work begins (only applicable to chapters)',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'lastPage',
                'description' => 'Page number on which the work ends (only applicable to chapters)',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'pageInterval',
                'description' => 'Concatenation of first page and last page with dash (only applicable to chapters)',
                'args' => [],
                'type' => [
                    'kind' => 'SCALAR',
                    'name' => 'String',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'updatedAtWithRelations',
                'description' => 'Date and time at which the work record or any of its linked records was last updated',
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'SCALAR',
                        'name' => 'Timestamp',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'imprint',
                'description' => 'Get this work\'s imprint',
                'args' => [],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'OBJECT',
                        'name' => 'Imprint',
                        'ofType' => null,
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'contributions',
                'description' => 'Get contributions linked to this work',
                'args' => [
                    [
                        'name' => 'limit',
                        'description' => 'The number of items to return',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'Int',
                            'ofType' => null,
                        ],
                        'defaultValue' => '100',
                    ],
                    [
                        'name' => 'offset',
                        'description' => 'The number of items to skip',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'Int',
                            'ofType' => null,
                        ],
                        'defaultValue' => '0',
                    ],
                    [
                        'name' => 'order',
                        'description' => 'The order in which to sort the results',
                        'type' => [
                            'kind' => 'INPUT_OBJECT',
                            'name' => 'ContributionOrderBy',
                            'ofType' => null,
                        ],
                        'defaultValue' => '{field: "CONTRIBUTION_TYPE", direction: "ASC"}',
                    ],
                    [
                        'name' => 'contributionTypes',
                        'description' => 'Specific types to filter by',
                        'type' => [
                            'kind' => 'LIST',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'NON_NULL',
                                'name' => null,
                                'ofType' => [
                                    'kind' => 'ENUM',
                                    'name' => 'ContributionType',
                                    'ofType' => null,
                                ],
                            ],
                        ],
                        'defaultValue' => '[]',
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'LIST',
                        'name' => null,
                        'ofType' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'OBJECT',
                                'name' => 'Contribution',
                                'ofType' => null,
                            ],
                        ],
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'languages',
                'description' => 'Get languages linked to this work',
                'args' => [
                    [
                        'name' => 'limit',
                        'description' => 'The number of items to return',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'Int',
                            'ofType' => null,
                        ],
                        'defaultValue' => '100',
                    ],
                    [
                        'name' => 'offset',
                        'description' => 'The number of items to skip',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'Int',
                            'ofType' => null,
                        ],
                        'defaultValue' => '0',
                    ],
                    [
                        'name' => 'order',
                        'description' => 'The order in which to sort the results',
                        'type' => [
                            'kind' => 'INPUT_OBJECT',
                            'name' => 'LanguageOrderBy',
                            'ofType' => null,
                        ],
                        'defaultValue' => '{field: "LANGUAGE_CODE", direction: "ASC"}',
                    ],
                    [
                        'name' => 'languageCodes',
                        'description' => 'Specific languages to filter by',
                        'type' => [
                            'kind' => 'LIST',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'NON_NULL',
                                'name' => null,
                                'ofType' => [
                                    'kind' => 'ENUM',
                                    'name' => 'LanguageCode',
                                    'ofType' => null,
                                ],
                            ],
                        ],
                        'defaultValue' => '[]',
                    ],
                    [
                        'name' => 'languageRelation',
                        'description' => '(deprecated) A specific relation to filter by',
                        'type' => [
                            'kind' => 'ENUM',
                            'name' => 'LanguageRelation',
                            'ofType' => null,
                        ],
                        'defaultValue' => null,
                    ],
                    [
                        'name' => 'languageRelations',
                        'description' => 'Specific relations to filter by',
                        'type' => [
                            'kind' => 'LIST',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'NON_NULL',
                                'name' => null,
                                'ofType' => [
                                    'kind' => 'ENUM',
                                    'name' => 'LanguageRelation',
                                    'ofType' => null,
                                ],
                            ],
                        ],
                        'defaultValue' => '[]',
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'LIST',
                        'name' => null,
                        'ofType' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'OBJECT',
                                'name' => 'Language',
                                'ofType' => null,
                            ],
                        ],
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'publications',
                'description' => 'Get publications linked to this work',
                'args' => [
                    [
                        'name' => 'limit',
                        'description' => 'The number of items to return',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'Int',
                            'ofType' => null,
                        ],
                        'defaultValue' => '100',
                    ],
                    [
                        'name' => 'offset',
                        'description' => 'The number of items to skip',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'Int',
                            'ofType' => null,
                        ],
                        'defaultValue' => '0',
                    ],
                    [
                        'name' => 'filter',
                        'description' => 'A query string to search. This argument is a test, do not rely on it. At present it simply searches for case insensitive literals on isbn',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'String',
                            'ofType' => null,
                        ],
                        'defaultValue' => '""',
                    ],
                    [
                        'name' => 'order',
                        'description' => 'The order in which to sort the results',
                        'type' => [
                            'kind' => 'INPUT_OBJECT',
                            'name' => 'PublicationOrderBy',
                            'ofType' => null,
                        ],
                        'defaultValue' => '{field: "PUBLICATION_TYPE", direction: "ASC"}',
                    ],
                    [
                        'name' => 'publicationTypes',
                        'description' => 'Specific types to filter by',
                        'type' => [
                            'kind' => 'LIST',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'NON_NULL',
                                'name' => null,
                                'ofType' => [
                                    'kind' => 'ENUM',
                                    'name' => 'PublicationType',
                                    'ofType' => null,
                                ],
                            ],
                        ],
                        'defaultValue' => '[]',
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'LIST',
                        'name' => null,
                        'ofType' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'OBJECT',
                                'name' => 'Publication',
                                'ofType' => null,
                            ],
                        ],
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'subjects',
                'description' => 'Get subjects linked to this work',
                'args' => [
                    [
                        'name' => 'limit',
                        'description' => 'The number of items to return',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'Int',
                            'ofType' => null,
                        ],
                        'defaultValue' => '100',
                    ],
                    [
                        'name' => 'offset',
                        'description' => 'The number of items to skip',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'Int',
                            'ofType' => null,
                        ],
                        'defaultValue' => '0',
                    ],
                    [
                        'name' => 'filter',
                        'description' => 'A query string to search. This argument is a test, do not rely on it. At present it simply searches for case insensitive literals on subject_code',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'String',
                            'ofType' => null,
                        ],
                        'defaultValue' => '""',
                    ],
                    [
                        'name' => 'order',
                        'description' => 'The order in which to sort the results',
                        'type' => [
                            'kind' => 'INPUT_OBJECT',
                            'name' => 'SubjectOrderBy',
                            'ofType' => null,
                        ],
                        'defaultValue' => '{field: "SUBJECT_TYPE", direction: "ASC"}',
                    ],
                    [
                        'name' => 'subjectTypes',
                        'description' => 'Specific types to filter by',
                        'type' => [
                            'kind' => 'LIST',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'NON_NULL',
                                'name' => null,
                                'ofType' => [
                                    'kind' => 'ENUM',
                                    'name' => 'SubjectType',
                                    'ofType' => null,
                                ],
                            ],
                        ],
                        'defaultValue' => '[]',
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'LIST',
                        'name' => null,
                        'ofType' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'OBJECT',
                                'name' => 'Subject',
                                'ofType' => null,
                            ],
                        ],
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'fundings',
                'description' => 'Get fundings linked to this work',
                'args' => [
                    [
                        'name' => 'limit',
                        'description' => 'The number of items to return',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'Int',
                            'ofType' => null,
                        ],
                        'defaultValue' => '100',
                    ],
                    [
                        'name' => 'offset',
                        'description' => 'The number of items to skip',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'Int',
                            'ofType' => null,
                        ],
                        'defaultValue' => '0',
                    ],
                    [
                        'name' => 'order',
                        'description' => 'The order in which to sort the results',
                        'type' => [
                            'kind' => 'INPUT_OBJECT',
                            'name' => 'FundingOrderBy',
                            'ofType' => null,
                        ],
                        'defaultValue' => '{field: "PROGRAM", direction: "ASC"}',
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'LIST',
                        'name' => null,
                        'ofType' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'OBJECT',
                                'name' => 'Funding',
                                'ofType' => null,
                            ],
                        ],
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'issues',
                'description' => 'Get issues linked to this work',
                'args' => [
                    [
                        'name' => 'limit',
                        'description' => 'The number of items to return',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'Int',
                            'ofType' => null,
                        ],
                        'defaultValue' => '100',
                    ],
                    [
                        'name' => 'offset',
                        'description' => 'The number of items to skip',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'Int',
                            'ofType' => null,
                        ],
                        'defaultValue' => '0',
                    ],
                    [
                        'name' => 'order',
                        'description' => 'The order in which to sort the results',
                        'type' => [
                            'kind' => 'INPUT_OBJECT',
                            'name' => 'IssueOrderBy',
                            'ofType' => null,
                        ],
                        'defaultValue' => '{field: "ISSUE_ORDINAL", direction: "ASC"}',
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'LIST',
                        'name' => null,
                        'ofType' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'OBJECT',
                                'name' => 'Issue',
                                'ofType' => null,
                            ],
                        ],
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'relations',
                'description' => 'Get other works related to this work',
                'args' => [
                    [
                        'name' => 'limit',
                        'description' => 'The number of items to return',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'Int',
                            'ofType' => null,
                        ],
                        'defaultValue' => '100',
                    ],
                    [
                        'name' => 'offset',
                        'description' => 'The number of items to skip',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'Int',
                            'ofType' => null,
                        ],
                        'defaultValue' => '0',
                    ],
                    [
                        'name' => 'order',
                        'description' => 'The order in which to sort the results',
                        'type' => [
                            'kind' => 'INPUT_OBJECT',
                            'name' => 'WorkRelationOrderBy',
                            'ofType' => null,
                        ],
                        'defaultValue' => '{field: "RELATION_TYPE", direction: "ASC"}',
                    ],
                    [
                        'name' => 'relationTypes',
                        'description' => 'Specific types to filter by',
                        'type' => [
                            'kind' => 'LIST',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'NON_NULL',
                                'name' => null,
                                'ofType' => [
                                    'kind' => 'ENUM',
                                    'name' => 'RelationType',
                                    'ofType' => null,
                                ],
                            ],
                        ],
                        'defaultValue' => '[]',
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'LIST',
                        'name' => null,
                        'ofType' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'OBJECT',
                                'name' => 'WorkRelation',
                                'ofType' => null,
                            ],
                        ],
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'frontcover',
                'description' => 'Get the front cover file for this work',
                'args' => [],
                'type' => [
                    'kind' => 'OBJECT',
                    'name' => 'File',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'references',
                'description' => 'Get references cited by this work',
                'args' => [
                    [
                        'name' => 'limit',
                        'description' => 'The number of items to return',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'Int',
                            'ofType' => null,
                        ],
                        'defaultValue' => '100',
                    ],
                    [
                        'name' => 'offset',
                        'description' => 'The number of items to skip',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'Int',
                            'ofType' => null,
                        ],
                        'defaultValue' => '0',
                    ],
                    [
                        'name' => 'filter',
                        'description' => 'A query string to search. This argument is a test, do not rely on it. At present it simply searches for case insensitive literals on doi, unstructured_citation, issn, isbn, journal_title, article_title, series_title, volume_title, author, standard_designator, standards_body_name, and standards_body_acronym',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'String',
                            'ofType' => null,
                        ],
                        'defaultValue' => '""',
                    ],
                    [
                        'name' => 'order',
                        'description' => 'The order in which to sort the results',
                        'type' => [
                            'kind' => 'INPUT_OBJECT',
                            'name' => 'ReferenceOrderBy',
                            'ofType' => null,
                        ],
                        'defaultValue' => '{field: "REFERENCE_ORDINAL", direction: "ASC"}',
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'LIST',
                        'name' => null,
                        'ofType' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'OBJECT',
                                'name' => 'Reference',
                                'ofType' => null,
                            ],
                        ],
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'additionalResources',
                'description' => 'Get additional resources linked to this work',
                'args' => [
                    [
                        'name' => 'limit',
                        'description' => 'The number of items to return',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'Int',
                            'ofType' => null,
                        ],
                        'defaultValue' => '50',
                    ],
                    [
                        'name' => 'offset',
                        'description' => 'The number of items to skip',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'Int',
                            'ofType' => null,
                        ],
                        'defaultValue' => '0',
                    ],
                    [
                        'name' => 'markupFormat',
                        'description' => 'Markup format used for rendering textual fields',
                        'type' => [
                            'kind' => 'ENUM',
                            'name' => 'MarkupFormat',
                            'ofType' => null,
                        ],
                        'defaultValue' => '"JATS_XML"',
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'LIST',
                        'name' => null,
                        'ofType' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'OBJECT',
                                'name' => 'WorkResource',
                                'ofType' => null,
                            ],
                        ],
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'awards',
                'description' => 'Get awards linked to this work',
                'args' => [
                    [
                        'name' => 'limit',
                        'description' => 'The number of items to return',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'Int',
                            'ofType' => null,
                        ],
                        'defaultValue' => '50',
                    ],
                    [
                        'name' => 'offset',
                        'description' => 'The number of items to skip',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'Int',
                            'ofType' => null,
                        ],
                        'defaultValue' => '0',
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'LIST',
                        'name' => null,
                        'ofType' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'OBJECT',
                                'name' => 'Award',
                                'ofType' => null,
                            ],
                        ],
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'endorsements',
                'description' => 'Get endorsements linked to this work',
                'args' => [
                    [
                        'name' => 'limit',
                        'description' => 'The number of items to return',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'Int',
                            'ofType' => null,
                        ],
                        'defaultValue' => '50',
                    ],
                    [
                        'name' => 'offset',
                        'description' => 'The number of items to skip',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'Int',
                            'ofType' => null,
                        ],
                        'defaultValue' => '0',
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'LIST',
                        'name' => null,
                        'ofType' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'OBJECT',
                                'name' => 'Endorsement',
                                'ofType' => null,
                            ],
                        ],
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'bookReviews',
                'description' => 'Get book reviews linked to this work',
                'args' => [
                    [
                        'name' => 'limit',
                        'description' => 'The number of items to return',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'Int',
                            'ofType' => null,
                        ],
                        'defaultValue' => '50',
                    ],
                    [
                        'name' => 'offset',
                        'description' => 'The number of items to skip',
                        'type' => [
                            'kind' => 'SCALAR',
                            'name' => 'Int',
                            'ofType' => null,
                        ],
                        'defaultValue' => '0',
                    ],
                ],
                'type' => [
                    'kind' => 'NON_NULL',
                    'name' => null,
                    'ofType' => [
                        'kind' => 'LIST',
                        'name' => null,
                        'ofType' => [
                            'kind' => 'NON_NULL',
                            'name' => null,
                            'ofType' => [
                                'kind' => 'OBJECT',
                                'name' => 'BookReview',
                                'ofType' => null,
                            ],
                        ],
                    ],
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ]),
            \ThothApi\GraphQL\Definition\FieldDefinition::fromIntrospection([
                'name' => 'featuredVideo',
                'description' => 'Get the featured video linked to this work',
                'args' => [],
                'type' => [
                    'kind' => 'OBJECT',
                    'name' => 'WorkFeaturedVideo',
                    'ofType' => null,
                ],
                'isDeprecated' => false,
                'deprecationReason' => null,
            ])
        ]);
    }
}
