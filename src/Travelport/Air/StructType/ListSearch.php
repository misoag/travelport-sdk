<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListSearch StructType
 * Meta information extracted from the WSDL
 * - documentation: Customer loyalty card for searching flight pass content. | Customer name detail for searching flight pass content. | Provider: ACH.
 * @subpackage Structs
 */
class ListSearch extends AbstractStructBase
{
    /**
     * The StartFromResult
     * Meta information extracted from the WSDL
     * - documentation: Start index of the section of flight pass numbers that is being requested. | Used to browse beyond the maximum number of results specified with the MaxResults parameter. Acts as an offset to skip the specified number of PNRs from the
     * begining of the result set.
     * - base: xs:integer
     * - minInclusive: 1
     * - use: required
     * @var int
     */
    public int $StartFromResult;
    /**
     * The MaxResults
     * Meta information extracted from the WSDL
     * - documentation: Max Number of Flight Passes being requested for. | Used to limit the number of results returned, particularly in more general searches that may return a large result set.
     * - base: xs:integer
     * - maxInclusive: 200
     * - minInclusive: 1
     * - use: required
     * @var int
     */
    public int $MaxResults;
    /**
     * The PersonNameSearch
     * Meta information extracted from the WSDL
     * - choice: PersonNameSearch | LoyaltyCard
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 0
     * - ref: PersonNameSearch
     * @var \Travelport\Air\StructType\PersonNameSearch|null
     */
    public ?\Travelport\Air\StructType\PersonNameSearch $PersonNameSearch = null;
    /**
     * The LoyaltyCard
     * Meta information extracted from the WSDL
     * - choice: PersonNameSearch | LoyaltyCard
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 0
     * - maxOccurs: 999
     * - ref: common:LoyaltyCard
     * @var \Travelport\Air\StructType\LoyaltyCard[]
     */
    public ?array $LoyaltyCard = null;
    /**
     * Constructor method for ListSearch
     * @uses ListSearch::setStartFromResult()
     * @uses ListSearch::setMaxResults()
     * @uses ListSearch::setPersonNameSearch()
     * @uses ListSearch::setLoyaltyCard()
     * @param int $startFromResult
     * @param int $maxResults
     * @param \Travelport\Air\StructType\PersonNameSearch $personNameSearch
     * @param \Travelport\Air\StructType\LoyaltyCard[] $loyaltyCard
     */
    public function __construct(int $startFromResult, int $maxResults, ?\Travelport\Air\StructType\PersonNameSearch $personNameSearch = null, ?array $loyaltyCard = null)
    {
        $this
            ->setStartFromResult($startFromResult)
            ->setMaxResults($maxResults)
            ->setPersonNameSearch($personNameSearch)
            ->setLoyaltyCard($loyaltyCard);
    }
    /**
     * Get StartFromResult value
     * @return int
     */
    public function getStartFromResult(): int
    {
        return $this->StartFromResult;
    }
    /**
     * Set StartFromResult value
     * @param int $startFromResult
     * @return \Travelport\Air\StructType\ListSearch
     */
    public function setStartFromResult(int $startFromResult): self
    {
        $this->StartFromResult = $startFromResult;
        
        return $this;
    }
    /**
     * Get MaxResults value
     * @return int
     */
    public function getMaxResults(): int
    {
        return $this->MaxResults;
    }
    /**
     * Set MaxResults value
     * @param int $maxResults
     * @return \Travelport\Air\StructType\ListSearch
     */
    public function setMaxResults(int $maxResults): self
    {
        $this->MaxResults = $maxResults;
        
        return $this;
    }
    /**
     * Get PersonNameSearch value
     * @return \Travelport\Air\StructType\PersonNameSearch|null
     */
    public function getPersonNameSearch(): ?\Travelport\Air\StructType\PersonNameSearch
    {
        return $this->PersonNameSearch ?? null;
    }
    /**
     * Set PersonNameSearch value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\Air\StructType\PersonNameSearch $personNameSearch
     * @return \Travelport\Air\StructType\ListSearch
     */
    public function setPersonNameSearch(?\Travelport\Air\StructType\PersonNameSearch $personNameSearch = null): self
    {
        if (is_null($personNameSearch) || (is_array($personNameSearch) && empty($personNameSearch))) {
            unset($this->PersonNameSearch);
        } else {
            $this->PersonNameSearch = $personNameSearch;
        }
        
        return $this;
    }
    /**
     * Get LoyaltyCard value
     * @return \Travelport\Air\StructType\LoyaltyCard[]|null
     */
    public function getLoyaltyCard(): ?array
    {
        return $this->LoyaltyCard ?? null;
    }
    /**
     * Set LoyaltyCard value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\Air\StructType\LoyaltyCard[] $loyaltyCard
     * @return \Travelport\Air\StructType\ListSearch
     */
    public function setLoyaltyCard(?array $loyaltyCard = null): self
    {
        if (is_null($loyaltyCard) || (is_array($loyaltyCard) && empty($loyaltyCard))) {
            unset($this->LoyaltyCard);
        } else {
            $this->LoyaltyCard = $loyaltyCard;
        }
        
        return $this;
    }
    /**
     * Add item to LoyaltyCard value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\LoyaltyCard $item
     * @return \Travelport\Air\StructType\ListSearch
     */
    public function addToLoyaltyCard(\Travelport\Air\StructType\LoyaltyCard $item): self
    {
        $this->LoyaltyCard[] = $item;
        
        return $this;
    }
}
