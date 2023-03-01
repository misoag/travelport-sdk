<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SupplierLocator StructType
 * Meta information extracted from the WSDL
 * - documentation: Locator code on the host carrier system
 * @subpackage Structs
 */
class SupplierLocator extends AbstractStructBase
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
     * The SupplierLocatorCode
     * Meta information extracted from the WSDL
     * - documentation: Carrier reservation locator code
     * - use: required
     * @var string
     */
    public string $SupplierLocatorCode;
    /**
     * The SegmentRef
     * Meta information extracted from the WSDL
     * - documentation: Air/Passive Segment Reference
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\TypeGeneralReference[]
     */
    public ?array $SegmentRef = null;
    /**
     * The ProviderReservationInfoRef
     * Meta information extracted from the WSDL
     * - documentation: Provider Reservation reference | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $ProviderReservationInfoRef = null;
    /**
     * The CreateDateTime
     * Meta information extracted from the WSDL
     * - documentation: The Date and Time which the reservation is received from the Vendor as a SupplierLocator creation Date.
     * - use: optional
     * @var string|null
     */
    public ?string $CreateDateTime = null;
    /**
     * Constructor method for SupplierLocator
     * @uses SupplierLocator::setSupplierCode()
     * @uses SupplierLocator::setSupplierLocatorCode()
     * @uses SupplierLocator::setSegmentRef()
     * @uses SupplierLocator::setProviderReservationInfoRef()
     * @uses SupplierLocator::setCreateDateTime()
     * @param string $supplierCode
     * @param string $supplierLocatorCode
     * @param \Travelport\Air\StructType\TypeGeneralReference[] $segmentRef
     * @param string $providerReservationInfoRef
     * @param string $createDateTime
     */
    public function __construct(string $supplierCode, string $supplierLocatorCode, ?array $segmentRef = null, ?string $providerReservationInfoRef = null, ?string $createDateTime = null)
    {
        $this
            ->setSupplierCode($supplierCode)
            ->setSupplierLocatorCode($supplierLocatorCode)
            ->setSegmentRef($segmentRef)
            ->setProviderReservationInfoRef($providerReservationInfoRef)
            ->setCreateDateTime($createDateTime);
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
     * @return \Travelport\Air\StructType\SupplierLocator
     */
    public function setSupplierCode(string $supplierCode): self
    {
        $this->SupplierCode = $supplierCode;
        
        return $this;
    }
    /**
     * Get SupplierLocatorCode value
     * @return string
     */
    public function getSupplierLocatorCode(): string
    {
        return $this->SupplierLocatorCode;
    }
    /**
     * Set SupplierLocatorCode value
     * @param string $supplierLocatorCode
     * @return \Travelport\Air\StructType\SupplierLocator
     */
    public function setSupplierLocatorCode(string $supplierLocatorCode): self
    {
        $this->SupplierLocatorCode = $supplierLocatorCode;
        
        return $this;
    }
    /**
     * Get SegmentRef value
     * @return \Travelport\Air\StructType\TypeGeneralReference[]
     */
    public function getSegmentRef(): ?array
    {
        return $this->SegmentRef;
    }
    /**
     * Set SegmentRef value
     * @param \Travelport\Air\StructType\TypeGeneralReference[] $segmentRef
     * @return \Travelport\Air\StructType\SupplierLocator
     */
    public function setSegmentRef(?array $segmentRef = null): self
    {
        $this->SegmentRef = $segmentRef;
        
        return $this;
    }
    /**
     * Add item to SegmentRef value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\TypeGeneralReference $item
     * @return \Travelport\Air\StructType\SupplierLocator
     */
    public function addToSegmentRef(\Travelport\Air\StructType\TypeGeneralReference $item): self
    {
        $this->SegmentRef[] = $item;
        
        return $this;
    }
    /**
     * Get ProviderReservationInfoRef value
     * @return string|null
     */
    public function getProviderReservationInfoRef(): ?string
    {
        return $this->ProviderReservationInfoRef;
    }
    /**
     * Set ProviderReservationInfoRef value
     * @param string $providerReservationInfoRef
     * @return \Travelport\Air\StructType\SupplierLocator
     */
    public function setProviderReservationInfoRef(?string $providerReservationInfoRef = null): self
    {
        $this->ProviderReservationInfoRef = $providerReservationInfoRef;
        
        return $this;
    }
    /**
     * Get CreateDateTime value
     * @return string|null
     */
    public function getCreateDateTime(): ?string
    {
        return $this->CreateDateTime;
    }
    /**
     * Set CreateDateTime value
     * @param string $createDateTime
     * @return \Travelport\Air\StructType\SupplierLocator
     */
    public function setCreateDateTime(?string $createDateTime = null): self
    {
        $this->CreateDateTime = $createDateTime;
        
        return $this;
    }
}
