<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PassiveCreateReservationReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Request to create a passive reservation
 * @subpackage Structs
 */
class PassiveCreateReservationReq extends BaseCreateReservationReq
{
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
     * The PassiveSegment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: passive:PassiveSegment
     * @var \Travelport\UniversalRecord\StructType\PassiveSegment[]
     */
    public ?array $PassiveSegment = null;
    /**
     * The PassiveRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: passive:PassiveRemark
     * @var \Travelport\UniversalRecord\StructType\PassiveRemark[]
     */
    public ?array $PassiveRemark = null;
    /**
     * The AssociatedRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: passive:AssociatedRemark
     * @var \Travelport\UniversalRecord\StructType\AssociatedRemark[]
     */
    public ?array $AssociatedRemark = null;
    /**
     * The ActionStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:ActionStatus
     * @var \Travelport\UniversalRecord\StructType\ActionStatus|null
     */
    public ?\Travelport\UniversalRecord\StructType\ActionStatus $ActionStatus = null;
    /**
     * The ReviewBooking
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:ReviewBooking
     * @var \Travelport\UniversalRecord\StructType\ReviewBooking[]
     */
    public ?array $ReviewBooking = null;
    /**
     * Constructor method for PassiveCreateReservationReq
     * @uses PassiveCreateReservationReq::setSupplierLocator()
     * @uses PassiveCreateReservationReq::setThirdPartyInformation()
     * @uses PassiveCreateReservationReq::setPassiveSegment()
     * @uses PassiveCreateReservationReq::setPassiveRemark()
     * @uses PassiveCreateReservationReq::setAssociatedRemark()
     * @uses PassiveCreateReservationReq::setActionStatus()
     * @uses PassiveCreateReservationReq::setReviewBooking()
     * @param \Travelport\UniversalRecord\StructType\SupplierLocator[] $supplierLocator
     * @param \Travelport\UniversalRecord\StructType\ThirdPartyInformation[] $thirdPartyInformation
     * @param \Travelport\UniversalRecord\StructType\PassiveSegment[] $passiveSegment
     * @param \Travelport\UniversalRecord\StructType\PassiveRemark[] $passiveRemark
     * @param \Travelport\UniversalRecord\StructType\AssociatedRemark[] $associatedRemark
     * @param \Travelport\UniversalRecord\StructType\ActionStatus $actionStatus
     * @param \Travelport\UniversalRecord\StructType\ReviewBooking[] $reviewBooking
     */
    public function __construct(?array $supplierLocator = null, ?array $thirdPartyInformation = null, ?array $passiveSegment = null, ?array $passiveRemark = null, ?array $associatedRemark = null, ?\Travelport\UniversalRecord\StructType\ActionStatus $actionStatus = null, ?array $reviewBooking = null)
    {
        $this
            ->setSupplierLocator($supplierLocator)
            ->setThirdPartyInformation($thirdPartyInformation)
            ->setPassiveSegment($passiveSegment)
            ->setPassiveRemark($passiveRemark)
            ->setAssociatedRemark($associatedRemark)
            ->setActionStatus($actionStatus)
            ->setReviewBooking($reviewBooking);
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
     * @return \Travelport\UniversalRecord\StructType\PassiveCreateReservationReq
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
     * @return \Travelport\UniversalRecord\StructType\PassiveCreateReservationReq
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
     * @return \Travelport\UniversalRecord\StructType\PassiveCreateReservationReq
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
     * @return \Travelport\UniversalRecord\StructType\PassiveCreateReservationReq
     */
    public function addToThirdPartyInformation(\Travelport\UniversalRecord\StructType\ThirdPartyInformation $item): self
    {
        $this->ThirdPartyInformation[] = $item;
        
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
     * @return \Travelport\UniversalRecord\StructType\PassiveCreateReservationReq
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
     * @return \Travelport\UniversalRecord\StructType\PassiveCreateReservationReq
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
     * @return \Travelport\UniversalRecord\StructType\PassiveCreateReservationReq
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
     * @return \Travelport\UniversalRecord\StructType\PassiveCreateReservationReq
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
     * @return \Travelport\UniversalRecord\StructType\PassiveCreateReservationReq
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
     * @return \Travelport\UniversalRecord\StructType\PassiveCreateReservationReq
     */
    public function addToAssociatedRemark(\Travelport\UniversalRecord\StructType\AssociatedRemark $item): self
    {
        $this->AssociatedRemark[] = $item;
        
        return $this;
    }
    /**
     * Get ActionStatus value
     * @return \Travelport\UniversalRecord\StructType\ActionStatus|null
     */
    public function getActionStatus(): ?\Travelport\UniversalRecord\StructType\ActionStatus
    {
        return $this->ActionStatus;
    }
    /**
     * Set ActionStatus value
     * @param \Travelport\UniversalRecord\StructType\ActionStatus $actionStatus
     * @return \Travelport\UniversalRecord\StructType\PassiveCreateReservationReq
     */
    public function setActionStatus(?\Travelport\UniversalRecord\StructType\ActionStatus $actionStatus = null): self
    {
        $this->ActionStatus = $actionStatus;
        
        return $this;
    }
    /**
     * Get ReviewBooking value
     * @return \Travelport\UniversalRecord\StructType\ReviewBooking[]
     */
    public function getReviewBooking(): ?array
    {
        return $this->ReviewBooking;
    }
    /**
     * Set ReviewBooking value
     * @param \Travelport\UniversalRecord\StructType\ReviewBooking[] $reviewBooking
     * @return \Travelport\UniversalRecord\StructType\PassiveCreateReservationReq
     */
    public function setReviewBooking(?array $reviewBooking = null): self
    {
        $this->ReviewBooking = $reviewBooking;
        
        return $this;
    }
    /**
     * Add item to ReviewBooking value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ReviewBooking $item
     * @return \Travelport\UniversalRecord\StructType\PassiveCreateReservationReq
     */
    public function addToReviewBooking(\Travelport\UniversalRecord\StructType\ReviewBooking $item): self
    {
        $this->ReviewBooking[] = $item;
        
        return $this;
    }
}
