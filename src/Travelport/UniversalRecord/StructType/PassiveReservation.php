<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PassiveReservation StructType
 * Meta information extracted from the WSDL
 * - documentation: The parent container for all passive booking data
 * @subpackage Structs
 */
class PassiveReservation extends BaseReservation
{
    /**
     * The ProviderReservationInfoRef
     * Meta information extracted from the WSDL
     * - documentation: Provider Reservation reference key. | Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $ProviderReservationInfoRef;
    /**
     * The SupplierLocator
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:SupplierLocator
     * @var \Travelport\UniversalRecord\StructType\SupplierLocator[]
     */
    public ?array $SupplierLocator = null;
    /**
     * The ThirdPartyInformation
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:ThirdPartyInformation
     * @var \Travelport\UniversalRecord\StructType\ThirdPartyInformation[]
     */
    public ?array $ThirdPartyInformation = null;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:BookingTravelerRef
     * @var \Travelport\UniversalRecord\StructType\BookingTravelerRef[]
     */
    public ?array $BookingTravelerRef = null;
    /**
     * The PassiveSegment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: PassiveSegment
     * @var \Travelport\UniversalRecord\StructType\PassiveSegment[]
     */
    public ?array $PassiveSegment = null;
    /**
     * The PassiveRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: PassiveRemark
     * @var \Travelport\UniversalRecord\StructType\PassiveRemark[]
     */
    public ?array $PassiveRemark = null;
    /**
     * The AssociatedRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AssociatedRemark
     * @var \Travelport\UniversalRecord\StructType\AssociatedRemark[]
     */
    public ?array $AssociatedRemark = null;
    /**
     * Constructor method for PassiveReservation
     * @uses PassiveReservation::setProviderReservationInfoRef()
     * @uses PassiveReservation::setSupplierLocator()
     * @uses PassiveReservation::setThirdPartyInformation()
     * @uses PassiveReservation::setBookingTravelerRef()
     * @uses PassiveReservation::setPassiveSegment()
     * @uses PassiveReservation::setPassiveRemark()
     * @uses PassiveReservation::setAssociatedRemark()
     * @param string $providerReservationInfoRef
     * @param \Travelport\UniversalRecord\StructType\SupplierLocator[] $supplierLocator
     * @param \Travelport\UniversalRecord\StructType\ThirdPartyInformation[] $thirdPartyInformation
     * @param \Travelport\UniversalRecord\StructType\BookingTravelerRef[] $bookingTravelerRef
     * @param \Travelport\UniversalRecord\StructType\PassiveSegment[] $passiveSegment
     * @param \Travelport\UniversalRecord\StructType\PassiveRemark[] $passiveRemark
     * @param \Travelport\UniversalRecord\StructType\AssociatedRemark[] $associatedRemark
     */
    public function __construct(string $providerReservationInfoRef, ?array $supplierLocator = null, ?array $thirdPartyInformation = null, ?array $bookingTravelerRef = null, ?array $passiveSegment = null, ?array $passiveRemark = null, ?array $associatedRemark = null)
    {
        $this
            ->setProviderReservationInfoRef($providerReservationInfoRef)
            ->setSupplierLocator($supplierLocator)
            ->setThirdPartyInformation($thirdPartyInformation)
            ->setBookingTravelerRef($bookingTravelerRef)
            ->setPassiveSegment($passiveSegment)
            ->setPassiveRemark($passiveRemark)
            ->setAssociatedRemark($associatedRemark);
    }
    /**
     * Get ProviderReservationInfoRef value
     * @return string
     */
    public function getProviderReservationInfoRef(): string
    {
        return $this->ProviderReservationInfoRef;
    }
    /**
     * Set ProviderReservationInfoRef value
     * @param string $providerReservationInfoRef
     * @return \Travelport\UniversalRecord\StructType\PassiveReservation
     */
    public function setProviderReservationInfoRef(string $providerReservationInfoRef): self
    {
        $this->ProviderReservationInfoRef = $providerReservationInfoRef;
        
        return $this;
    }
    /**
     * Get SupplierLocator value
     * @return \Travelport\UniversalRecord\StructType\SupplierLocator[]
     */
    public function getSupplierLocator(): ?array
    {
        return $this->SupplierLocator;
    }
    /**
     * Set SupplierLocator value
     * @param \Travelport\UniversalRecord\StructType\SupplierLocator[] $supplierLocator
     * @return \Travelport\UniversalRecord\StructType\PassiveReservation
     */
    public function setSupplierLocator(?array $supplierLocator = null): self
    {
        $this->SupplierLocator = $supplierLocator;
        
        return $this;
    }
    /**
     * Add item to SupplierLocator value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\SupplierLocator $item
     * @return \Travelport\UniversalRecord\StructType\PassiveReservation
     */
    public function addToSupplierLocator(\Travelport\UniversalRecord\StructType\SupplierLocator $item): self
    {
        $this->SupplierLocator[] = $item;
        
        return $this;
    }
    /**
     * Get ThirdPartyInformation value
     * @return \Travelport\UniversalRecord\StructType\ThirdPartyInformation[]
     */
    public function getThirdPartyInformation(): ?array
    {
        return $this->ThirdPartyInformation;
    }
    /**
     * Set ThirdPartyInformation value
     * @param \Travelport\UniversalRecord\StructType\ThirdPartyInformation[] $thirdPartyInformation
     * @return \Travelport\UniversalRecord\StructType\PassiveReservation
     */
    public function setThirdPartyInformation(?array $thirdPartyInformation = null): self
    {
        $this->ThirdPartyInformation = $thirdPartyInformation;
        
        return $this;
    }
    /**
     * Add item to ThirdPartyInformation value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ThirdPartyInformation $item
     * @return \Travelport\UniversalRecord\StructType\PassiveReservation
     */
    public function addToThirdPartyInformation(\Travelport\UniversalRecord\StructType\ThirdPartyInformation $item): self
    {
        $this->ThirdPartyInformation[] = $item;
        
        return $this;
    }
    /**
     * Get BookingTravelerRef value
     * @return \Travelport\UniversalRecord\StructType\BookingTravelerRef[]
     */
    public function getBookingTravelerRef(): ?array
    {
        return $this->BookingTravelerRef;
    }
    /**
     * Set BookingTravelerRef value
     * @param \Travelport\UniversalRecord\StructType\BookingTravelerRef[] $bookingTravelerRef
     * @return \Travelport\UniversalRecord\StructType\PassiveReservation
     */
    public function setBookingTravelerRef(?array $bookingTravelerRef = null): self
    {
        $this->BookingTravelerRef = $bookingTravelerRef;
        
        return $this;
    }
    /**
     * Add item to BookingTravelerRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\BookingTravelerRef $item
     * @return \Travelport\UniversalRecord\StructType\PassiveReservation
     */
    public function addToBookingTravelerRef(\Travelport\UniversalRecord\StructType\BookingTravelerRef $item): self
    {
        $this->BookingTravelerRef[] = $item;
        
        return $this;
    }
    /**
     * Get PassiveSegment value
     * @return \Travelport\UniversalRecord\StructType\PassiveSegment[]
     */
    public function getPassiveSegment(): ?array
    {
        return $this->PassiveSegment;
    }
    /**
     * Set PassiveSegment value
     * @param \Travelport\UniversalRecord\StructType\PassiveSegment[] $passiveSegment
     * @return \Travelport\UniversalRecord\StructType\PassiveReservation
     */
    public function setPassiveSegment(?array $passiveSegment = null): self
    {
        $this->PassiveSegment = $passiveSegment;
        
        return $this;
    }
    /**
     * Add item to PassiveSegment value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PassiveSegment $item
     * @return \Travelport\UniversalRecord\StructType\PassiveReservation
     */
    public function addToPassiveSegment(\Travelport\UniversalRecord\StructType\PassiveSegment $item): self
    {
        $this->PassiveSegment[] = $item;
        
        return $this;
    }
    /**
     * Get PassiveRemark value
     * @return \Travelport\UniversalRecord\StructType\PassiveRemark[]
     */
    public function getPassiveRemark(): ?array
    {
        return $this->PassiveRemark;
    }
    /**
     * Set PassiveRemark value
     * @param \Travelport\UniversalRecord\StructType\PassiveRemark[] $passiveRemark
     * @return \Travelport\UniversalRecord\StructType\PassiveReservation
     */
    public function setPassiveRemark(?array $passiveRemark = null): self
    {
        $this->PassiveRemark = $passiveRemark;
        
        return $this;
    }
    /**
     * Add item to PassiveRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PassiveRemark $item
     * @return \Travelport\UniversalRecord\StructType\PassiveReservation
     */
    public function addToPassiveRemark(\Travelport\UniversalRecord\StructType\PassiveRemark $item): self
    {
        $this->PassiveRemark[] = $item;
        
        return $this;
    }
    /**
     * Get AssociatedRemark value
     * @return \Travelport\UniversalRecord\StructType\AssociatedRemark[]
     */
    public function getAssociatedRemark(): ?array
    {
        return $this->AssociatedRemark;
    }
    /**
     * Set AssociatedRemark value
     * @param \Travelport\UniversalRecord\StructType\AssociatedRemark[] $associatedRemark
     * @return \Travelport\UniversalRecord\StructType\PassiveReservation
     */
    public function setAssociatedRemark(?array $associatedRemark = null): self
    {
        $this->AssociatedRemark = $associatedRemark;
        
        return $this;
    }
    /**
     * Add item to AssociatedRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AssociatedRemark $item
     * @return \Travelport\UniversalRecord\StructType\PassiveReservation
     */
    public function addToAssociatedRemark(\Travelport\UniversalRecord\StructType\AssociatedRemark $item): self
    {
        $this->AssociatedRemark[] = $item;
        
        return $this;
    }
}
