<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
    protected string $Key;
    /**
     * The Carrier
     * Meta information extracted from the WSDL
     * - documentation: The platting carrier | 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * @var string|null
     */
    protected ?string $Carrier = null;
    /**
     * The Status
     * @var string|null
     */
    protected ?string $Status = null;
    /**
     * The NumberOfItems
     * @var int|null
     */
    protected ?int $NumberOfItems = null;
    /**
     * The Origin
     * Meta information extracted from the WSDL
     * - documentation: Origin location - Airport code. 1P only. | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $Origin = null;
    /**
     * The Destination
     * Meta information extracted from the WSDL
     * - documentation: Destination location - Airport code. 1P only. | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $Destination = null;
    /**
     * The StartDate
     * Meta information extracted from the WSDL
     * - documentation: Start date of the segment. Generally it is the next date after the last air segment. 1P only
     * @var string|null
     */
    protected ?string $StartDate = null;
    /**
     * The TravelOrder
     * Meta information extracted from the WSDL
     * - documentation: To identify the appropriate travel sequence for Air/Car/Hotel/Passive segments/reservations based on travel dates. This ordering is applicable across the UR not provider or traveler specific
     * - use: optional
     * @var int|null
     */
    protected ?int $TravelOrder = null;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * @var string|null
     */
    protected ?string $BookingTravelerRef = null;
    /**
     * The RFIC
     * Meta information extracted from the WSDL
     * - documentation: 1P - Reason for issuance
     * - use: optional
     * @var string|null
     */
    protected ?string $RFIC = null;
    /**
     * The RFISC
     * Meta information extracted from the WSDL
     * - documentation: 1P - Resaon for issuance sub-code
     * - use: optional
     * @var string|null
     */
    protected ?string $RFISC = null;
    /**
     * The SvcDescription
     * Meta information extracted from the WSDL
     * - documentation: 1P - SVC fee description
     * - use: optional
     * @var string|null
     */
    protected ?string $SvcDescription = null;
    /**
     * The Fee
     * Meta information extracted from the WSDL
     * - documentation: The fee to be collected using SVC segment | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $Fee = null;
    /**
     * The EMDNumber
     * Meta information extracted from the WSDL
     * - documentation: Generated EMD number, if EMD is issued on the SVC | 13 character EMD number
     * - base: xs:string
     * - length: 13
     * - use: optional
     * @var string|null
     */
    protected ?string $EMDNumber = null;
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
     * @return \Travelport\Util\StructType\SvcSegment
     */
    public function setKey(string $key): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\SvcSegment
     */
    public function setCarrier(?string $carrier = null): self
    {
        // validation for constraint: string
        if (!is_null($carrier) && !is_string($carrier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($carrier, true), gettype($carrier)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($carrier) && mb_strlen((string) $carrier) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $carrier)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\SvcSegment
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\SvcSegment
     */
    public function setNumberOfItems(?int $numberOfItems = null): self
    {
        // validation for constraint: int
        if (!is_null($numberOfItems) && !(is_int($numberOfItems) || ctype_digit($numberOfItems))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfItems, true), gettype($numberOfItems)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\SvcSegment
     */
    public function setOrigin(?string $origin = null): self
    {
        // validation for constraint: string
        if (!is_null($origin) && !is_string($origin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($origin, true), gettype($origin)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($origin) && mb_strlen((string) $origin) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $origin)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\SvcSegment
     */
    public function setDestination(?string $destination = null): self
    {
        // validation for constraint: string
        if (!is_null($destination) && !is_string($destination)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destination, true), gettype($destination)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($destination) && mb_strlen((string) $destination) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $destination)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\SvcSegment
     */
    public function setStartDate(?string $startDate = null): self
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDate, true), gettype($startDate)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\SvcSegment
     */
    public function setTravelOrder(?int $travelOrder = null): self
    {
        // validation for constraint: int
        if (!is_null($travelOrder) && !(is_int($travelOrder) || ctype_digit($travelOrder))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($travelOrder, true), gettype($travelOrder)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\SvcSegment
     */
    public function setBookingTravelerRef(?string $bookingTravelerRef = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingTravelerRef) && !is_string($bookingTravelerRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingTravelerRef, true), gettype($bookingTravelerRef)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\SvcSegment
     */
    public function setRFIC(?string $rFIC = null): self
    {
        // validation for constraint: string
        if (!is_null($rFIC) && !is_string($rFIC)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rFIC, true), gettype($rFIC)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\SvcSegment
     */
    public function setRFISC(?string $rFISC = null): self
    {
        // validation for constraint: string
        if (!is_null($rFISC) && !is_string($rFISC)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rFISC, true), gettype($rFISC)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\SvcSegment
     */
    public function setSvcDescription(?string $svcDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($svcDescription) && !is_string($svcDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($svcDescription, true), gettype($svcDescription)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\SvcSegment
     */
    public function setFee(?string $fee = null): self
    {
        // validation for constraint: string
        if (!is_null($fee) && !is_string($fee)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fee, true), gettype($fee)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\SvcSegment
     */
    public function setEMDNumber(?string $eMDNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($eMDNumber) && !is_string($eMDNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eMDNumber, true), gettype($eMDNumber)), __LINE__);
        }
        // validation for constraint: length(13)
        if (!is_null($eMDNumber) && mb_strlen((string) $eMDNumber) !== 13) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 13', mb_strlen((string) $eMDNumber)), __LINE__);
        }
        $this->EMDNumber = $eMDNumber;
        
        return $this;
    }
}
