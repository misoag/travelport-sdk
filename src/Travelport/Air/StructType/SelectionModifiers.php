<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SelectionModifiers StructType
 * Meta information extracted from the WSDL
 * - documentation: References to airsegments for which EMDs will be generated on all the associated services. | Modifiers supported for selection of services during EMD Issuance. Supported providers are 1V/1G/1P
 * @subpackage Structs
 */
class SelectionModifiers extends AbstractStructBase
{
    /**
     * The AirSegmentRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AirSegmentRef
     * @var \Travelport\Air\StructType\AirSegmentRef[]
     */
    public ?array $AirSegmentRef = null;
    /**
     * The SvcSegmentRef
     * Meta information extracted from the WSDL
     * - documentation: SVC segment reference to which the EMD is being issued | Reference type
     * - base: xs:string
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var string[]
     */
    public ?array $SvcSegmentRef = null;
    /**
     * The SupplierCode
     * Meta information extracted from the WSDL
     * - documentation: Supplier/Vendor code for which EMDs will be generated on all the associated services. Required if PNR contains more than one supplier. | 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    public ?string $SupplierCode = null;
    /**
     * The RFIC
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - length: 1
     * - use: optional
     * @var string|null
     */
    public ?string $RFIC = null;
    /**
     * Constructor method for SelectionModifiers
     * @uses SelectionModifiers::setAirSegmentRef()
     * @uses SelectionModifiers::setSvcSegmentRef()
     * @uses SelectionModifiers::setSupplierCode()
     * @uses SelectionModifiers::setRFIC()
     * @param \Travelport\Air\StructType\AirSegmentRef[] $airSegmentRef
     * @param string[] $svcSegmentRef
     * @param string $supplierCode
     * @param string $rFIC
     */
    public function __construct(?array $airSegmentRef = null, ?array $svcSegmentRef = null, ?string $supplierCode = null, ?string $rFIC = null)
    {
        $this
            ->setAirSegmentRef($airSegmentRef)
            ->setSvcSegmentRef($svcSegmentRef)
            ->setSupplierCode($supplierCode)
            ->setRFIC($rFIC);
    }
    /**
     * Get AirSegmentRef value
     * @return \Travelport\Air\StructType\AirSegmentRef[]
     */
    public function getAirSegmentRef(): ?array
    {
        return $this->AirSegmentRef;
    }
    /**
     * Set AirSegmentRef value
     * @param \Travelport\Air\StructType\AirSegmentRef[] $airSegmentRef
     * @return \Travelport\Air\StructType\SelectionModifiers
     */
    public function setAirSegmentRef(?array $airSegmentRef = null): self
    {
        $this->AirSegmentRef = $airSegmentRef;
        
        return $this;
    }
    /**
     * Add item to AirSegmentRef value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\AirSegmentRef $item
     * @return \Travelport\Air\StructType\SelectionModifiers
     */
    public function addToAirSegmentRef(\Travelport\Air\StructType\AirSegmentRef $item): self
    {
        $this->AirSegmentRef[] = $item;
        
        return $this;
    }
    /**
     * Get SvcSegmentRef value
     * @return string[]
     */
    public function getSvcSegmentRef(): ?array
    {
        return $this->SvcSegmentRef;
    }
    /**
     * Set SvcSegmentRef value
     * @param string[] $svcSegmentRef
     * @return \Travelport\Air\StructType\SelectionModifiers
     */
    public function setSvcSegmentRef(?array $svcSegmentRef = null): self
    {
        $this->SvcSegmentRef = $svcSegmentRef;
        
        return $this;
    }
    /**
     * Add item to SvcSegmentRef value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\Air\StructType\SelectionModifiers
     */
    public function addToSvcSegmentRef(string $item): self
    {
        $this->SvcSegmentRef[] = $item;
        
        return $this;
    }
    /**
     * Get SupplierCode value
     * @return string|null
     */
    public function getSupplierCode(): ?string
    {
        return $this->SupplierCode;
    }
    /**
     * Set SupplierCode value
     * @param string $supplierCode
     * @return \Travelport\Air\StructType\SelectionModifiers
     */
    public function setSupplierCode(?string $supplierCode = null): self
    {
        $this->SupplierCode = $supplierCode;
        
        return $this;
    }
    /**
     * Get RFIC value
     * @return string|null
     */
    public function getRFIC(): ?string
    {
        return $this->RFIC;
    }
    /**
     * Set RFIC value
     * @param string $rFIC
     * @return \Travelport\Air\StructType\SelectionModifiers
     */
    public function setRFIC(?string $rFIC = null): self
    {
        $this->RFIC = $rFIC;
        
        return $this;
    }
}
