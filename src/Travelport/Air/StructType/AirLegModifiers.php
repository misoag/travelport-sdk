<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirLegModifiers StructType
 * @subpackage Structs
 */
class AirLegModifiers extends AbstractStructBase
{
    /**
     * The PermittedCabins
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: PermittedCabins
     * @var \Travelport\Air\StructType\PermittedCabins|null
     */
    public ?\Travelport\Air\StructType\PermittedCabins $PermittedCabins = null;
    /**
     * The PreferredCabins
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: PreferredCabins
     * @var \Travelport\Air\StructType\PreferredCabins|null
     */
    public ?\Travelport\Air\StructType\PreferredCabins $PreferredCabins = null;
    /**
     * The PermittedCarriers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: PermittedCarriers
     * @var \Travelport\Air\StructType\PermittedCarriers|null
     */
    public ?\Travelport\Air\StructType\PermittedCarriers $PermittedCarriers = null;
    /**
     * The ProhibitedCarriers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: ProhibitedCarriers
     * @var \Travelport\Air\StructType\ProhibitedCarriers|null
     */
    public ?\Travelport\Air\StructType\ProhibitedCarriers $ProhibitedCarriers = null;
    /**
     * The PreferredCarriers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: PreferredCarriers
     * @var \Travelport\Air\StructType\PreferredCarriers|null
     */
    public ?\Travelport\Air\StructType\PreferredCarriers $PreferredCarriers = null;
    /**
     * The PermittedConnectionPoints
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\PermittedConnectionPoints|null
     */
    public ?\Travelport\Air\StructType\PermittedConnectionPoints $PermittedConnectionPoints = null;
    /**
     * The ProhibitedConnectionPoints
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\ProhibitedConnectionPoints|null
     */
    public ?\Travelport\Air\StructType\ProhibitedConnectionPoints $ProhibitedConnectionPoints = null;
    /**
     * The PreferredConnectionPoints
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\PreferredConnectionPoints|null
     */
    public ?\Travelport\Air\StructType\PreferredConnectionPoints $PreferredConnectionPoints = null;
    /**
     * The PermittedBookingCodes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\PermittedBookingCodes|null
     */
    public ?\Travelport\Air\StructType\PermittedBookingCodes $PermittedBookingCodes = null;
    /**
     * The PreferredBookingCodes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: PreferredBookingCodes
     * @var \Travelport\Air\StructType\PreferredBookingCodes|null
     */
    public ?\Travelport\Air\StructType\PreferredBookingCodes $PreferredBookingCodes = null;
    /**
     * The PreferredAlliances
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\PreferredAlliances|null
     */
    public ?\Travelport\Air\StructType\PreferredAlliances $PreferredAlliances = null;
    /**
     * The ProhibitedBookingCodes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\ProhibitedBookingCodes|null
     */
    public ?\Travelport\Air\StructType\ProhibitedBookingCodes $ProhibitedBookingCodes = null;
    /**
     * The DisfavoredAlliances
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\DisfavoredAlliances|null
     */
    public ?\Travelport\Air\StructType\DisfavoredAlliances $DisfavoredAlliances = null;
    /**
     * The FlightType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: FlightType
     * @var \Travelport\Air\StructType\FlightType|null
     */
    public ?\Travelport\Air\StructType\FlightType $FlightType = null;
    /**
     * The AnchorFlightData
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\TypeAnchorFlightData|null
     */
    public ?\Travelport\Air\StructType\TypeAnchorFlightData $AnchorFlightData = null;
    /**
     * The ProhibitOvernightLayovers
     * Meta information extracted from the WSDL
     * - documentation: If true, excludes connections if arrival time of first flight and departure time of second flight is on 2 different calendar days. When used in conjunction with MaxConnectionTime, it would exclude all connections if the connecting
     * flights wait time exceeds the time specified in MaxConnectionTime.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $ProhibitOvernightLayovers = null;
    /**
     * The MaxConnectionTime
     * Meta information extracted from the WSDL
     * - use: optional
     * @var int|null
     */
    public ?int $MaxConnectionTime = null;
    /**
     * The ReturnFirstAvailableOnly
     * Meta information extracted from the WSDL
     * - documentation: If it is true then it will search for first available for the booking code designated or any booking code in same cabin.
     * - use: optional
     * @var bool|null
     */
    public ?bool $ReturnFirstAvailableOnly = null;
    /**
     * The AllowDirectAccess
     * Meta information extracted from the WSDL
     * - documentation: If it is true request will be sent directly to the carrier.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $AllowDirectAccess = null;
    /**
     * The ProhibitMultiAirportConnection
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether to restrict multi-airport connections
     * @var bool|null
     */
    public ?bool $ProhibitMultiAirportConnection = null;
    /**
     * The PreferNonStop
     * Meta information extracted from the WSDL
     * - documentation: When non-stops are preferred, the distribution of search results should skew heavily toward non-stop flights while still returning some one stop flights for comparison and price competitiveness. The search request will ‘boost' the
     * preference towards non-stops. If true then Non Stop flights will be preferred.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $PreferNonStop = null;
    /**
     * The OrderBy
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $OrderBy = null;
    /**
     * The MaxJourneyTime
     * Meta information extracted from the WSDL
     * - documentation: Maximum Journey Time for this leg (in hours) 0-99. Supported Providers 1G,1V. | Maximum Journey Time for this leg (in hours) 0-99.
     * - base: xs:nonNegativeInteger
     * - maxInclusive: 99
     * - minInclusive: 0
     * - use: optional
     * @var int|null
     */
    public ?int $MaxJourneyTime = null;
    /**
     * Constructor method for AirLegModifiers
     * @uses AirLegModifiers::setPermittedCabins()
     * @uses AirLegModifiers::setPreferredCabins()
     * @uses AirLegModifiers::setPermittedCarriers()
     * @uses AirLegModifiers::setProhibitedCarriers()
     * @uses AirLegModifiers::setPreferredCarriers()
     * @uses AirLegModifiers::setPermittedConnectionPoints()
     * @uses AirLegModifiers::setProhibitedConnectionPoints()
     * @uses AirLegModifiers::setPreferredConnectionPoints()
     * @uses AirLegModifiers::setPermittedBookingCodes()
     * @uses AirLegModifiers::setPreferredBookingCodes()
     * @uses AirLegModifiers::setPreferredAlliances()
     * @uses AirLegModifiers::setProhibitedBookingCodes()
     * @uses AirLegModifiers::setDisfavoredAlliances()
     * @uses AirLegModifiers::setFlightType()
     * @uses AirLegModifiers::setAnchorFlightData()
     * @uses AirLegModifiers::setProhibitOvernightLayovers()
     * @uses AirLegModifiers::setMaxConnectionTime()
     * @uses AirLegModifiers::setReturnFirstAvailableOnly()
     * @uses AirLegModifiers::setAllowDirectAccess()
     * @uses AirLegModifiers::setProhibitMultiAirportConnection()
     * @uses AirLegModifiers::setPreferNonStop()
     * @uses AirLegModifiers::setOrderBy()
     * @uses AirLegModifiers::setMaxJourneyTime()
     * @param \Travelport\Air\StructType\PermittedCabins $permittedCabins
     * @param \Travelport\Air\StructType\PreferredCabins $preferredCabins
     * @param \Travelport\Air\StructType\PermittedCarriers $permittedCarriers
     * @param \Travelport\Air\StructType\ProhibitedCarriers $prohibitedCarriers
     * @param \Travelport\Air\StructType\PreferredCarriers $preferredCarriers
     * @param \Travelport\Air\StructType\PermittedConnectionPoints $permittedConnectionPoints
     * @param \Travelport\Air\StructType\ProhibitedConnectionPoints $prohibitedConnectionPoints
     * @param \Travelport\Air\StructType\PreferredConnectionPoints $preferredConnectionPoints
     * @param \Travelport\Air\StructType\PermittedBookingCodes $permittedBookingCodes
     * @param \Travelport\Air\StructType\PreferredBookingCodes $preferredBookingCodes
     * @param \Travelport\Air\StructType\PreferredAlliances $preferredAlliances
     * @param \Travelport\Air\StructType\ProhibitedBookingCodes $prohibitedBookingCodes
     * @param \Travelport\Air\StructType\DisfavoredAlliances $disfavoredAlliances
     * @param \Travelport\Air\StructType\FlightType $flightType
     * @param \Travelport\Air\StructType\TypeAnchorFlightData $anchorFlightData
     * @param bool $prohibitOvernightLayovers
     * @param int $maxConnectionTime
     * @param bool $returnFirstAvailableOnly
     * @param bool $allowDirectAccess
     * @param bool $prohibitMultiAirportConnection
     * @param bool $preferNonStop
     * @param string $orderBy
     * @param int $maxJourneyTime
     */
    public function __construct(?\Travelport\Air\StructType\PermittedCabins $permittedCabins = null, ?\Travelport\Air\StructType\PreferredCabins $preferredCabins = null, ?\Travelport\Air\StructType\PermittedCarriers $permittedCarriers = null, ?\Travelport\Air\StructType\ProhibitedCarriers $prohibitedCarriers = null, ?\Travelport\Air\StructType\PreferredCarriers $preferredCarriers = null, ?\Travelport\Air\StructType\PermittedConnectionPoints $permittedConnectionPoints = null, ?\Travelport\Air\StructType\ProhibitedConnectionPoints $prohibitedConnectionPoints = null, ?\Travelport\Air\StructType\PreferredConnectionPoints $preferredConnectionPoints = null, ?\Travelport\Air\StructType\PermittedBookingCodes $permittedBookingCodes = null, ?\Travelport\Air\StructType\PreferredBookingCodes $preferredBookingCodes = null, ?\Travelport\Air\StructType\PreferredAlliances $preferredAlliances = null, ?\Travelport\Air\StructType\ProhibitedBookingCodes $prohibitedBookingCodes = null, ?\Travelport\Air\StructType\DisfavoredAlliances $disfavoredAlliances = null, ?\Travelport\Air\StructType\FlightType $flightType = null, ?\Travelport\Air\StructType\TypeAnchorFlightData $anchorFlightData = null, ?bool $prohibitOvernightLayovers = false, ?int $maxConnectionTime = null, ?bool $returnFirstAvailableOnly = null, ?bool $allowDirectAccess = false, ?bool $prohibitMultiAirportConnection = null, ?bool $preferNonStop = false, ?string $orderBy = null, ?int $maxJourneyTime = null)
    {
        $this
            ->setPermittedCabins($permittedCabins)
            ->setPreferredCabins($preferredCabins)
            ->setPermittedCarriers($permittedCarriers)
            ->setProhibitedCarriers($prohibitedCarriers)
            ->setPreferredCarriers($preferredCarriers)
            ->setPermittedConnectionPoints($permittedConnectionPoints)
            ->setProhibitedConnectionPoints($prohibitedConnectionPoints)
            ->setPreferredConnectionPoints($preferredConnectionPoints)
            ->setPermittedBookingCodes($permittedBookingCodes)
            ->setPreferredBookingCodes($preferredBookingCodes)
            ->setPreferredAlliances($preferredAlliances)
            ->setProhibitedBookingCodes($prohibitedBookingCodes)
            ->setDisfavoredAlliances($disfavoredAlliances)
            ->setFlightType($flightType)
            ->setAnchorFlightData($anchorFlightData)
            ->setProhibitOvernightLayovers($prohibitOvernightLayovers)
            ->setMaxConnectionTime($maxConnectionTime)
            ->setReturnFirstAvailableOnly($returnFirstAvailableOnly)
            ->setAllowDirectAccess($allowDirectAccess)
            ->setProhibitMultiAirportConnection($prohibitMultiAirportConnection)
            ->setPreferNonStop($preferNonStop)
            ->setOrderBy($orderBy)
            ->setMaxJourneyTime($maxJourneyTime);
    }
    /**
     * Get PermittedCabins value
     * @return \Travelport\Air\StructType\PermittedCabins|null
     */
    public function getPermittedCabins(): ?\Travelport\Air\StructType\PermittedCabins
    {
        return $this->PermittedCabins;
    }
    /**
     * Set PermittedCabins value
     * @param \Travelport\Air\StructType\PermittedCabins $permittedCabins
     * @return \Travelport\Air\StructType\AirLegModifiers
     */
    public function setPermittedCabins(?\Travelport\Air\StructType\PermittedCabins $permittedCabins = null): self
    {
        $this->PermittedCabins = $permittedCabins;
        
        return $this;
    }
    /**
     * Get PreferredCabins value
     * @return \Travelport\Air\StructType\PreferredCabins|null
     */
    public function getPreferredCabins(): ?\Travelport\Air\StructType\PreferredCabins
    {
        return $this->PreferredCabins;
    }
    /**
     * Set PreferredCabins value
     * @param \Travelport\Air\StructType\PreferredCabins $preferredCabins
     * @return \Travelport\Air\StructType\AirLegModifiers
     */
    public function setPreferredCabins(?\Travelport\Air\StructType\PreferredCabins $preferredCabins = null): self
    {
        $this->PreferredCabins = $preferredCabins;
        
        return $this;
    }
    /**
     * Get PermittedCarriers value
     * @return \Travelport\Air\StructType\PermittedCarriers|null
     */
    public function getPermittedCarriers(): ?\Travelport\Air\StructType\PermittedCarriers
    {
        return $this->PermittedCarriers;
    }
    /**
     * Set PermittedCarriers value
     * @param \Travelport\Air\StructType\PermittedCarriers $permittedCarriers
     * @return \Travelport\Air\StructType\AirLegModifiers
     */
    public function setPermittedCarriers(?\Travelport\Air\StructType\PermittedCarriers $permittedCarriers = null): self
    {
        $this->PermittedCarriers = $permittedCarriers;
        
        return $this;
    }
    /**
     * Get ProhibitedCarriers value
     * @return \Travelport\Air\StructType\ProhibitedCarriers|null
     */
    public function getProhibitedCarriers(): ?\Travelport\Air\StructType\ProhibitedCarriers
    {
        return $this->ProhibitedCarriers;
    }
    /**
     * Set ProhibitedCarriers value
     * @param \Travelport\Air\StructType\ProhibitedCarriers $prohibitedCarriers
     * @return \Travelport\Air\StructType\AirLegModifiers
     */
    public function setProhibitedCarriers(?\Travelport\Air\StructType\ProhibitedCarriers $prohibitedCarriers = null): self
    {
        $this->ProhibitedCarriers = $prohibitedCarriers;
        
        return $this;
    }
    /**
     * Get PreferredCarriers value
     * @return \Travelport\Air\StructType\PreferredCarriers|null
     */
    public function getPreferredCarriers(): ?\Travelport\Air\StructType\PreferredCarriers
    {
        return $this->PreferredCarriers;
    }
    /**
     * Set PreferredCarriers value
     * @param \Travelport\Air\StructType\PreferredCarriers $preferredCarriers
     * @return \Travelport\Air\StructType\AirLegModifiers
     */
    public function setPreferredCarriers(?\Travelport\Air\StructType\PreferredCarriers $preferredCarriers = null): self
    {
        $this->PreferredCarriers = $preferredCarriers;
        
        return $this;
    }
    /**
     * Get PermittedConnectionPoints value
     * @return \Travelport\Air\StructType\PermittedConnectionPoints|null
     */
    public function getPermittedConnectionPoints(): ?\Travelport\Air\StructType\PermittedConnectionPoints
    {
        return $this->PermittedConnectionPoints;
    }
    /**
     * Set PermittedConnectionPoints value
     * @param \Travelport\Air\StructType\PermittedConnectionPoints $permittedConnectionPoints
     * @return \Travelport\Air\StructType\AirLegModifiers
     */
    public function setPermittedConnectionPoints(?\Travelport\Air\StructType\PermittedConnectionPoints $permittedConnectionPoints = null): self
    {
        $this->PermittedConnectionPoints = $permittedConnectionPoints;
        
        return $this;
    }
    /**
     * Get ProhibitedConnectionPoints value
     * @return \Travelport\Air\StructType\ProhibitedConnectionPoints|null
     */
    public function getProhibitedConnectionPoints(): ?\Travelport\Air\StructType\ProhibitedConnectionPoints
    {
        return $this->ProhibitedConnectionPoints;
    }
    /**
     * Set ProhibitedConnectionPoints value
     * @param \Travelport\Air\StructType\ProhibitedConnectionPoints $prohibitedConnectionPoints
     * @return \Travelport\Air\StructType\AirLegModifiers
     */
    public function setProhibitedConnectionPoints(?\Travelport\Air\StructType\ProhibitedConnectionPoints $prohibitedConnectionPoints = null): self
    {
        $this->ProhibitedConnectionPoints = $prohibitedConnectionPoints;
        
        return $this;
    }
    /**
     * Get PreferredConnectionPoints value
     * @return \Travelport\Air\StructType\PreferredConnectionPoints|null
     */
    public function getPreferredConnectionPoints(): ?\Travelport\Air\StructType\PreferredConnectionPoints
    {
        return $this->PreferredConnectionPoints;
    }
    /**
     * Set PreferredConnectionPoints value
     * @param \Travelport\Air\StructType\PreferredConnectionPoints $preferredConnectionPoints
     * @return \Travelport\Air\StructType\AirLegModifiers
     */
    public function setPreferredConnectionPoints(?\Travelport\Air\StructType\PreferredConnectionPoints $preferredConnectionPoints = null): self
    {
        $this->PreferredConnectionPoints = $preferredConnectionPoints;
        
        return $this;
    }
    /**
     * Get PermittedBookingCodes value
     * @return \Travelport\Air\StructType\PermittedBookingCodes|null
     */
    public function getPermittedBookingCodes(): ?\Travelport\Air\StructType\PermittedBookingCodes
    {
        return $this->PermittedBookingCodes;
    }
    /**
     * Set PermittedBookingCodes value
     * @param \Travelport\Air\StructType\PermittedBookingCodes $permittedBookingCodes
     * @return \Travelport\Air\StructType\AirLegModifiers
     */
    public function setPermittedBookingCodes(?\Travelport\Air\StructType\PermittedBookingCodes $permittedBookingCodes = null): self
    {
        $this->PermittedBookingCodes = $permittedBookingCodes;
        
        return $this;
    }
    /**
     * Get PreferredBookingCodes value
     * @return \Travelport\Air\StructType\PreferredBookingCodes|null
     */
    public function getPreferredBookingCodes(): ?\Travelport\Air\StructType\PreferredBookingCodes
    {
        return $this->PreferredBookingCodes;
    }
    /**
     * Set PreferredBookingCodes value
     * @param \Travelport\Air\StructType\PreferredBookingCodes $preferredBookingCodes
     * @return \Travelport\Air\StructType\AirLegModifiers
     */
    public function setPreferredBookingCodes(?\Travelport\Air\StructType\PreferredBookingCodes $preferredBookingCodes = null): self
    {
        $this->PreferredBookingCodes = $preferredBookingCodes;
        
        return $this;
    }
    /**
     * Get PreferredAlliances value
     * @return \Travelport\Air\StructType\PreferredAlliances|null
     */
    public function getPreferredAlliances(): ?\Travelport\Air\StructType\PreferredAlliances
    {
        return $this->PreferredAlliances;
    }
    /**
     * Set PreferredAlliances value
     * @param \Travelport\Air\StructType\PreferredAlliances $preferredAlliances
     * @return \Travelport\Air\StructType\AirLegModifiers
     */
    public function setPreferredAlliances(?\Travelport\Air\StructType\PreferredAlliances $preferredAlliances = null): self
    {
        $this->PreferredAlliances = $preferredAlliances;
        
        return $this;
    }
    /**
     * Get ProhibitedBookingCodes value
     * @return \Travelport\Air\StructType\ProhibitedBookingCodes|null
     */
    public function getProhibitedBookingCodes(): ?\Travelport\Air\StructType\ProhibitedBookingCodes
    {
        return $this->ProhibitedBookingCodes;
    }
    /**
     * Set ProhibitedBookingCodes value
     * @param \Travelport\Air\StructType\ProhibitedBookingCodes $prohibitedBookingCodes
     * @return \Travelport\Air\StructType\AirLegModifiers
     */
    public function setProhibitedBookingCodes(?\Travelport\Air\StructType\ProhibitedBookingCodes $prohibitedBookingCodes = null): self
    {
        $this->ProhibitedBookingCodes = $prohibitedBookingCodes;
        
        return $this;
    }
    /**
     * Get DisfavoredAlliances value
     * @return \Travelport\Air\StructType\DisfavoredAlliances|null
     */
    public function getDisfavoredAlliances(): ?\Travelport\Air\StructType\DisfavoredAlliances
    {
        return $this->DisfavoredAlliances;
    }
    /**
     * Set DisfavoredAlliances value
     * @param \Travelport\Air\StructType\DisfavoredAlliances $disfavoredAlliances
     * @return \Travelport\Air\StructType\AirLegModifiers
     */
    public function setDisfavoredAlliances(?\Travelport\Air\StructType\DisfavoredAlliances $disfavoredAlliances = null): self
    {
        $this->DisfavoredAlliances = $disfavoredAlliances;
        
        return $this;
    }
    /**
     * Get FlightType value
     * @return \Travelport\Air\StructType\FlightType|null
     */
    public function getFlightType(): ?\Travelport\Air\StructType\FlightType
    {
        return $this->FlightType;
    }
    /**
     * Set FlightType value
     * @param \Travelport\Air\StructType\FlightType $flightType
     * @return \Travelport\Air\StructType\AirLegModifiers
     */
    public function setFlightType(?\Travelport\Air\StructType\FlightType $flightType = null): self
    {
        $this->FlightType = $flightType;
        
        return $this;
    }
    /**
     * Get AnchorFlightData value
     * @return \Travelport\Air\StructType\TypeAnchorFlightData|null
     */
    public function getAnchorFlightData(): ?\Travelport\Air\StructType\TypeAnchorFlightData
    {
        return $this->AnchorFlightData;
    }
    /**
     * Set AnchorFlightData value
     * @param \Travelport\Air\StructType\TypeAnchorFlightData $anchorFlightData
     * @return \Travelport\Air\StructType\AirLegModifiers
     */
    public function setAnchorFlightData(?\Travelport\Air\StructType\TypeAnchorFlightData $anchorFlightData = null): self
    {
        $this->AnchorFlightData = $anchorFlightData;
        
        return $this;
    }
    /**
     * Get ProhibitOvernightLayovers value
     * @return bool|null
     */
    public function getProhibitOvernightLayovers(): ?bool
    {
        return $this->ProhibitOvernightLayovers;
    }
    /**
     * Set ProhibitOvernightLayovers value
     * @param bool $prohibitOvernightLayovers
     * @return \Travelport\Air\StructType\AirLegModifiers
     */
    public function setProhibitOvernightLayovers(?bool $prohibitOvernightLayovers = false): self
    {
        $this->ProhibitOvernightLayovers = $prohibitOvernightLayovers;
        
        return $this;
    }
    /**
     * Get MaxConnectionTime value
     * @return int|null
     */
    public function getMaxConnectionTime(): ?int
    {
        return $this->MaxConnectionTime;
    }
    /**
     * Set MaxConnectionTime value
     * @param int $maxConnectionTime
     * @return \Travelport\Air\StructType\AirLegModifiers
     */
    public function setMaxConnectionTime(?int $maxConnectionTime = null): self
    {
        $this->MaxConnectionTime = $maxConnectionTime;
        
        return $this;
    }
    /**
     * Get ReturnFirstAvailableOnly value
     * @return bool|null
     */
    public function getReturnFirstAvailableOnly(): ?bool
    {
        return $this->ReturnFirstAvailableOnly;
    }
    /**
     * Set ReturnFirstAvailableOnly value
     * @param bool $returnFirstAvailableOnly
     * @return \Travelport\Air\StructType\AirLegModifiers
     */
    public function setReturnFirstAvailableOnly(?bool $returnFirstAvailableOnly = null): self
    {
        $this->ReturnFirstAvailableOnly = $returnFirstAvailableOnly;
        
        return $this;
    }
    /**
     * Get AllowDirectAccess value
     * @return bool|null
     */
    public function getAllowDirectAccess(): ?bool
    {
        return $this->AllowDirectAccess;
    }
    /**
     * Set AllowDirectAccess value
     * @param bool $allowDirectAccess
     * @return \Travelport\Air\StructType\AirLegModifiers
     */
    public function setAllowDirectAccess(?bool $allowDirectAccess = false): self
    {
        $this->AllowDirectAccess = $allowDirectAccess;
        
        return $this;
    }
    /**
     * Get ProhibitMultiAirportConnection value
     * @return bool|null
     */
    public function getProhibitMultiAirportConnection(): ?bool
    {
        return $this->ProhibitMultiAirportConnection;
    }
    /**
     * Set ProhibitMultiAirportConnection value
     * @param bool $prohibitMultiAirportConnection
     * @return \Travelport\Air\StructType\AirLegModifiers
     */
    public function setProhibitMultiAirportConnection(?bool $prohibitMultiAirportConnection = null): self
    {
        $this->ProhibitMultiAirportConnection = $prohibitMultiAirportConnection;
        
        return $this;
    }
    /**
     * Get PreferNonStop value
     * @return bool|null
     */
    public function getPreferNonStop(): ?bool
    {
        return $this->PreferNonStop;
    }
    /**
     * Set PreferNonStop value
     * @param bool $preferNonStop
     * @return \Travelport\Air\StructType\AirLegModifiers
     */
    public function setPreferNonStop(?bool $preferNonStop = false): self
    {
        $this->PreferNonStop = $preferNonStop;
        
        return $this;
    }
    /**
     * Get OrderBy value
     * @return string|null
     */
    public function getOrderBy(): ?string
    {
        return $this->OrderBy;
    }
    /**
     * Set OrderBy value
     * @param string $orderBy
     * @return \Travelport\Air\StructType\AirLegModifiers
     */
    public function setOrderBy(?string $orderBy = null): self
    {
        $this->OrderBy = $orderBy;
        
        return $this;
    }
    /**
     * Get MaxJourneyTime value
     * @return int|null
     */
    public function getMaxJourneyTime(): ?int
    {
        return $this->MaxJourneyTime;
    }
    /**
     * Set MaxJourneyTime value
     * @param int $maxJourneyTime
     * @return \Travelport\Air\StructType\AirLegModifiers
     */
    public function setMaxJourneyTime(?int $maxJourneyTime = null): self
    {
        $this->MaxJourneyTime = $maxJourneyTime;
        
        return $this;
    }
}
