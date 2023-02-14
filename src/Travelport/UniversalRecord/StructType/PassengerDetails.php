<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PassengerDetails StructType
 * Meta information extracted from the WSDL
 * - documentation: Details of passenger
 * @subpackage Structs
 */
class PassengerDetails extends AbstractStructBase
{
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Passenger key | Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    protected string $Key;
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - documentation: Passenger code | Passenger Type Code (ADT, A2B5)
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 3
     * - use: required
     * @var string
     */
    protected string $Code;
    /**
     * The LoyaltyCardDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 9
     * - minOccurs: 0
     * - ref: LoyaltyCardDetails
     * @var \Travelport\UniversalRecord\StructType\LoyaltyCardDetails[]
     */
    protected ?array $LoyaltyCardDetails = null;
    /**
     * The Age
     * Meta information extracted from the WSDL
     * - documentation: Passenger age
     * @var int|null
     */
    protected ?int $Age = null;
    /**
     * Constructor method for PassengerDetails
     * @uses PassengerDetails::setKey()
     * @uses PassengerDetails::setCode()
     * @uses PassengerDetails::setLoyaltyCardDetails()
     * @uses PassengerDetails::setAge()
     * @param string $key
     * @param string $code
     * @param \Travelport\UniversalRecord\StructType\LoyaltyCardDetails[] $loyaltyCardDetails
     * @param int $age
     */
    public function __construct(string $key, string $code, ?array $loyaltyCardDetails = null, ?int $age = null)
    {
        $this
            ->setKey($key)
            ->setCode($code)
            ->setLoyaltyCardDetails($loyaltyCardDetails)
            ->setAge($age);
    }
    /**
     * Get Key value
     * @return string
     */
    public function getKey(): string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Travelport\UniversalRecord\StructType\PassengerDetails
     */
    public function setKey(string $key): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get Code value
     * @return string
     */
    public function getCode(): string
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Travelport\UniversalRecord\StructType\PassengerDetails
     */
    public function setCode(string $code): self
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($code) && mb_strlen((string) $code) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $code)), __LINE__);
        }
        // validation for constraint: minLength(3)
        if (!is_null($code) && mb_strlen((string) $code) < 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 3', mb_strlen((string) $code)), __LINE__);
        }
        $this->Code = $code;
        
        return $this;
    }
    /**
     * Get LoyaltyCardDetails value
     * @return \Travelport\UniversalRecord\StructType\LoyaltyCardDetails[]
     */
    public function getLoyaltyCardDetails(): ?array
    {
        return $this->LoyaltyCardDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setLoyaltyCardDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLoyaltyCardDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLoyaltyCardDetailsForArrayConstraintsFromSetLoyaltyCardDetails(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $passengerDetailsLoyaltyCardDetailsItem) {
            // validation for constraint: itemType
            if (!$passengerDetailsLoyaltyCardDetailsItem instanceof \Travelport\UniversalRecord\StructType\LoyaltyCardDetails) {
                $invalidValues[] = is_object($passengerDetailsLoyaltyCardDetailsItem) ? get_class($passengerDetailsLoyaltyCardDetailsItem) : sprintf('%s(%s)', gettype($passengerDetailsLoyaltyCardDetailsItem), var_export($passengerDetailsLoyaltyCardDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LoyaltyCardDetails property can only contain items of type \Travelport\UniversalRecord\StructType\LoyaltyCardDetails, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set LoyaltyCardDetails value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\LoyaltyCardDetails[] $loyaltyCardDetails
     * @return \Travelport\UniversalRecord\StructType\PassengerDetails
     */
    public function setLoyaltyCardDetails(?array $loyaltyCardDetails = null): self
    {
        // validation for constraint: array
        if ('' !== ($loyaltyCardDetailsArrayErrorMessage = self::validateLoyaltyCardDetailsForArrayConstraintsFromSetLoyaltyCardDetails($loyaltyCardDetails))) {
            throw new InvalidArgumentException($loyaltyCardDetailsArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(9)
        if (is_array($loyaltyCardDetails) && count($loyaltyCardDetails) > 9) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 9', count($loyaltyCardDetails)), __LINE__);
        }
        $this->LoyaltyCardDetails = $loyaltyCardDetails;
        
        return $this;
    }
    /**
     * Add item to LoyaltyCardDetails value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\LoyaltyCardDetails $item
     * @return \Travelport\UniversalRecord\StructType\PassengerDetails
     */
    public function addToLoyaltyCardDetails(\Travelport\UniversalRecord\StructType\LoyaltyCardDetails $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\LoyaltyCardDetails) {
            throw new InvalidArgumentException(sprintf('The LoyaltyCardDetails property can only contain items of type \Travelport\UniversalRecord\StructType\LoyaltyCardDetails, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(9)
        if (is_array($this->LoyaltyCardDetails) && count($this->LoyaltyCardDetails) >= 9) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 9', count($this->LoyaltyCardDetails)), __LINE__);
        }
        $this->LoyaltyCardDetails[] = $item;
        
        return $this;
    }
    /**
     * Get Age value
     * @return int|null
     */
    public function getAge(): ?int
    {
        return $this->Age;
    }
    /**
     * Set Age value
     * @param int $age
     * @return \Travelport\UniversalRecord\StructType\PassengerDetails
     */
    public function setAge(?int $age = null): self
    {
        // validation for constraint: int
        if (!is_null($age) && !(is_int($age) || ctype_digit($age))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($age, true), gettype($age)), __LINE__);
        }
        $this->Age = $age;
        
        return $this;
    }
}
