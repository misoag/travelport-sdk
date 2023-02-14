<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
    protected string $SupplierCode;
    /**
     * The PriorityCode
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - pattern: [a-zA-Z0-9]{1,1}
     * - use: required
     * @var string
     */
    protected string $PriorityCode;
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
     * @return \Travelport\Util\StructType\LoyaltyCardDetails
     */
    public function setSupplierCode(string $supplierCode): self
    {
        // validation for constraint: string
        if (!is_null($supplierCode) && !is_string($supplierCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierCode, true), gettype($supplierCode)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($supplierCode) && mb_strlen((string) $supplierCode) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $supplierCode)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\LoyaltyCardDetails
     */
    public function setPriorityCode(string $priorityCode): self
    {
        // validation for constraint: string
        if (!is_null($priorityCode) && !is_string($priorityCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($priorityCode, true), gettype($priorityCode)), __LINE__);
        }
        // validation for constraint: pattern([a-zA-Z0-9]{1,1})
        if (!is_null($priorityCode) && !preg_match('/[a-zA-Z0-9]{1,1}/', $priorityCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[a-zA-Z0-9]{1,1}/', var_export($priorityCode, true)), __LINE__);
        }
        $this->PriorityCode = $priorityCode;
        
        return $this;
    }
}
