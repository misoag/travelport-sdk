<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RelatedTraveler StructType
 * Meta information extracted from the WSDL
 * - documentation: Traveler name detail | Traveler loyalty card detail | Detailed related Traveler information for pre pay profiles
 * @subpackage Structs
 */
class RelatedTraveler extends AbstractStructBase
{
    /**
     * The LoyaltyCard
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:LoyaltyCard
     * @var \Travelport\UniversalRecord\StructType\LoyaltyCard[]
     */
    public ?array $LoyaltyCard = null;
    /**
     * The PersonName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: PersonName
     * @var \Travelport\UniversalRecord\StructType\PersonName|null
     */
    public ?\Travelport\UniversalRecord\StructType\PersonName $PersonName = null;
    /**
     * The CreditsUsed
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\CreditsUsed|null
     */
    public ?\Travelport\UniversalRecord\StructType\CreditsUsed $CreditsUsed = null;
    /**
     * The StatusCode
     * Meta information extracted from the WSDL
     * - documentation: Traveler status code(One of Marked for deletion,Lapsed,Terminated,Active,Inactive)
     * - use: optional
     * @var string|null
     */
    public ?string $StatusCode = null;
    /**
     * The Relation
     * Meta information extracted from the WSDL
     * - documentation: Relation to the pre pay id. Example flight pass user
     * - use: optional
     * @var string|null
     */
    public ?string $Relation = null;
    /**
     * Constructor method for RelatedTraveler
     * @uses RelatedTraveler::setLoyaltyCard()
     * @uses RelatedTraveler::setPersonName()
     * @uses RelatedTraveler::setCreditsUsed()
     * @uses RelatedTraveler::setStatusCode()
     * @uses RelatedTraveler::setRelation()
     * @param \Travelport\UniversalRecord\StructType\LoyaltyCard[] $loyaltyCard
     * @param \Travelport\UniversalRecord\StructType\PersonName $personName
     * @param \Travelport\UniversalRecord\StructType\CreditsUsed $creditsUsed
     * @param string $statusCode
     * @param string $relation
     */
    public function __construct(?array $loyaltyCard = null, ?\Travelport\UniversalRecord\StructType\PersonName $personName = null, ?\Travelport\UniversalRecord\StructType\CreditsUsed $creditsUsed = null, ?string $statusCode = null, ?string $relation = null)
    {
        $this
            ->setLoyaltyCard($loyaltyCard)
            ->setPersonName($personName)
            ->setCreditsUsed($creditsUsed)
            ->setStatusCode($statusCode)
            ->setRelation($relation);
    }
    /**
     * Get LoyaltyCard value
     * @return \Travelport\UniversalRecord\StructType\LoyaltyCard[]
     */
    public function getLoyaltyCard(): ?array
    {
        return $this->LoyaltyCard;
    }
    /**
     * Set LoyaltyCard value
     * @param \Travelport\UniversalRecord\StructType\LoyaltyCard[] $loyaltyCard
     * @return \Travelport\UniversalRecord\StructType\RelatedTraveler
     */
    public function setLoyaltyCard(?array $loyaltyCard = null): self
    {
        $this->LoyaltyCard = $loyaltyCard;
        
        return $this;
    }
    /**
     * Add item to LoyaltyCard value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\LoyaltyCard $item
     * @return \Travelport\UniversalRecord\StructType\RelatedTraveler
     */
    public function addToLoyaltyCard(\Travelport\UniversalRecord\StructType\LoyaltyCard $item): self
    {
        $this->LoyaltyCard[] = $item;
        
        return $this;
    }
    /**
     * Get PersonName value
     * @return \Travelport\UniversalRecord\StructType\PersonName|null
     */
    public function getPersonName(): ?\Travelport\UniversalRecord\StructType\PersonName
    {
        return $this->PersonName;
    }
    /**
     * Set PersonName value
     * @param \Travelport\UniversalRecord\StructType\PersonName $personName
     * @return \Travelport\UniversalRecord\StructType\RelatedTraveler
     */
    public function setPersonName(?\Travelport\UniversalRecord\StructType\PersonName $personName = null): self
    {
        $this->PersonName = $personName;
        
        return $this;
    }
    /**
     * Get CreditsUsed value
     * @return \Travelport\UniversalRecord\StructType\CreditsUsed|null
     */
    public function getCreditsUsed(): ?\Travelport\UniversalRecord\StructType\CreditsUsed
    {
        return $this->CreditsUsed;
    }
    /**
     * Set CreditsUsed value
     * @param \Travelport\UniversalRecord\StructType\CreditsUsed $creditsUsed
     * @return \Travelport\UniversalRecord\StructType\RelatedTraveler
     */
    public function setCreditsUsed(?\Travelport\UniversalRecord\StructType\CreditsUsed $creditsUsed = null): self
    {
        $this->CreditsUsed = $creditsUsed;
        
        return $this;
    }
    /**
     * Get StatusCode value
     * @return string|null
     */
    public function getStatusCode(): ?string
    {
        return $this->StatusCode;
    }
    /**
     * Set StatusCode value
     * @param string $statusCode
     * @return \Travelport\UniversalRecord\StructType\RelatedTraveler
     */
    public function setStatusCode(?string $statusCode = null): self
    {
        $this->StatusCode = $statusCode;
        
        return $this;
    }
    /**
     * Get Relation value
     * @return string|null
     */
    public function getRelation(): ?string
    {
        return $this->Relation;
    }
    /**
     * Set Relation value
     * @param string $relation
     * @return \Travelport\UniversalRecord\StructType\RelatedTraveler
     */
    public function setRelation(?string $relation = null): self
    {
        $this->Relation = $relation;
        
        return $this;
    }
}
