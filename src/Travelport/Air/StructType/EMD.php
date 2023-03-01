<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EMD StructType
 * Meta information extracted from the WSDL
 * - documentation: A container for EMD elements related to an OptionalService
 * @subpackage Structs
 */
class EMD extends AbstractStructBase
{
    /**
     * The FulfillmentType
     * Meta information extracted from the WSDL
     * - base: xs:integer
     * - maxInclusive: 5
     * - minInclusive: 1
     * - use: optional
     * @var int|null
     */
    public ?int $FulfillmentType = null;
    /**
     * The FulfillmentTypeDescription
     * Meta information extracted from the WSDL
     * - documentation: EMD description.
     * - use: optional
     * @var string|null
     */
    public ?string $FulfillmentTypeDescription = null;
    /**
     * The AssociatedItem
     * Meta information extracted from the WSDL
     * - documentation: The type of Optional Service. The choices are Flight, Ticket, Merchandising, Rule Buster, Allowance, Chargeable Baggage, Carry On Baggage Allowance, Prepaid Baggage. Provider: 1G, 1V, 1P
     * - use: optional
     * @var string|null
     */
    public ?string $AssociatedItem = null;
    /**
     * The AvailabilityChargeIndicator
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $AvailabilityChargeIndicator = null;
    /**
     * The RefundReissueIndicator
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $RefundReissueIndicator = null;
    /**
     * The Commissionable
     * Meta information extracted from the WSDL
     * - base: xs:boolean
     * - use: optional
     * @var bool|null
     */
    public ?bool $Commissionable = null;
    /**
     * The MileageIndicator
     * Meta information extracted from the WSDL
     * - base: xs:boolean
     * - use: optional
     * @var bool|null
     */
    public ?bool $MileageIndicator = null;
    /**
     * The Location
     * Meta information extracted from the WSDL
     * - documentation: Valid 3 letter IATA city or airport code
     * - base: common:typeIATACode
     * - length: 3
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $Location = null;
    /**
     * The Date
     * Meta information extracted from the WSDL
     * - base: xs:dateTime
     * - use: optional
     * @var string|null
     */
    public ?string $Date = null;
    /**
     * The Booking
     * Meta information extracted from the WSDL
     * - base: typeBooking
     * - use: optional
     * @var string|null
     */
    public ?string $Booking = null;
    /**
     * The DisplayCategory
     * Meta information extracted from the WSDL
     * - base: typeDisplayCategory
     * - use: optional
     * @var string|null
     */
    public ?string $DisplayCategory = null;
    /**
     * The Reusable
     * Meta information extracted from the WSDL
     * - documentation: Identifies if the service can be re-used towards a future purchase.
     * - use: optional
     * @var bool|null
     */
    public ?bool $Reusable = null;
    /**
     * Constructor method for EMD
     * @uses EMD::setFulfillmentType()
     * @uses EMD::setFulfillmentTypeDescription()
     * @uses EMD::setAssociatedItem()
     * @uses EMD::setAvailabilityChargeIndicator()
     * @uses EMD::setRefundReissueIndicator()
     * @uses EMD::setCommissionable()
     * @uses EMD::setMileageIndicator()
     * @uses EMD::setLocation()
     * @uses EMD::setDate()
     * @uses EMD::setBooking()
     * @uses EMD::setDisplayCategory()
     * @uses EMD::setReusable()
     * @param int $fulfillmentType
     * @param string $fulfillmentTypeDescription
     * @param string $associatedItem
     * @param string $availabilityChargeIndicator
     * @param string $refundReissueIndicator
     * @param bool $commissionable
     * @param bool $mileageIndicator
     * @param string $location
     * @param string $date
     * @param string $booking
     * @param string $displayCategory
     * @param bool $reusable
     */
    public function __construct(?int $fulfillmentType = null, ?string $fulfillmentTypeDescription = null, ?string $associatedItem = null, ?string $availabilityChargeIndicator = null, ?string $refundReissueIndicator = null, ?bool $commissionable = null, ?bool $mileageIndicator = null, ?string $location = null, ?string $date = null, ?string $booking = null, ?string $displayCategory = null, ?bool $reusable = null)
    {
        $this
            ->setFulfillmentType($fulfillmentType)
            ->setFulfillmentTypeDescription($fulfillmentTypeDescription)
            ->setAssociatedItem($associatedItem)
            ->setAvailabilityChargeIndicator($availabilityChargeIndicator)
            ->setRefundReissueIndicator($refundReissueIndicator)
            ->setCommissionable($commissionable)
            ->setMileageIndicator($mileageIndicator)
            ->setLocation($location)
            ->setDate($date)
            ->setBooking($booking)
            ->setDisplayCategory($displayCategory)
            ->setReusable($reusable);
    }
    /**
     * Get FulfillmentType value
     * @return int|null
     */
    public function getFulfillmentType(): ?int
    {
        return $this->FulfillmentType;
    }
    /**
     * Set FulfillmentType value
     * @param int $fulfillmentType
     * @return \Travelport\Air\StructType\EMD
     */
    public function setFulfillmentType(?int $fulfillmentType = null): self
    {
        $this->FulfillmentType = $fulfillmentType;
        
        return $this;
    }
    /**
     * Get FulfillmentTypeDescription value
     * @return string|null
     */
    public function getFulfillmentTypeDescription(): ?string
    {
        return $this->FulfillmentTypeDescription;
    }
    /**
     * Set FulfillmentTypeDescription value
     * @param string $fulfillmentTypeDescription
     * @return \Travelport\Air\StructType\EMD
     */
    public function setFulfillmentTypeDescription(?string $fulfillmentTypeDescription = null): self
    {
        $this->FulfillmentTypeDescription = $fulfillmentTypeDescription;
        
        return $this;
    }
    /**
     * Get AssociatedItem value
     * @return string|null
     */
    public function getAssociatedItem(): ?string
    {
        return $this->AssociatedItem;
    }
    /**
     * Set AssociatedItem value
     * @param string $associatedItem
     * @return \Travelport\Air\StructType\EMD
     */
    public function setAssociatedItem(?string $associatedItem = null): self
    {
        $this->AssociatedItem = $associatedItem;
        
        return $this;
    }
    /**
     * Get AvailabilityChargeIndicator value
     * @return string|null
     */
    public function getAvailabilityChargeIndicator(): ?string
    {
        return $this->AvailabilityChargeIndicator;
    }
    /**
     * Set AvailabilityChargeIndicator value
     * @param string $availabilityChargeIndicator
     * @return \Travelport\Air\StructType\EMD
     */
    public function setAvailabilityChargeIndicator(?string $availabilityChargeIndicator = null): self
    {
        $this->AvailabilityChargeIndicator = $availabilityChargeIndicator;
        
        return $this;
    }
    /**
     * Get RefundReissueIndicator value
     * @return string|null
     */
    public function getRefundReissueIndicator(): ?string
    {
        return $this->RefundReissueIndicator;
    }
    /**
     * Set RefundReissueIndicator value
     * @param string $refundReissueIndicator
     * @return \Travelport\Air\StructType\EMD
     */
    public function setRefundReissueIndicator(?string $refundReissueIndicator = null): self
    {
        $this->RefundReissueIndicator = $refundReissueIndicator;
        
        return $this;
    }
    /**
     * Get Commissionable value
     * @return bool|null
     */
    public function getCommissionable(): ?bool
    {
        return $this->Commissionable;
    }
    /**
     * Set Commissionable value
     * @param bool $commissionable
     * @return \Travelport\Air\StructType\EMD
     */
    public function setCommissionable(?bool $commissionable = null): self
    {
        $this->Commissionable = $commissionable;
        
        return $this;
    }
    /**
     * Get MileageIndicator value
     * @return bool|null
     */
    public function getMileageIndicator(): ?bool
    {
        return $this->MileageIndicator;
    }
    /**
     * Set MileageIndicator value
     * @param bool $mileageIndicator
     * @return \Travelport\Air\StructType\EMD
     */
    public function setMileageIndicator(?bool $mileageIndicator = null): self
    {
        $this->MileageIndicator = $mileageIndicator;
        
        return $this;
    }
    /**
     * Get Location value
     * @return string|null
     */
    public function getLocation(): ?string
    {
        return $this->Location;
    }
    /**
     * Set Location value
     * @param string $location
     * @return \Travelport\Air\StructType\EMD
     */
    public function setLocation(?string $location = null): self
    {
        $this->Location = $location;
        
        return $this;
    }
    /**
     * Get Date value
     * @return string|null
     */
    public function getDate(): ?string
    {
        return $this->Date;
    }
    /**
     * Set Date value
     * @param string $date
     * @return \Travelport\Air\StructType\EMD
     */
    public function setDate(?string $date = null): self
    {
        $this->Date = $date;
        
        return $this;
    }
    /**
     * Get Booking value
     * @return string|null
     */
    public function getBooking(): ?string
    {
        return $this->Booking;
    }
    /**
     * Set Booking value
     * @param string $booking
     * @return \Travelport\Air\StructType\EMD
     */
    public function setBooking(?string $booking = null): self
    {
        $this->Booking = $booking;
        
        return $this;
    }
    /**
     * Get DisplayCategory value
     * @return string|null
     */
    public function getDisplayCategory(): ?string
    {
        return $this->DisplayCategory;
    }
    /**
     * Set DisplayCategory value
     * @param string $displayCategory
     * @return \Travelport\Air\StructType\EMD
     */
    public function setDisplayCategory(?string $displayCategory = null): self
    {
        $this->DisplayCategory = $displayCategory;
        
        return $this;
    }
    /**
     * Get Reusable value
     * @return bool|null
     */
    public function getReusable(): ?bool
    {
        return $this->Reusable;
    }
    /**
     * Set Reusable value
     * @param bool $reusable
     * @return \Travelport\Air\StructType\EMD
     */
    public function setReusable(?bool $reusable = null): self
    {
        $this->Reusable = $reusable;
        
        return $this;
    }
}
