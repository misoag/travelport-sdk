<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrePayCustomer StructType
 * Meta information extracted from the WSDL
 * - documentation: Customer loyalty card detail | Travelers related to this pre pay id | Customer email detail | Detailed customer information for searching pre pay profiles
 * @subpackage Structs
 */
class PrePayCustomer extends AbstractStructBase
{
    /**
     * The PersonName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: PersonName
     * @var \Travelport\Air\StructType\PersonName|null
     */
    public ?\Travelport\Air\StructType\PersonName $PersonName = null;
    /**
     * The Email
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:Email
     * @var \Travelport\Air\StructType\Email[]
     */
    public ?array $Email = null;
    /**
     * The Address
     * Meta information extracted from the WSDL
     * - documentation: Customer address detail
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\TypeStructuredAddress[]
     */
    public ?array $Address = null;
    /**
     * The RelatedTraveler
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: RelatedTraveler
     * @var \Travelport\Air\StructType\RelatedTraveler[]
     */
    public ?array $RelatedTraveler = null;
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
     * Constructor method for PrePayCustomer
     * @uses PrePayCustomer::setPersonName()
     * @uses PrePayCustomer::setEmail()
     * @uses PrePayCustomer::setAddress()
     * @uses PrePayCustomer::setRelatedTraveler()
     * @uses PrePayCustomer::setLoyaltyCard()
     * @param \Travelport\Air\StructType\PersonName $personName
     * @param \Travelport\Air\StructType\Email[] $email
     * @param \Travelport\Air\StructType\TypeStructuredAddress[] $address
     * @param \Travelport\Air\StructType\RelatedTraveler[] $relatedTraveler
     * @param \Travelport\Air\StructType\LoyaltyCard[] $loyaltyCard
     */
    public function __construct(?\Travelport\Air\StructType\PersonName $personName = null, ?array $email = null, ?array $address = null, ?array $relatedTraveler = null, ?array $loyaltyCard = null)
    {
        $this
            ->setPersonName($personName)
            ->setEmail($email)
            ->setAddress($address)
            ->setRelatedTraveler($relatedTraveler)
            ->setLoyaltyCard($loyaltyCard);
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
     * @return \Travelport\Air\StructType\PrePayCustomer
     */
    public function setPersonName(?\Travelport\Air\StructType\PersonName $personName = null): self
    {
        $this->PersonName = $personName;
        
        return $this;
    }
    /**
     * Get Email value
     * @return \Travelport\Air\StructType\Email[]
     */
    public function getEmail(): ?array
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param \Travelport\Air\StructType\Email[] $email
     * @return \Travelport\Air\StructType\PrePayCustomer
     */
    public function setEmail(?array $email = null): self
    {
        $this->Email = $email;
        
        return $this;
    }
    /**
     * Add item to Email value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\Email $item
     * @return \Travelport\Air\StructType\PrePayCustomer
     */
    public function addToEmail(\Travelport\Air\StructType\Email $item): self
    {
        $this->Email[] = $item;
        
        return $this;
    }
    /**
     * Get Address value
     * @return \Travelport\Air\StructType\TypeStructuredAddress[]
     */
    public function getAddress(): ?array
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param \Travelport\Air\StructType\TypeStructuredAddress[] $address
     * @return \Travelport\Air\StructType\PrePayCustomer
     */
    public function setAddress(?array $address = null): self
    {
        $this->Address = $address;
        
        return $this;
    }
    /**
     * Add item to Address value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\TypeStructuredAddress $item
     * @return \Travelport\Air\StructType\PrePayCustomer
     */
    public function addToAddress(\Travelport\Air\StructType\TypeStructuredAddress $item): self
    {
        $this->Address[] = $item;
        
        return $this;
    }
    /**
     * Get RelatedTraveler value
     * @return \Travelport\Air\StructType\RelatedTraveler[]
     */
    public function getRelatedTraveler(): ?array
    {
        return $this->RelatedTraveler;
    }
    /**
     * Set RelatedTraveler value
     * @param \Travelport\Air\StructType\RelatedTraveler[] $relatedTraveler
     * @return \Travelport\Air\StructType\PrePayCustomer
     */
    public function setRelatedTraveler(?array $relatedTraveler = null): self
    {
        $this->RelatedTraveler = $relatedTraveler;
        
        return $this;
    }
    /**
     * Add item to RelatedTraveler value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\RelatedTraveler $item
     * @return \Travelport\Air\StructType\PrePayCustomer
     */
    public function addToRelatedTraveler(\Travelport\Air\StructType\RelatedTraveler $item): self
    {
        $this->RelatedTraveler[] = $item;
        
        return $this;
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
     * @return \Travelport\Air\StructType\PrePayCustomer
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
     * @return \Travelport\Air\StructType\PrePayCustomer
     */
    public function addToLoyaltyCard(\Travelport\Air\StructType\LoyaltyCard $item): self
    {
        $this->LoyaltyCard[] = $item;
        
        return $this;
    }
}
