<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentInformation StructType
 * Meta information extracted from the WSDL
 * - documentation: The payment information for a vehicle reservation.
 * @subpackage Structs
 */
class PaymentInformation extends TypePaymentInformation
{
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $Key = null;
    /**
     * Constructor method for PaymentInformation
     * @uses PaymentInformation::setKey()
     * @param string $key
     */
    public function __construct(?string $key = null)
    {
        $this
            ->setKey($key);
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
     * @return \Travelport\UniversalRecord\StructType\PaymentInformation
     */
    public function setKey(?string $key = null): self
    {
        $this->Key = $key;
        
        return $this;
    }
}
