<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
     * @var \Travelport\Air\StructType\LoyaltyCard[]
     */
    public ?array $LoyaltyCard = null;
    /**
     * The PersonName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: PersonName
     * @var \Travelport\Air\StructType\PersonName|null
     */
    public ?\Travelport\Air\StructType\PersonName $PersonName = null;
    /**
     * The CreditsUsed
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\CreditsUsed|null
     */
    public ?\Travelport\Air\StructType\CreditsUsed $CreditsUsed = null;
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
     * @param \Travelport\Air\StructType\LoyaltyCard[] $loyaltyCard
     * @param \Travelport\Air\StructType\PersonName $personName
     * @param \Travelport\Air\StructType\CreditsUsed $creditsUsed
     * @param string $statusCode
     * @param string $relation
     */
    public function __construct(?array $loyaltyCard = null, ?\Travelport\Air\StructType\PersonName $personName = null, ?\Travelport\Air\StructType\CreditsUsed $creditsUsed = null, ?string $statusCode = null, ?string $relation = null)
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
     * @return \Travelport\Air\StructType\LoyaltyCard[]
     */
    public function getLoyaltyCard(): ?array
    {
        return $this->LoyaltyCard;
    }
    /**
     * Set LoyaltyCard value
     * @param \Travelport\Air\StructType\LoyaltyCard[] $loyaltyCard
     * @return \Travelport\Air\StructType\RelatedTraveler
     */
    public function setLoyaltyCard(?array $loyaltyCard = null): self
    {
        $this->LoyaltyCard = $loyaltyCard;
        
        return $this;
    }
    /**
     * Add item to LoyaltyCard value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\LoyaltyCard $item
     * @return \Travelport\Air\StructType\RelatedTraveler
     */
    public function addToLoyaltyCard(\Travelport\Air\StructType\LoyaltyCard $item): self
    {
        $this->LoyaltyCard[] = $item;
        
        return $this;
    }
    /**
     * Get PersonName value
     * @return \Travelport\Air\StructType\PersonName|null
     */
    public function getPersonName(): ?\Travelport\Air\StructType\PersonName
    {
        return $this->PersonName;
    }
    /**
     * Set PersonName value
     * @param \Travelport\Air\StructType\PersonName $personName
     * @return \Travelport\Air\StructType\RelatedTraveler
     */
    public function setPersonName(?\Travelport\Air\StructType\PersonName $personName = null): self
    {
        $this->PersonName = $personName;
        
        return $this;
    }
    /**
     * Get CreditsUsed value
     * @return \Travelport\Air\StructType\CreditsUsed|null
     */
    public function getCreditsUsed(): ?\Travelport\Air\StructType\CreditsUsed
    {
        return $this->CreditsUsed;
    }
    /**
     * Set CreditsUsed value
     * @param \Travelport\Air\StructType\CreditsUsed $creditsUsed
     * @return \Travelport\Air\StructType\RelatedTraveler
     */
    public function setCreditsUsed(?\Travelport\Air\StructType\CreditsUsed $creditsUsed = null): self
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
     * @return \Travelport\Air\StructType\RelatedTraveler
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
     * @return \Travelport\Air\StructType\RelatedTraveler
     */
    public function setRelation(?string $relation = null): self
    {
        $this->Relation = $relation;
        
        return $this;
    }
}
