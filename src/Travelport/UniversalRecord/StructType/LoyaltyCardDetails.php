<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LoyaltyCardDetails StructType
 * Meta information extracted from the WSDL
 * - documentation: Passenger Loyalty card details
 * @subpackage Structs
 */
class LoyaltyCardDetails extends AbstractStructBase
{
    /**
     * The SupplierCode
     * Meta information extracted from the WSDL
     * - documentation: Carrier Code | 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: required
     * @var string
     */
    public string $SupplierCode;
    /**
     * The PriorityCode
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [a-zA-Z0-9]{1,1}
     * - use: required
     * @var string
     */
    public string $PriorityCode;
    /**
     * Constructor method for LoyaltyCardDetails
     * @uses LoyaltyCardDetails::setSupplierCode()
     * @uses LoyaltyCardDetails::setPriorityCode()
     * @param string $supplierCode
     * @param string $priorityCode
     */
    public function __construct(string $supplierCode, string $priorityCode)
    {
        $this
            ->setSupplierCode($supplierCode)
            ->setPriorityCode($priorityCode);
    }
    /**
     * Get SupplierCode value
     * @return string
     */
    public function getSupplierCode(): string
    {
        return $this->SupplierCode;
    }
    /**
     * Set SupplierCode value
     * @param string $supplierCode
     * @return \Travelport\UniversalRecord\StructType\LoyaltyCardDetails
     */
    public function setSupplierCode(string $supplierCode): self
    {
        $this->SupplierCode = $supplierCode;
        
        return $this;
    }
    /**
     * Get PriorityCode value
     * @return string
     */
    public function getPriorityCode(): string
    {
        return $this->PriorityCode;
    }
    /**
     * Set PriorityCode value
     * @param string $priorityCode
     * @return \Travelport\UniversalRecord\StructType\LoyaltyCardDetails
     */
    public function setPriorityCode(string $priorityCode): self
    {
        $this->PriorityCode = $priorityCode;
        
        return $this;
    }
}
