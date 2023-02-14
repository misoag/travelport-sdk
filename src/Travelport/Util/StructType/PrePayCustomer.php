<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
     * @var \Travelport\Util\StructType\PersonName|null
     */
    protected ?\Travelport\Util\StructType\PersonName $PersonName = null;
    /**
     * The Email
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:Email
     * @var \Travelport\Util\StructType\Email[]
     */
    protected ?array $Email = null;
    /**
     * The Address
     * Meta information extracted from the WSDL
     * - documentation: Customer address detail
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\TypeStructuredAddress[]
     */
    protected ?array $Address = null;
    /**
     * The RelatedTraveler
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: RelatedTraveler
     * @var \Travelport\Util\StructType\RelatedTraveler[]
     */
    protected ?array $RelatedTraveler = null;
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
     * Constructor method for PrePayCustomer
     * @uses PrePayCustomer::setPersonName()
     * @uses PrePayCustomer::setEmail()
     * @uses PrePayCustomer::setAddress()
     * @uses PrePayCustomer::setRelatedTraveler()
     * @uses PrePayCustomer::setLoyaltyCard()
     * @param \Travelport\Util\StructType\PersonName $personName
     * @param \Travelport\Util\StructType\Email[] $email
     * @param \Travelport\Util\StructType\TypeStructuredAddress[] $address
     * @param \Travelport\Util\StructType\RelatedTraveler[] $relatedTraveler
     * @param \Travelport\Util\StructType\LoyaltyCard[] $loyaltyCard
     */
    public function __construct(?\Travelport\Util\StructType\PersonName $personName = null, ?array $email = null, ?array $address = null, ?array $relatedTraveler = null, ?array $loyaltyCard = null)
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
     * @return \Travelport\Util\StructType\PersonName|null
     */
    public function getPersonName(): ?\Travelport\Util\StructType\PersonName
    {
        return $this->PersonName;
    }
    /**
     * Set PersonName value
     * @param \Travelport\Util\StructType\PersonName $personName
     * @return \Travelport\Util\StructType\PrePayCustomer
     */
    public function setPersonName(?\Travelport\Util\StructType\PersonName $personName = null): self
    {
        $this->PersonName = $personName;
        
        return $this;
    }
    /**
     * Get Email value
     * @return \Travelport\Util\StructType\Email[]
     */
    public function getEmail(): ?array
    {
        return $this->Email;
    }
    /**
     * This method is responsible for validating the values passed to the setEmail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEmail method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEmailForArrayConstraintsFromSetEmail(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $prePayCustomerEmailItem) {
            // validation for constraint: itemType
            if (!$prePayCustomerEmailItem instanceof \Travelport\Util\StructType\Email) {
                $invalidValues[] = is_object($prePayCustomerEmailItem) ? get_class($prePayCustomerEmailItem) : sprintf('%s(%s)', gettype($prePayCustomerEmailItem), var_export($prePayCustomerEmailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Email property can only contain items of type \Travelport\Util\StructType\Email, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Email value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\Email[] $email
     * @return \Travelport\Util\StructType\PrePayCustomer
     */
    public function setEmail(?array $email = null): self
    {
        // validation for constraint: array
        if ('' !== ($emailArrayErrorMessage = self::validateEmailForArrayConstraintsFromSetEmail($email))) {
            throw new InvalidArgumentException($emailArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($email) && count($email) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($email)), __LINE__);
        }
        $this->Email = $email;
        
        return $this;
    }
    /**
     * Add item to Email value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\Email $item
     * @return \Travelport\Util\StructType\PrePayCustomer
     */
    public function addToEmail(\Travelport\Util\StructType\Email $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\Email) {
            throw new InvalidArgumentException(sprintf('The Email property can only contain items of type \Travelport\Util\StructType\Email, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Email) && count($this->Email) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Email)), __LINE__);
        }
        $this->Email[] = $item;
        
        return $this;
    }
    /**
     * Get Address value
     * @return \Travelport\Util\StructType\TypeStructuredAddress[]
     */
    public function getAddress(): ?array
    {
        return $this->Address;
    }
    /**
     * This method is responsible for validating the values passed to the setAddress method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAddress method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAddressForArrayConstraintsFromSetAddress(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $prePayCustomerAddressItem) {
            // validation for constraint: itemType
            if (!$prePayCustomerAddressItem instanceof \Travelport\Util\StructType\TypeStructuredAddress) {
                $invalidValues[] = is_object($prePayCustomerAddressItem) ? get_class($prePayCustomerAddressItem) : sprintf('%s(%s)', gettype($prePayCustomerAddressItem), var_export($prePayCustomerAddressItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Address property can only contain items of type \Travelport\Util\StructType\TypeStructuredAddress, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Address value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TypeStructuredAddress[] $address
     * @return \Travelport\Util\StructType\PrePayCustomer
     */
    public function setAddress(?array $address = null): self
    {
        // validation for constraint: array
        if ('' !== ($addressArrayErrorMessage = self::validateAddressForArrayConstraintsFromSetAddress($address))) {
            throw new InvalidArgumentException($addressArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($address) && count($address) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($address)), __LINE__);
        }
        $this->Address = $address;
        
        return $this;
    }
    /**
     * Add item to Address value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TypeStructuredAddress $item
     * @return \Travelport\Util\StructType\PrePayCustomer
     */
    public function addToAddress(\Travelport\Util\StructType\TypeStructuredAddress $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\TypeStructuredAddress) {
            throw new InvalidArgumentException(sprintf('The Address property can only contain items of type \Travelport\Util\StructType\TypeStructuredAddress, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Address) && count($this->Address) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Address)), __LINE__);
        }
        $this->Address[] = $item;
        
        return $this;
    }
    /**
     * Get RelatedTraveler value
     * @return \Travelport\Util\StructType\RelatedTraveler[]
     */
    public function getRelatedTraveler(): ?array
    {
        return $this->RelatedTraveler;
    }
    /**
     * This method is responsible for validating the values passed to the setRelatedTraveler method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRelatedTraveler method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRelatedTravelerForArrayConstraintsFromSetRelatedTraveler(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $prePayCustomerRelatedTravelerItem) {
            // validation for constraint: itemType
            if (!$prePayCustomerRelatedTravelerItem instanceof \Travelport\Util\StructType\RelatedTraveler) {
                $invalidValues[] = is_object($prePayCustomerRelatedTravelerItem) ? get_class($prePayCustomerRelatedTravelerItem) : sprintf('%s(%s)', gettype($prePayCustomerRelatedTravelerItem), var_export($prePayCustomerRelatedTravelerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RelatedTraveler property can only contain items of type \Travelport\Util\StructType\RelatedTraveler, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RelatedTraveler value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\RelatedTraveler[] $relatedTraveler
     * @return \Travelport\Util\StructType\PrePayCustomer
     */
    public function setRelatedTraveler(?array $relatedTraveler = null): self
    {
        // validation for constraint: array
        if ('' !== ($relatedTravelerArrayErrorMessage = self::validateRelatedTravelerForArrayConstraintsFromSetRelatedTraveler($relatedTraveler))) {
            throw new InvalidArgumentException($relatedTravelerArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($relatedTraveler) && count($relatedTraveler) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($relatedTraveler)), __LINE__);
        }
        $this->RelatedTraveler = $relatedTraveler;
        
        return $this;
    }
    /**
     * Add item to RelatedTraveler value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\RelatedTraveler $item
     * @return \Travelport\Util\StructType\PrePayCustomer
     */
    public function addToRelatedTraveler(\Travelport\Util\StructType\RelatedTraveler $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\RelatedTraveler) {
            throw new InvalidArgumentException(sprintf('The RelatedTraveler property can only contain items of type \Travelport\Util\StructType\RelatedTraveler, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->RelatedTraveler) && count($this->RelatedTraveler) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->RelatedTraveler)), __LINE__);
        }
        $this->RelatedTraveler[] = $item;
        
        return $this;
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
        foreach ($values as $prePayCustomerLoyaltyCardItem) {
            // validation for constraint: itemType
            if (!$prePayCustomerLoyaltyCardItem instanceof \Travelport\Util\StructType\LoyaltyCard) {
                $invalidValues[] = is_object($prePayCustomerLoyaltyCardItem) ? get_class($prePayCustomerLoyaltyCardItem) : sprintf('%s(%s)', gettype($prePayCustomerLoyaltyCardItem), var_export($prePayCustomerLoyaltyCardItem, true));
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
     * @return \Travelport\Util\StructType\PrePayCustomer
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
     * @return \Travelport\Util\StructType\PrePayCustomer
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
}
