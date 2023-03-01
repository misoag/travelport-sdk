<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SvcSegment StructType
 * Meta information extracted from the WSDL
 * - documentation: Service segment added to collect additional fee. 1P only
 * @subpackage Structs
 */
class SvcSegment extends AbstractStructBase
{
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: The Key of SVC Segment. | Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $Key;
    /**
     * The Carrier
     * Meta information extracted from the WSDL
     * - documentation: The platting carrier | 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * @var string|null
     */
    public ?string $Carrier = null;
    /**
     * The Status
     * @var string|null
     */
    public ?string $Status = null;
    /**
     * The NumberOfItems
     * @var int|null
     */
    public ?int $NumberOfItems = null;
    /**
     * The Origin
     * Meta information extracted from the WSDL
     * - documentation: Origin location - Airport code. 1P only. | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $Origin = null;
    /**
     * The Destination
     * Meta information extracted from the WSDL
     * - documentation: Destination location - Airport code. 1P only. | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $Destination = null;
    /**
     * The StartDate
     * Meta information extracted from the WSDL
     * - documentation: Start date of the segment. Generally it is the next date after the last air segment. 1P only
     * @var string|null
     */
    public ?string $StartDate = null;
    /**
     * The TravelOrder
     * Meta information extracted from the WSDL
     * - documentation: To identify the appropriate travel sequence for Air/Car/Hotel/Passive segments/reservations based on travel dates. This ordering is applicable across the UR not provider or traveler specific
     * - use: optional
     * @var int|null
     */
    public ?int $TravelOrder = null;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * @var string|null
     */
    public ?string $BookingTravelerRef = null;
    /**
     * The RFIC
     * Meta information extracted from the WSDL
     * - documentation: 1P - Reason for issuance
     * - use: optional
     * @var string|null
     */
    public ?string $RFIC = null;
    /**
     * The RFISC
     * Meta information extracted from the WSDL
     * - documentation: 1P - Resaon for issuance sub-code
     * - use: optional
     * @var string|null
     */
    public ?string $RFISC = null;
    /**
     * The SvcDescription
     * Meta information extracted from the WSDL
     * - documentation: 1P - SVC fee description
     * - use: optional
     * @var string|null
     */
    public ?string $SvcDescription = null;
    /**
     * The Fee
     * Meta information extracted from the WSDL
     * - documentation: The fee to be collected using SVC segment | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $Fee = null;
    /**
     * The EMDNumber
     * Meta information extracted from the WSDL
     * - documentation: Generated EMD number, if EMD is issued on the SVC | 13 character EMD number
     * - base: xs:string
     * - length: 13
     * - use: optional
     * @var string|null
     */
    public ?string $EMDNumber = null;
    /**
     * Constructor method for SvcSegment
     * @uses SvcSegment::setKey()
     * @uses SvcSegment::setCarrier()
     * @uses SvcSegment::setStatus()
     * @uses SvcSegment::setNumberOfItems()
     * @uses SvcSegment::setOrigin()
     * @uses SvcSegment::setDestination()
     * @uses SvcSegment::setStartDate()
     * @uses SvcSegment::setTravelOrder()
     * @uses SvcSegment::setBookingTravelerRef()
     * @uses SvcSegment::setRFIC()
     * @uses SvcSegment::setRFISC()
     * @uses SvcSegment::setSvcDescription()
     * @uses SvcSegment::setFee()
     * @uses SvcSegment::setEMDNumber()
     * @param string $key
     * @param string $carrier
     * @param string $status
     * @param int $numberOfItems
     * @param string $origin
     * @param string $destination
     * @param string $startDate
     * @param int $travelOrder
     * @param string $bookingTravelerRef
     * @param string $rFIC
     * @param string $rFISC
     * @param string $svcDescription
     * @param string $fee
     * @param string $eMDNumber
     */
    public function __construct(string $key, ?string $carrier = null, ?string $status = null, ?int $numberOfItems = null, ?string $origin = null, ?string $destination = null, ?string $startDate = null, ?int $travelOrder = null, ?string $bookingTravelerRef = null, ?string $rFIC = null, ?string $rFISC = null, ?string $svcDescription = null, ?string $fee = null, ?string $eMDNumber = null)
    {
        $this
            ->setKey($key)
            ->setCarrier($carrier)
            ->setStatus($status)
            ->setNumberOfItems($numberOfItems)
            ->setOrigin($origin)
            ->setDestination($destination)
            ->setStartDate($startDate)
            ->setTravelOrder($travelOrder)
            ->setBookingTravelerRef($bookingTravelerRef)
            ->setRFIC($rFIC)
            ->setRFISC($rFISC)
            ->setSvcDescription($svcDescription)
            ->setFee($fee)
            ->setEMDNumber($eMDNumber);
    }
    /**
     * Get Key value
     * @return string
     */
    public function getKey(): string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Travelport\Air\StructType\SvcSegment
     */
    public function setKey(string $key): self
    {
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get Carrier value
     * @return string|null
     */
    public function getCarrier(): ?string
    {
        return $this->Carrier;
    }
    /**
     * Set Carrier value
     * @param string $carrier
     * @return \Travelport\Air\StructType\SvcSegment
     */
    public function setCarrier(?string $carrier = null): self
    {
        $this->Carrier = $carrier;
        
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param string $status
     * @return \Travelport\Air\StructType\SvcSegment
     */
    public function setStatus(?string $status = null): self
    {
        $this->Status = $status;
        
        return $this;
    }
    /**
     * Get NumberOfItems value
     * @return int|null
     */
    public function getNumberOfItems(): ?int
    {
        return $this->NumberOfItems;
    }
    /**
     * Set NumberOfItems value
     * @param int $numberOfItems
     * @return \Travelport\Air\StructType\SvcSegment
     */
    public function setNumberOfItems(?int $numberOfItems = null): self
    {
        $this->NumberOfItems = $numberOfItems;
        
        return $this;
    }
    /**
     * Get Origin value
     * @return string|null
     */
    public function getOrigin(): ?string
    {
        return $this->Origin;
    }
    /**
     * Set Origin value
     * @param string $origin
     * @return \Travelport\Air\StructType\SvcSegment
     */
    public function setOrigin(?string $origin = null): self
    {
        $this->Origin = $origin;
        
        return $this;
    }
    /**
     * Get Destination value
     * @return string|null
     */
    public function getDestination(): ?string
    {
        return $this->Destination;
    }
    /**
     * Set Destination value
     * @param string $destination
     * @return \Travelport\Air\StructType\SvcSegment
     */
    public function setDestination(?string $destination = null): self
    {
        $this->Destination = $destination;
        
        return $this;
    }
    /**
     * Get StartDate value
     * @return string|null
     */
    public function getStartDate(): ?string
    {
        return $this->StartDate;
    }
    /**
     * Set StartDate value
     * @param string $startDate
     * @return \Travelport\Air\StructType\SvcSegment
     */
    public function setStartDate(?string $startDate = null): self
    {
        $this->StartDate = $startDate;
        
        return $this;
    }
    /**
     * Get TravelOrder value
     * @return int|null
     */
    public function getTravelOrder(): ?int
    {
        return $this->TravelOrder;
    }
    /**
     * Set TravelOrder value
     * @param int $travelOrder
     * @return \Travelport\Air\StructType\SvcSegment
     */
    public function setTravelOrder(?int $travelOrder = null): self
    {
        $this->TravelOrder = $travelOrder;
        
        return $this;
    }
    /**
     * Get BookingTravelerRef value
     * @return string|null
     */
    public function getBookingTravelerRef(): ?string
    {
        return $this->BookingTravelerRef;
    }
    /**
     * Set BookingTravelerRef value
     * @param string $bookingTravelerRef
     * @return \Travelport\Air\StructType\SvcSegment
     */
    public function setBookingTravelerRef(?string $bookingTravelerRef = null): self
    {
        $this->BookingTravelerRef = $bookingTravelerRef;
        
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
     * @return \Travelport\Air\StructType\SvcSegment
     */
    public function setRFIC(?string $rFIC = null): self
    {
        $this->RFIC = $rFIC;
        
        return $this;
    }
    /**
     * Get RFISC value
     * @return string|null
     */
    public function getRFISC(): ?string
    {
        return $this->RFISC;
    }
    /**
     * Set RFISC value
     * @param string $rFISC
     * @return \Travelport\Air\StructType\SvcSegment
     */
    public function setRFISC(?string $rFISC = null): self
    {
        $this->RFISC = $rFISC;
        
        return $this;
    }
    /**
     * Get SvcDescription value
     * @return string|null
     */
    public function getSvcDescription(): ?string
    {
        return $this->SvcDescription;
    }
    /**
     * Set SvcDescription value
     * @param string $svcDescription
     * @return \Travelport\Air\StructType\SvcSegment
     */
    public function setSvcDescription(?string $svcDescription = null): self
    {
        $this->SvcDescription = $svcDescription;
        
        return $this;
    }
    /**
     * Get Fee value
     * @return string|null
     */
    public function getFee(): ?string
    {
        return $this->Fee;
    }
    /**
     * Set Fee value
     * @param string $fee
     * @return \Travelport\Air\StructType\SvcSegment
     */
    public function setFee(?string $fee = null): self
    {
        $this->Fee = $fee;
        
        return $this;
    }
    /**
     * Get EMDNumber value
     * @return string|null
     */
    public function getEMDNumber(): ?string
    {
        return $this->EMDNumber;
    }
    /**
     * Set EMDNumber value
     * @param string $eMDNumber
     * @return \Travelport\Air\StructType\SvcSegment
     */
    public function setEMDNumber(?string $eMDNumber = null): self
    {
        $this->EMDNumber = $eMDNumber;
        
        return $this;
    }
}
