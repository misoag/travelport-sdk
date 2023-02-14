<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
     * @var \Travelport\Util\StructType\LoyaltyCard[]
     */
    protected ?array $LoyaltyCard = null;
    /**
     * The PersonName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: PersonName
     * @var \Travelport\Util\StructType\PersonName|null
     */
    protected ?\Travelport\Util\StructType\PersonName $PersonName = null;
    /**
     * The CreditsUsed
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\CreditsUsed|null
     */
    protected ?\Travelport\Util\StructType\CreditsUsed $CreditsUsed = null;
    /**
     * The StatusCode
     * Meta information extracted from the WSDL
     * - documentation: Traveler status code(One of Marked for deletion,Lapsed,Terminated,Active,Inactive)
     * - use: optional
     * @var string|null
     */
    protected ?string $StatusCode = null;
    /**
     * The Relation
     * Meta information extracted from the WSDL
     * - documentation: Relation to the pre pay id. Example flight pass user
     * - use: optional
     * @var string|null
     */
    protected ?string $Relation = null;
    /**
     * Constructor method for RelatedTraveler
     * @uses RelatedTraveler::setLoyaltyCard()
     * @uses RelatedTraveler::setPersonName()
     * @uses RelatedTraveler::setCreditsUsed()
     * @uses RelatedTraveler::setStatusCode()
     * @uses RelatedTraveler::setRelation()
     * @param \Travelport\Util\StructType\LoyaltyCard[] $loyaltyCard
     * @param \Travelport\Util\StructType\PersonName $personName
     * @param \Travelport\Util\StructType\CreditsUsed $creditsUsed
     * @param string $statusCode
     * @param string $relation
     */
    public function __construct(?array $loyaltyCard = null, ?\Travelport\Util\StructType\PersonName $personName = null, ?\Travelport\Util\StructType\CreditsUsed $creditsUsed = null, ?string $statusCode = null, ?string $relation = null)
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
     * @return \Travelport\Util\StructType\LoyaltyCard[]
     */
    public function getLoyaltyCard(): ?array
    {
        return $this->LoyaltyCard;
    }
    /**
     * This method is responsible for validating the values passed to the setLoyaltyCard method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLoyaltyCard method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLoyaltyCardForArrayConstraintsFromSetLoyaltyCard(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $relatedTravelerLoyaltyCardItem) {
            // validation for constraint: itemType
            if (!$relatedTravelerLoyaltyCardItem instanceof \Travelport\Util\StructType\LoyaltyCard) {
                $invalidValues[] = is_object($relatedTravelerLoyaltyCardItem) ? get_class($relatedTravelerLoyaltyCardItem) : sprintf('%s(%s)', gettype($relatedTravelerLoyaltyCardItem), var_export($relatedTravelerLoyaltyCardItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LoyaltyCard property can only contain items of type \Travelport\Util\StructType\LoyaltyCard, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set LoyaltyCard value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\LoyaltyCard[] $loyaltyCard
     * @return \Travelport\Util\StructType\RelatedTraveler
     */
    public function setLoyaltyCard(?array $loyaltyCard = null): self
    {
        // validation for constraint: array
        if ('' !== ($loyaltyCardArrayErrorMessage = self::validateLoyaltyCardForArrayConstraintsFromSetLoyaltyCard($loyaltyCard))) {
            throw new InvalidArgumentException($loyaltyCardArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($loyaltyCard) && count($loyaltyCard) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($loyaltyCard)), __LINE__);
        }
        $this->LoyaltyCard = $loyaltyCard;
        
        return $this;
    }
    /**
     * Add item to LoyaltyCard value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\LoyaltyCard $item
     * @return \Travelport\Util\StructType\RelatedTraveler
     */
    public function addToLoyaltyCard(\Travelport\Util\StructType\LoyaltyCard $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\LoyaltyCard) {
            throw new InvalidArgumentException(sprintf('The LoyaltyCard property can only contain items of type \Travelport\Util\StructType\LoyaltyCard, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->LoyaltyCard) && count($this->LoyaltyCard) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->LoyaltyCard)), __LINE__);
        }
        $this->LoyaltyCard[] = $item;
        
        return $this;
    }
    /**
     * Get PersonName value
     * @return \Travelport\Util\StructType\PersonName|null
     */
    public function getPersonName(): ?\Travelport\Util\StructType\PersonName
    {
        return $this->PersonName;
    }
    /**
     * Set PersonName value
     * @param \Travelport\Util\StructType\PersonName $personName
     * @return \Travelport\Util\StructType\RelatedTraveler
     */
    public function setPersonName(?\Travelport\Util\StructType\PersonName $personName = null): self
    {
        $this->PersonName = $personName;
        
        return $this;
    }
    /**
     * Get CreditsUsed value
     * @return \Travelport\Util\StructType\CreditsUsed|null
     */
    public function getCreditsUsed(): ?\Travelport\Util\StructType\CreditsUsed
    {
        return $this->CreditsUsed;
    }
    /**
     * Set CreditsUsed value
     * @param \Travelport\Util\StructType\CreditsUsed $creditsUsed
     * @return \Travelport\Util\StructType\RelatedTraveler
     */
    public function setCreditsUsed(?\Travelport\Util\StructType\CreditsUsed $creditsUsed = null): self
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
     * @return \Travelport\Util\StructType\RelatedTraveler
     */
    public function setStatusCode(?string $statusCode = null): self
    {
        // validation for constraint: string
        if (!is_null($statusCode) && !is_string($statusCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($statusCode, true), gettype($statusCode)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\RelatedTraveler
     */
    public function setRelation(?string $relation = null): self
    {
        // validation for constraint: string
        if (!is_null($relation) && !is_string($relation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($relation, true), gettype($relation)), __LINE__);
        }
        $this->Relation = $relation;
        
        return $this;
    }
}
