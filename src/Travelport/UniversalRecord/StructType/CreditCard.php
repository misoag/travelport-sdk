<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditCard StructType
 * Meta information extracted from the WSDL
 * - documentation: Container for all credit card information.
 * @subpackage Structs
 */
class CreditCard extends TypeCreditCardType
{
    /**
     * The ProfileID
     * Meta information extracted from the WSDL
     * - documentation: The unique ID of the profile that contains the payment details to use.
     * - type: xs:string
     * @var string|null
     */
    public ?string $ProfileID = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: The Key assigned to the payment details value from the specified profile. | Reference type
     * - base: xs:string
     * - type: typeRef
     * @var string|null
     */
    public ?string $Key = null;
    /**
     * Constructor method for CreditCard
     * @uses CreditCard::setProfileID()
     * @uses CreditCard::setKey()
     * @param string $profileID
     * @param string $key
     */
    public function __construct(?string $profileID = null, ?string $key = null)
    {
        $this
            ->setProfileID($profileID)
            ->setKey($key);
    }
    /**
     * Get ProfileID value
     * @return string|null
     */
    public function getProfileID(): ?string
    {
        return $this->ProfileID;
    }
    /**
     * Set ProfileID value
     * @param string $profileID
     * @return \Travelport\UniversalRecord\StructType\CreditCard
     */
    public function setProfileID(?string $profileID = null): self
    {
        $this->ProfileID = $profileID;
        
        return $this;
    }
    /**
     * Get Key value
     * @return string|null
     */
    public function getKey(): ?string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Travelport\UniversalRecord\StructType\CreditCard
     */
    public function setKey(?string $key = null): self
    {
        $this->Key = $key;
        
        return $this;
    }
}
