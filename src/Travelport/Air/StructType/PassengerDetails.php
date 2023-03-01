<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
    public string $Key;
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
    public string $Code;
    /**
     * The LoyaltyCardDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 9
     * - minOccurs: 0
     * - ref: LoyaltyCardDetails
     * @var \Travelport\Air\StructType\LoyaltyCardDetails[]
     */
    public ?array $LoyaltyCardDetails = null;
    /**
     * The Age
     * Meta information extracted from the WSDL
     * - documentation: Passenger age
     * @var int|null
     */
    public ?int $Age = null;
    /**
     * Constructor method for PassengerDetails
     * @uses PassengerDetails::setKey()
     * @uses PassengerDetails::setCode()
     * @uses PassengerDetails::setLoyaltyCardDetails()
     * @uses PassengerDetails::setAge()
     * @param string $key
     * @param string $code
     * @param \Travelport\Air\StructType\LoyaltyCardDetails[] $loyaltyCardDetails
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
     * @return \Travelport\Air\StructType\PassengerDetails
     */
    public function setKey(string $key): self
    {
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
     * @return \Travelport\Air\StructType\PassengerDetails
     */
    public function setCode(string $code): self
    {
        $this->Code = $code;
        
        return $this;
    }
    /**
     * Get LoyaltyCardDetails value
     * @return \Travelport\Air\StructType\LoyaltyCardDetails[]
     */
    public function getLoyaltyCardDetails(): ?array
    {
        return $this->LoyaltyCardDetails;
    }
    /**
     * Set LoyaltyCardDetails value
     * @param \Travelport\Air\StructType\LoyaltyCardDetails[] $loyaltyCardDetails
     * @return \Travelport\Air\StructType\PassengerDetails
     */
    public function setLoyaltyCardDetails(?array $loyaltyCardDetails = null): self
    {
        $this->LoyaltyCardDetails = $loyaltyCardDetails;
        
        return $this;
    }
    /**
     * Add item to LoyaltyCardDetails value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\LoyaltyCardDetails $item
     * @return \Travelport\Air\StructType\PassengerDetails
     */
    public function addToLoyaltyCardDetails(\Travelport\Air\StructType\LoyaltyCardDetails $item): self
    {
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
     * @return \Travelport\Air\StructType\PassengerDetails
     */
    public function setAge(?int $age = null): self
    {
        $this->Age = $age;
        
        return $this;
    }
}
