<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RailReservationCriteria StructType
 * Meta information extracted from the WSDL
 * - documentation: Criteria for searching the Rail reservations
 * @subpackage Structs
 */
class RailReservationCriteria extends AbstractStructBase
{
    /**
     * The JourneyDepartureDate
     * Meta information extracted from the WSDL
     * - documentation: Hotel Check In Date or Date Range
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeDateSpec|null
     */
    public ?\Travelport\UniversalRecord\StructType\TypeDateSpec $JourneyDepartureDate = null;
    /**
     * The JourneyArrivalDate
     * Meta information extracted from the WSDL
     * - documentation: Hotel Check In Date or Date Range
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeDateSpec|null
     */
    public ?\Travelport\UniversalRecord\StructType\TypeDateSpec $JourneyArrivalDate = null;
    /**
     * The SegmentDepartureDate
     * Meta information extracted from the WSDL
     * - documentation: Hotel Check In Date or Date Range
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeDateSpec|null
     */
    public ?\Travelport\UniversalRecord\StructType\TypeDateSpec $SegmentDepartureDate = null;
    /**
     * The SegmentArrivalDate
     * Meta information extracted from the WSDL
     * - documentation: Hotel Check In Date or Date Range
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeDateSpec|null
     */
    public ?\Travelport\UniversalRecord\StructType\TypeDateSpec $SegmentArrivalDate = null;
    /**
     * The JourneyOrigin
     * Meta information extracted from the WSDL
     * - documentation: The IATA location code for this origination of this entity. | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $JourneyOrigin = null;
    /**
     * The JourneyDestination
     * Meta information extracted from the WSDL
     * - documentation: The IATA location code for this destination of this entity. | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $JourneyDestination = null;
    /**
     * The JourneyRailLocOrigin
     * Meta information extracted from the WSDL
     * - documentation: RCH specific origin code (a.k.a UCodes) which uniquely identifies a train station. | Valid 3 to 8 alpha numeric String
     * - base: xs:string
     * - maxLength: 8
     * - minLength: 3
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $JourneyRailLocOrigin = null;
    /**
     * The JourneyRailLocDestination
     * Meta information extracted from the WSDL
     * - documentation: RCH specific destination code (a.k.a UCodes) which uniquely identifies a train station. | Valid 3 to 8 alpha numeric String
     * - base: xs:string
     * - maxLength: 8
     * - minLength: 3
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $JourneyRailLocDestination = null;
    /**
     * The SupplierCode
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $SupplierCode = null;
    /**
     * The TrainNumber
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $TrainNumber = null;
    /**
     * The PassiveOnly
     * Meta information extracted from the WSDL
     * - documentation: Search for Passives Only
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $PassiveOnly = null;
    /**
     * Constructor method for RailReservationCriteria
     * @uses RailReservationCriteria::setJourneyDepartureDate()
     * @uses RailReservationCriteria::setJourneyArrivalDate()
     * @uses RailReservationCriteria::setSegmentDepartureDate()
     * @uses RailReservationCriteria::setSegmentArrivalDate()
     * @uses RailReservationCriteria::setJourneyOrigin()
     * @uses RailReservationCriteria::setJourneyDestination()
     * @uses RailReservationCriteria::setJourneyRailLocOrigin()
     * @uses RailReservationCriteria::setJourneyRailLocDestination()
     * @uses RailReservationCriteria::setSupplierCode()
     * @uses RailReservationCriteria::setTrainNumber()
     * @uses RailReservationCriteria::setPassiveOnly()
     * @param \Travelport\UniversalRecord\StructType\TypeDateSpec $journeyDepartureDate
     * @param \Travelport\UniversalRecord\StructType\TypeDateSpec $journeyArrivalDate
     * @param \Travelport\UniversalRecord\StructType\TypeDateSpec $segmentDepartureDate
     * @param \Travelport\UniversalRecord\StructType\TypeDateSpec $segmentArrivalDate
     * @param string $journeyOrigin
     * @param string $journeyDestination
     * @param string $journeyRailLocOrigin
     * @param string $journeyRailLocDestination
     * @param string $supplierCode
     * @param string $trainNumber
     * @param bool $passiveOnly
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\TypeDateSpec $journeyDepartureDate = null, ?\Travelport\UniversalRecord\StructType\TypeDateSpec $journeyArrivalDate = null, ?\Travelport\UniversalRecord\StructType\TypeDateSpec $segmentDepartureDate = null, ?\Travelport\UniversalRecord\StructType\TypeDateSpec $segmentArrivalDate = null, ?string $journeyOrigin = null, ?string $journeyDestination = null, ?string $journeyRailLocOrigin = null, ?string $journeyRailLocDestination = null, ?string $supplierCode = null, ?string $trainNumber = null, ?bool $passiveOnly = false)
    {
        $this
            ->setJourneyDepartureDate($journeyDepartureDate)
            ->setJourneyArrivalDate($journeyArrivalDate)
            ->setSegmentDepartureDate($segmentDepartureDate)
            ->setSegmentArrivalDate($segmentArrivalDate)
            ->setJourneyOrigin($journeyOrigin)
            ->setJourneyDestination($journeyDestination)
            ->setJourneyRailLocOrigin($journeyRailLocOrigin)
            ->setJourneyRailLocDestination($journeyRailLocDestination)
            ->setSupplierCode($supplierCode)
            ->setTrainNumber($trainNumber)
            ->setPassiveOnly($passiveOnly);
    }
    /**
     * Get JourneyDepartureDate value
     * @return \Travelport\UniversalRecord\StructType\TypeDateSpec|null
     */
    public function getJourneyDepartureDate(): ?\Travelport\UniversalRecord\StructType\TypeDateSpec
    {
        return $this->JourneyDepartureDate;
    }
    /**
     * Set JourneyDepartureDate value
     * @param \Travelport\UniversalRecord\StructType\TypeDateSpec $journeyDepartureDate
     * @return \Travelport\UniversalRecord\StructType\RailReservationCriteria
     */
    public function setJourneyDepartureDate(?\Travelport\UniversalRecord\StructType\TypeDateSpec $journeyDepartureDate = null): self
    {
        $this->JourneyDepartureDate = $journeyDepartureDate;
        
        return $this;
    }
    /**
     * Get JourneyArrivalDate value
     * @return \Travelport\UniversalRecord\StructType\TypeDateSpec|null
     */
    public function getJourneyArrivalDate(): ?\Travelport\UniversalRecord\StructType\TypeDateSpec
    {
        return $this->JourneyArrivalDate;
    }
    /**
     * Set JourneyArrivalDate value
     * @param \Travelport\UniversalRecord\StructType\TypeDateSpec $journeyArrivalDate
     * @return \Travelport\UniversalRecord\StructType\RailReservationCriteria
     */
    public function setJourneyArrivalDate(?\Travelport\UniversalRecord\StructType\TypeDateSpec $journeyArrivalDate = null): self
    {
        $this->JourneyArrivalDate = $journeyArrivalDate;
        
        return $this;
    }
    /**
     * Get SegmentDepartureDate value
     * @return \Travelport\UniversalRecord\StructType\TypeDateSpec|null
     */
    public function getSegmentDepartureDate(): ?\Travelport\UniversalRecord\StructType\TypeDateSpec
    {
        return $this->SegmentDepartureDate;
    }
    /**
     * Set SegmentDepartureDate value
     * @param \Travelport\UniversalRecord\StructType\TypeDateSpec $segmentDepartureDate
     * @return \Travelport\UniversalRecord\StructType\RailReservationCriteria
     */
    public function setSegmentDepartureDate(?\Travelport\UniversalRecord\StructType\TypeDateSpec $segmentDepartureDate = null): self
    {
        $this->SegmentDepartureDate = $segmentDepartureDate;
        
        return $this;
    }
    /**
     * Get SegmentArrivalDate value
     * @return \Travelport\UniversalRecord\StructType\TypeDateSpec|null
     */
    public function getSegmentArrivalDate(): ?\Travelport\UniversalRecord\StructType\TypeDateSpec
    {
        return $this->SegmentArrivalDate;
    }
    /**
     * Set SegmentArrivalDate value
     * @param \Travelport\UniversalRecord\StructType\TypeDateSpec $segmentArrivalDate
     * @return \Travelport\UniversalRecord\StructType\RailReservationCriteria
     */
    public function setSegmentArrivalDate(?\Travelport\UniversalRecord\StructType\TypeDateSpec $segmentArrivalDate = null): self
    {
        $this->SegmentArrivalDate = $segmentArrivalDate;
        
        return $this;
    }
    /**
     * Get JourneyOrigin value
     * @return string|null
     */
    public function getJourneyOrigin(): ?string
    {
        return $this->JourneyOrigin;
    }
    /**
     * Set JourneyOrigin value
     * @param string $journeyOrigin
     * @return \Travelport\UniversalRecord\StructType\RailReservationCriteria
     */
    public function setJourneyOrigin(?string $journeyOrigin = null): self
    {
        $this->JourneyOrigin = $journeyOrigin;
        
        return $this;
    }
    /**
     * Get JourneyDestination value
     * @return string|null
     */
    public function getJourneyDestination(): ?string
    {
        return $this->JourneyDestination;
    }
    /**
     * Set JourneyDestination value
     * @param string $journeyDestination
     * @return \Travelport\UniversalRecord\StructType\RailReservationCriteria
     */
    public function setJourneyDestination(?string $journeyDestination = null): self
    {
        $this->JourneyDestination = $journeyDestination;
        
        return $this;
    }
    /**
     * Get JourneyRailLocOrigin value
     * @return string|null
     */
    public function getJourneyRailLocOrigin(): ?string
    {
        return $this->JourneyRailLocOrigin;
    }
    /**
     * Set JourneyRailLocOrigin value
     * @param string $journeyRailLocOrigin
     * @return \Travelport\UniversalRecord\StructType\RailReservationCriteria
     */
    public function setJourneyRailLocOrigin(?string $journeyRailLocOrigin = null): self
    {
        $this->JourneyRailLocOrigin = $journeyRailLocOrigin;
        
        return $this;
    }
    /**
     * Get JourneyRailLocDestination value
     * @return string|null
     */
    public function getJourneyRailLocDestination(): ?string
    {
        return $this->JourneyRailLocDestination;
    }
    /**
     * Set JourneyRailLocDestination value
     * @param string $journeyRailLocDestination
     * @return \Travelport\UniversalRecord\StructType\RailReservationCriteria
     */
    public function setJourneyRailLocDestination(?string $journeyRailLocDestination = null): self
    {
        $this->JourneyRailLocDestination = $journeyRailLocDestination;
        
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
     * @return \Travelport\UniversalRecord\StructType\RailReservationCriteria
     */
    public function setSupplierCode(?string $supplierCode = null): self
    {
        $this->SupplierCode = $supplierCode;
        
        return $this;
    }
    /**
     * Get TrainNumber value
     * @return string|null
     */
    public function getTrainNumber(): ?string
    {
        return $this->TrainNumber;
    }
    /**
     * Set TrainNumber value
     * @param string $trainNumber
     * @return \Travelport\UniversalRecord\StructType\RailReservationCriteria
     */
    public function setTrainNumber(?string $trainNumber = null): self
    {
        $this->TrainNumber = $trainNumber;
        
        return $this;
    }
    /**
     * Get PassiveOnly value
     * @return bool|null
     */
    public function getPassiveOnly(): ?bool
    {
        return $this->PassiveOnly;
    }
    /**
     * Set PassiveOnly value
     * @param bool $passiveOnly
     * @return \Travelport\UniversalRecord\StructType\RailReservationCriteria
     */
    public function setPassiveOnly(?bool $passiveOnly = false): self
    {
        $this->PassiveOnly = $passiveOnly;
        
        return $this;
    }
}
