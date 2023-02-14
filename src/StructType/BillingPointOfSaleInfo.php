<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BillingPointOfSaleInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Point of Sale information for Billing
 * @subpackage Structs
 */
class BillingPointOfSaleInfo extends AbstractStructBase
{
    /**
     * The OriginApplication
     * Meta information extracted from the WSDL
     * - documentation: Name of the Point of Sale application which initiated the Request.This information will be provided as part of the provisioning of the user.
     * - use: required
     * @var string
     */
    protected string $OriginApplication;
    /**
     * The CIDBNumber
     * Meta information extracted from the WSDL
     * - base: xs:integer
     * - pattern: \d{10}
     * - use: optional
     * @var int|null
     */
    protected ?int $CIDBNumber = null;
    /**
     * Constructor method for BillingPointOfSaleInfo
     * @uses BillingPointOfSaleInfo::setOriginApplication()
     * @uses BillingPointOfSaleInfo::setCIDBNumber()
     * @param string $originApplication
     * @param int $cIDBNumber
     */
    public function __construct(string $originApplication, ?int $cIDBNumber = null)
    {
        $this
            ->setOriginApplication($originApplication)
            ->setCIDBNumber($cIDBNumber);
    }
    /**
     * Get OriginApplication value
     * @return string
     */
    public function getOriginApplication(): string
    {
        return $this->OriginApplication;
    }
    /**
     * Set OriginApplication value
     * @param string $originApplication
     * @return \StructType\BillingPointOfSaleInfo
     */
    public function setOriginApplication(string $originApplication): self
    {
        // validation for constraint: string
        if (!is_null($originApplication) && !is_string($originApplication)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originApplication, true), gettype($originApplication)), __LINE__);
        }
        $this->OriginApplication = $originApplication;
        
        return $this;
    }
    /**
     * Get CIDBNumber value
     * @return int|null
     */
    public function getCIDBNumber(): ?int
    {
        return $this->CIDBNumber;
    }
    /**
     * Set CIDBNumber value
     * @param int $cIDBNumber
     * @return \StructType\BillingPointOfSaleInfo
     */
    public function setCIDBNumber(?int $cIDBNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($cIDBNumber) && !(is_int($cIDBNumber) || ctype_digit($cIDBNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($cIDBNumber, true), gettype($cIDBNumber)), __LINE__);
        }
        // validation for constraint: pattern(\d{10})
        if (!is_null($cIDBNumber) && !preg_match('/\\d{10}/', $cIDBNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /\\d{10}/', var_export($cIDBNumber, true)), __LINE__);
        }
        $this->CIDBNumber = $cIDBNumber;
        
        return $this;
    }
}
