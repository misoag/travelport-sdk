<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
     * @var \Travelport\UniversalRecord\StructType\PermittedCabins|null
     */
    protected ?\Travelport\UniversalRecord\StructType\PermittedCabins $PermittedCabins = null;
    /**
     * The PreferredCabins
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: PreferredCabins
     * @var \Travelport\UniversalRecord\StructType\PreferredCabins|null
     */
    protected ?\Travelport\UniversalRecord\StructType\PreferredCabins $PreferredCabins = null;
    /**
     * The PermittedCarriers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: PermittedCarriers
     * @var \Travelport\UniversalRecord\StructType\PermittedCarriers|null
     */
    protected ?\Travelport\UniversalRecord\StructType\PermittedCarriers $PermittedCarriers = null;
    /**
     * The ProhibitedCarriers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: ProhibitedCarriers
     * @var \Travelport\UniversalRecord\StructType\ProhibitedCarriers|null
     */
    protected ?\Travelport\UniversalRecord\StructType\ProhibitedCarriers $ProhibitedCarriers = null;
    /**
     * The PreferredCarriers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: PreferredCarriers
     * @var \Travelport\UniversalRecord\StructType\PreferredCarriers|null
     */
    protected ?\Travelport\UniversalRecord\StructType\PreferredCarriers $PreferredCarriers = null;
    /**
     * The PermittedConnectionPoints
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\PermittedConnectionPoints|null
     */
    protected ?\Travelport\UniversalRecord\StructType\PermittedConnectionPoints $PermittedConnectionPoints = null;
    /**
     * The ProhibitedConnectionPoints
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\ProhibitedConnectionPoints|null
     */
    protected ?\Travelport\UniversalRecord\StructType\ProhibitedConnectionPoints $ProhibitedConnectionPoints = null;
    /**
     * The PreferredConnectionPoints
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\PreferredConnectionPoints|null
     */
    protected ?\Travelport\UniversalRecord\StructType\PreferredConnectionPoints $PreferredConnectionPoints = null;
    /**
     * The PermittedBookingCodes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\PermittedBookingCodes|null
     */
    protected ?\Travelport\UniversalRecord\StructType\PermittedBookingCodes $PermittedBookingCodes = null;
    /**
     * The PreferredBookingCodes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: PreferredBookingCodes
     * @var \Travelport\UniversalRecord\StructType\PreferredBookingCodes|null
     */
    protected ?\Travelport\UniversalRecord\StructType\PreferredBookingCodes $PreferredBookingCodes = null;
    /**
     * The PreferredAlliances
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\PreferredAlliances|null
     */
    protected ?\Travelport\UniversalRecord\StructType\PreferredAlliances $PreferredAlliances = null;
    /**
     * The ProhibitedBookingCodes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\ProhibitedBookingCodes|null
     */
    protected ?\Travelport\UniversalRecord\StructType\ProhibitedBookingCodes $ProhibitedBookingCodes = null;
    /**
     * The DisfavoredAlliances
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\DisfavoredAlliances|null
     */
    protected ?\Travelport\UniversalRecord\StructType\DisfavoredAlliances $DisfavoredAlliances = null;
    /**
     * The FlightType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: FlightType
     * @var \Travelport\UniversalRecord\StructType\FlightType|null
     */
    protected ?\Travelport\UniversalRecord\StructType\FlightType $FlightType = null;
    /**
     * The AnchorFlightData
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeAnchorFlightData|null
     */
    protected ?\Travelport\UniversalRecord\StructType\TypeAnchorFlightData $AnchorFlightData = null;
    /**
     * The ProhibitOvernightLayovers
     * Meta information extracted from the WSDL
     * - documentation: If true, excludes connections if arrival time of first flight and departure time of second flight is on 2 different calendar days. When used in conjunction with MaxConnectionTime, it would exclude all connections if the connecting
     * flights wait time exceeds the time specified in MaxConnectionTime.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $ProhibitOvernightLayovers = null;
    /**
     * The MaxConnectionTime
     * Meta information extracted from the WSDL
     * - use: optional
     * @var int|null
     */
    protected ?int $MaxConnectionTime = null;
    /**
     * The ReturnFirstAvailableOnly
     * Meta information extracted from the WSDL
     * - documentation: If it is true then it will search for first available for the booking code designated or any booking code in same cabin.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $ReturnFirstAvailableOnly = null;
    /**
     * The AllowDirectAccess
     * Meta information extracted from the WSDL
     * - documentation: If it is true request will be sent directly to the carrier.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $AllowDirectAccess = null;
    /**
     * The ProhibitMultiAirportConnection
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether to restrict multi-airport connections
     * @var bool|null
     */
    protected ?bool $ProhibitMultiAirportConnection = null;
    /**
     * The PreferNonStop
     * Meta information extracted from the WSDL
     * - documentation: When non-stops are preferred, the distribution of search results should skew heavily toward non-stop flights while still returning some one stop flights for comparison and price competitiveness. The search request will ‘boost' the
     * preference towards non-stops. If true then Non Stop flights will be preferred.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $PreferNonStop = null;
    /**
     * The OrderBy
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $OrderBy = null;
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
    protected ?int $MaxJourneyTime = null;
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
     * @param \Travelport\UniversalRecord\StructType\PermittedCabins $permittedCabins
     * @param \Travelport\UniversalRecord\StructType\PreferredCabins $preferredCabins
     * @param \Travelport\UniversalRecord\StructType\PermittedCarriers $permittedCarriers
     * @param \Travelport\UniversalRecord\StructType\ProhibitedCarriers $prohibitedCarriers
     * @param \Travelport\UniversalRecord\StructType\PreferredCarriers $preferredCarriers
     * @param \Travelport\UniversalRecord\StructType\PermittedConnectionPoints $permittedConnectionPoints
     * @param \Travelport\UniversalRecord\StructType\ProhibitedConnectionPoints $prohibitedConnectionPoints
     * @param \Travelport\UniversalRecord\StructType\PreferredConnectionPoints $preferredConnectionPoints
     * @param \Travelport\UniversalRecord\StructType\PermittedBookingCodes $permittedBookingCodes
     * @param \Travelport\UniversalRecord\StructType\PreferredBookingCodes $preferredBookingCodes
     * @param \Travelport\UniversalRecord\StructType\PreferredAlliances $preferredAlliances
     * @param \Travelport\UniversalRecord\StructType\ProhibitedBookingCodes $prohibitedBookingCodes
     * @param \Travelport\UniversalRecord\StructType\DisfavoredAlliances $disfavoredAlliances
     * @param \Travelport\UniversalRecord\StructType\FlightType $flightType
     * @param \Travelport\UniversalRecord\StructType\TypeAnchorFlightData $anchorFlightData
     * @param bool $prohibitOvernightLayovers
     * @param int $maxConnectionTime
     * @param bool $returnFirstAvailableOnly
     * @param bool $allowDirectAccess
     * @param bool $prohibitMultiAirportConnection
     * @param bool $preferNonStop
     * @param string $orderBy
     * @param int $maxJourneyTime
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\PermittedCabins $permittedCabins = null, ?\Travelport\UniversalRecord\StructType\PreferredCabins $preferredCabins = null, ?\Travelport\UniversalRecord\StructType\PermittedCarriers $permittedCarriers = null, ?\Travelport\UniversalRecord\StructType\ProhibitedCarriers $prohibitedCarriers = null, ?\Travelport\UniversalRecord\StructType\PreferredCarriers $preferredCarriers = null, ?\Travelport\UniversalRecord\StructType\PermittedConnectionPoints $permittedConnectionPoints = null, ?\Travelport\UniversalRecord\StructType\ProhibitedConnectionPoints $prohibitedConnectionPoints = null, ?\Travelport\UniversalRecord\StructType\PreferredConnectionPoints $preferredConnectionPoints = null, ?\Travelport\UniversalRecord\StructType\PermittedBookingCodes $permittedBookingCodes = null, ?\Travelport\UniversalRecord\StructType\PreferredBookingCodes $preferredBookingCodes = null, ?\Travelport\UniversalRecord\StructType\PreferredAlliances $preferredAlliances = null, ?\Travelport\UniversalRecord\StructType\ProhibitedBookingCodes $prohibitedBookingCodes = null, ?\Travelport\UniversalRecord\StructType\DisfavoredAlliances $disfavoredAlliances = null, ?\Travelport\UniversalRecord\StructType\FlightType $flightType = null, ?\Travelport\UniversalRecord\StructType\TypeAnchorFlightData $anchorFlightData = null, ?bool $prohibitOvernightLayovers = false, ?int $maxConnectionTime = null, ?bool $returnFirstAvailableOnly = null, ?bool $allowDirectAccess = false, ?bool $prohibitMultiAirportConnection = null, ?bool $preferNonStop = false, ?string $orderBy = null, ?int $maxJourneyTime = null)
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
     * @return \Travelport\UniversalRecord\StructType\PermittedCabins|null
     */
    public function getPermittedCabins(): ?\Travelport\UniversalRecord\StructType\PermittedCabins
    {
        return $this->PermittedCabins;
    }
    /**
     * Set PermittedCabins value
     * @param \Travelport\UniversalRecord\StructType\PermittedCabins $permittedCabins
     * @return \Travelport\UniversalRecord\StructType\AirLegModifiers
     */
    public function setPermittedCabins(?\Travelport\UniversalRecord\StructType\PermittedCabins $permittedCabins = null): self
    {
        $this->PermittedCabins = $permittedCabins;
        
        return $this;
    }
    /**
     * Get PreferredCabins value
     * @return \Travelport\UniversalRecord\StructType\PreferredCabins|null
     */
    public function getPreferredCabins(): ?\Travelport\UniversalRecord\StructType\PreferredCabins
    {
        return $this->PreferredCabins;
    }
    /**
     * Set PreferredCabins value
     * @param \Travelport\UniversalRecord\StructType\PreferredCabins $preferredCabins
     * @return \Travelport\UniversalRecord\StructType\AirLegModifiers
     */
    public function setPreferredCabins(?\Travelport\UniversalRecord\StructType\PreferredCabins $preferredCabins = null): self
    {
        $this->PreferredCabins = $preferredCabins;
        
        return $this;
    }
    /**
     * Get PermittedCarriers value
     * @return \Travelport\UniversalRecord\StructType\PermittedCarriers|null
     */
    public function getPermittedCarriers(): ?\Travelport\UniversalRecord\StructType\PermittedCarriers
    {
        return $this->PermittedCarriers;
    }
    /**
     * Set PermittedCarriers value
     * @param \Travelport\UniversalRecord\StructType\PermittedCarriers $permittedCarriers
     * @return \Travelport\UniversalRecord\StructType\AirLegModifiers
     */
    public function setPermittedCarriers(?\Travelport\UniversalRecord\StructType\PermittedCarriers $permittedCarriers = null): self
    {
        $this->PermittedCarriers = $permittedCarriers;
        
        return $this;
    }
    /**
     * Get ProhibitedCarriers value
     * @return \Travelport\UniversalRecord\StructType\ProhibitedCarriers|null
     */
    public function getProhibitedCarriers(): ?\Travelport\UniversalRecord\StructType\ProhibitedCarriers
    {
        return $this->ProhibitedCarriers;
    }
    /**
     * Set ProhibitedCarriers value
     * @param \Travelport\UniversalRecord\StructType\ProhibitedCarriers $prohibitedCarriers
     * @return \Travelport\UniversalRecord\StructType\AirLegModifiers
     */
    public function setProhibitedCarriers(?\Travelport\UniversalRecord\StructType\ProhibitedCarriers $prohibitedCarriers = null): self
    {
        $this->ProhibitedCarriers = $prohibitedCarriers;
        
        return $this;
    }
    /**
     * Get PreferredCarriers value
     * @return \Travelport\UniversalRecord\StructType\PreferredCarriers|null
     */
    public function getPreferredCarriers(): ?\Travelport\UniversalRecord\StructType\PreferredCarriers
    {
        return $this->PreferredCarriers;
    }
    /**
     * Set PreferredCarriers value
     * @param \Travelport\UniversalRecord\StructType\PreferredCarriers $preferredCarriers
     * @return \Travelport\UniversalRecord\StructType\AirLegModifiers
     */
    public function setPreferredCarriers(?\Travelport\UniversalRecord\StructType\PreferredCarriers $preferredCarriers = null): self
    {
        $this->PreferredCarriers = $preferredCarriers;
        
        return $this;
    }
    /**
     * Get PermittedConnectionPoints value
     * @return \Travelport\UniversalRecord\StructType\PermittedConnectionPoints|null
     */
    public function getPermittedConnectionPoints(): ?\Travelport\UniversalRecord\StructType\PermittedConnectionPoints
    {
        return $this->PermittedConnectionPoints;
    }
    /**
     * Set PermittedConnectionPoints value
     * @param \Travelport\UniversalRecord\StructType\PermittedConnectionPoints $permittedConnectionPoints
     * @return \Travelport\UniversalRecord\StructType\AirLegModifiers
     */
    public function setPermittedConnectionPoints(?\Travelport\UniversalRecord\StructType\PermittedConnectionPoints $permittedConnectionPoints = null): self
    {
        $this->PermittedConnectionPoints = $permittedConnectionPoints;
        
        return $this;
    }
    /**
     * Get ProhibitedConnectionPoints value
     * @return \Travelport\UniversalRecord\StructType\ProhibitedConnectionPoints|null
     */
    public function getProhibitedConnectionPoints(): ?\Travelport\UniversalRecord\StructType\ProhibitedConnectionPoints
    {
        return $this->ProhibitedConnectionPoints;
    }
    /**
     * Set ProhibitedConnectionPoints value
     * @param \Travelport\UniversalRecord\StructType\ProhibitedConnectionPoints $prohibitedConnectionPoints
     * @return \Travelport\UniversalRecord\StructType\AirLegModifiers
     */
    public function setProhibitedConnectionPoints(?\Travelport\UniversalRecord\StructType\ProhibitedConnectionPoints $prohibitedConnectionPoints = null): self
    {
        $this->ProhibitedConnectionPoints = $prohibitedConnectionPoints;
        
        return $this;
    }
    /**
     * Get PreferredConnectionPoints value
     * @return \Travelport\UniversalRecord\StructType\PreferredConnectionPoints|null
     */
    public function getPreferredConnectionPoints(): ?\Travelport\UniversalRecord\StructType\PreferredConnectionPoints
    {
        return $this->PreferredConnectionPoints;
    }
    /**
     * Set PreferredConnectionPoints value
     * @param \Travelport\UniversalRecord\StructType\PreferredConnectionPoints $preferredConnectionPoints
     * @return \Travelport\UniversalRecord\StructType\AirLegModifiers
     */
    public function setPreferredConnectionPoints(?\Travelport\UniversalRecord\StructType\PreferredConnectionPoints $preferredConnectionPoints = null): self
    {
        $this->PreferredConnectionPoints = $preferredConnectionPoints;
        
        return $this;
    }
    /**
     * Get PermittedBookingCodes value
     * @return \Travelport\UniversalRecord\StructType\PermittedBookingCodes|null
     */
    public function getPermittedBookingCodes(): ?\Travelport\UniversalRecord\StructType\PermittedBookingCodes
    {
        return $this->PermittedBookingCodes;
    }
    /**
     * Set PermittedBookingCodes value
     * @param \Travelport\UniversalRecord\StructType\PermittedBookingCodes $permittedBookingCodes
     * @return \Travelport\UniversalRecord\StructType\AirLegModifiers
     */
    public function setPermittedBookingCodes(?\Travelport\UniversalRecord\StructType\PermittedBookingCodes $permittedBookingCodes = null): self
    {
        $this->PermittedBookingCodes = $permittedBookingCodes;
        
        return $this;
    }
    /**
     * Get PreferredBookingCodes value
     * @return \Travelport\UniversalRecord\StructType\PreferredBookingCodes|null
     */
    public function getPreferredBookingCodes(): ?\Travelport\UniversalRecord\StructType\PreferredBookingCodes
    {
        return $this->PreferredBookingCodes;
    }
    /**
     * Set PreferredBookingCodes value
     * @param \Travelport\UniversalRecord\StructType\PreferredBookingCodes $preferredBookingCodes
     * @return \Travelport\UniversalRecord\StructType\AirLegModifiers
     */
    public function setPreferredBookingCodes(?\Travelport\UniversalRecord\StructType\PreferredBookingCodes $preferredBookingCodes = null): self
    {
        $this->PreferredBookingCodes = $preferredBookingCodes;
        
        return $this;
    }
    /**
     * Get PreferredAlliances value
     * @return \Travelport\UniversalRecord\StructType\PreferredAlliances|null
     */
    public function getPreferredAlliances(): ?\Travelport\UniversalRecord\StructType\PreferredAlliances
    {
        return $this->PreferredAlliances;
    }
    /**
     * Set PreferredAlliances value
     * @param \Travelport\UniversalRecord\StructType\PreferredAlliances $preferredAlliances
     * @return \Travelport\UniversalRecord\StructType\AirLegModifiers
     */
    public function setPreferredAlliances(?\Travelport\UniversalRecord\StructType\PreferredAlliances $preferredAlliances = null): self
    {
        $this->PreferredAlliances = $preferredAlliances;
        
        return $this;
    }
    /**
     * Get ProhibitedBookingCodes value
     * @return \Travelport\UniversalRecord\StructType\ProhibitedBookingCodes|null
     */
    public function getProhibitedBookingCodes(): ?\Travelport\UniversalRecord\StructType\ProhibitedBookingCodes
    {
        return $this->ProhibitedBookingCodes;
    }
    /**
     * Set ProhibitedBookingCodes value
     * @param \Travelport\UniversalRecord\StructType\ProhibitedBookingCodes $prohibitedBookingCodes
     * @return \Travelport\UniversalRecord\StructType\AirLegModifiers
     */
    public function setProhibitedBookingCodes(?\Travelport\UniversalRecord\StructType\ProhibitedBookingCodes $prohibitedBookingCodes = null): self
    {
        $this->ProhibitedBookingCodes = $prohibitedBookingCodes;
        
        return $this;
    }
    /**
     * Get DisfavoredAlliances value
     * @return \Travelport\UniversalRecord\StructType\DisfavoredAlliances|null
     */
    public function getDisfavoredAlliances(): ?\Travelport\UniversalRecord\StructType\DisfavoredAlliances
    {
        return $this->DisfavoredAlliances;
    }
    /**
     * Set DisfavoredAlliances value
     * @param \Travelport\UniversalRecord\StructType\DisfavoredAlliances $disfavoredAlliances
     * @return \Travelport\UniversalRecord\StructType\AirLegModifiers
     */
    public function setDisfavoredAlliances(?\Travelport\UniversalRecord\StructType\DisfavoredAlliances $disfavoredAlliances = null): self
    {
        $this->DisfavoredAlliances = $disfavoredAlliances;
        
        return $this;
    }
    /**
     * Get FlightType value
     * @return \Travelport\UniversalRecord\StructType\FlightType|null
     */
    public function getFlightType(): ?\Travelport\UniversalRecord\StructType\FlightType
    {
        return $this->FlightType;
    }
    /**
     * Set FlightType value
     * @param \Travelport\UniversalRecord\StructType\FlightType $flightType
     * @return \Travelport\UniversalRecord\StructType\AirLegModifiers
     */
    public function setFlightType(?\Travelport\UniversalRecord\StructType\FlightType $flightType = null): self
    {
        $this->FlightType = $flightType;
        
        return $this;
    }
    /**
     * Get AnchorFlightData value
     * @return \Travelport\UniversalRecord\StructType\TypeAnchorFlightData|null
     */
    public function getAnchorFlightData(): ?\Travelport\UniversalRecord\StructType\TypeAnchorFlightData
    {
        return $this->AnchorFlightData;
    }
    /**
     * Set AnchorFlightData value
     * @param \Travelport\UniversalRecord\StructType\TypeAnchorFlightData $anchorFlightData
     * @return \Travelport\UniversalRecord\StructType\AirLegModifiers
     */
    public function setAnchorFlightData(?\Travelport\UniversalRecord\StructType\TypeAnchorFlightData $anchorFlightData = null): self
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
     * @return \Travelport\UniversalRecord\StructType\AirLegModifiers
     */
    public function setProhibitOvernightLayovers(?bool $prohibitOvernightLayovers = false): self
    {
        // validation for constraint: boolean
        if (!is_null($prohibitOvernightLayovers) && !is_bool($prohibitOvernightLayovers)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($prohibitOvernightLayovers, true), gettype($prohibitOvernightLayovers)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\AirLegModifiers
     */
    public function setMaxConnectionTime(?int $maxConnectionTime = null): self
    {
        // validation for constraint: int
        if (!is_null($maxConnectionTime) && !(is_int($maxConnectionTime) || ctype_digit($maxConnectionTime))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxConnectionTime, true), gettype($maxConnectionTime)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\AirLegModifiers
     */
    public function setReturnFirstAvailableOnly(?bool $returnFirstAvailableOnly = null): self
    {
        // validation for constraint: boolean
        if (!is_null($returnFirstAvailableOnly) && !is_bool($returnFirstAvailableOnly)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($returnFirstAvailableOnly, true), gettype($returnFirstAvailableOnly)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\AirLegModifiers
     */
    public function setAllowDirectAccess(?bool $allowDirectAccess = false): self
    {
        // validation for constraint: boolean
        if (!is_null($allowDirectAccess) && !is_bool($allowDirectAccess)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($allowDirectAccess, true), gettype($allowDirectAccess)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\AirLegModifiers
     */
    public function setProhibitMultiAirportConnection(?bool $prohibitMultiAirportConnection = null): self
    {
        // validation for constraint: boolean
        if (!is_null($prohibitMultiAirportConnection) && !is_bool($prohibitMultiAirportConnection)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($prohibitMultiAirportConnection, true), gettype($prohibitMultiAirportConnection)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\AirLegModifiers
     */
    public function setPreferNonStop(?bool $preferNonStop = false): self
    {
        // validation for constraint: boolean
        if (!is_null($preferNonStop) && !is_bool($preferNonStop)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($preferNonStop, true), gettype($preferNonStop)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\AirLegModifiers
     */
    public function setOrderBy(?string $orderBy = null): self
    {
        // validation for constraint: string
        if (!is_null($orderBy) && !is_string($orderBy)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderBy, true), gettype($orderBy)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\AirLegModifiers
     */
    public function setMaxJourneyTime(?int $maxJourneyTime = null): self
    {
        // validation for constraint: int
        if (!is_null($maxJourneyTime) && !(is_int($maxJourneyTime) || ctype_digit($maxJourneyTime))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxJourneyTime, true), gettype($maxJourneyTime)), __LINE__);
        }
        // validation for constraint: maxInclusive(99)
        if (!is_null($maxJourneyTime) && $maxJourneyTime > 99) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 99', var_export($maxJourneyTime, true)), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($maxJourneyTime) && $maxJourneyTime < 0) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($maxJourneyTime, true)), __LINE__);
        }
        $this->MaxJourneyTime = $maxJourneyTime;
        
        return $this;
    }
}
