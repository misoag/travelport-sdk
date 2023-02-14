<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompanyName StructType
 * Meta information extracted from the WSDL
 * - documentation: Supplier info that is specific to the Unique Id | The federal government body name must be provided in this element. This field is required by AC
 * @subpackage Structs
 */
class CompanyName extends AbstractStructBase
{
    /**
     * The SupplierCode
     * Meta information extracted from the WSDL
     * - documentation: 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: required
     * @var string
     */
    protected string $SupplierCode;
    /**
     * Constructor method for CompanyName
     * @uses CompanyName::setSupplierCode()
     * @param string $supplierCode
     */
    public function __construct(string $supplierCode)
    {
        $this
            ->setSupplierCode($supplierCode);
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
     * @return \Travelport\Util\StructType\CompanyName
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
}
