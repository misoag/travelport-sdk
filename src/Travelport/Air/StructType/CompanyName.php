<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
    public string $SupplierCode;
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
     * @return \Travelport\Air\StructType\CompanyName
     */
    public function setSupplierCode(string $supplierCode): self
    {
        $this->SupplierCode = $supplierCode;
        
        return $this;
    }
}
