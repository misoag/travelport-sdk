<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

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
    public string $OriginApplication;
    /**
     * The CIDBNumber
     * Meta information extracted from the WSDL
     * - base: xs:integer
     * - pattern: \d{10}
     * - use: optional
     * @var int|null
     */
    public ?int $CIDBNumber = null;
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
     * @return \Travelport\Hotel\StructType\BillingPointOfSaleInfo
     */
    public function setOriginApplication(string $originApplication): self
    {
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
     * @return \Travelport\Hotel\StructType\BillingPointOfSaleInfo
     */
    public function setCIDBNumber(?int $cIDBNumber = null): self
    {
        $this->CIDBNumber = $cIDBNumber;
        
        return $this;
    }
}
