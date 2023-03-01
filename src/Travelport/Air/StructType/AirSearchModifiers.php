<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirSearchModifiers StructType
 * Meta information extracted from the WSDL
 * - documentation: Controls and switches for the Air Search request
 * @subpackage Structs
 */
class AirSearchModifiers extends AbstractStructBase
{
    /**
     * The DisfavoredProviders
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\DisfavoredProviders|null
     */
    public ?\Travelport\Air\StructType\DisfavoredProviders $DisfavoredProviders = null;
    /**
     * The PreferredProviders
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\PreferredProviders|null
     */
    public ?\Travelport\Air\StructType\PreferredProviders $PreferredProviders = null;
    /**
     * The DisfavoredCarriers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\DisfavoredCarriers|null
     */
    public ?\Travelport\Air\StructType\DisfavoredCarriers $DisfavoredCarriers = null;
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
     * The PreferredAlliances
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\PreferredAlliances|null
     */
    public ?\Travelport\Air\StructType\PreferredAlliances $PreferredAlliances = null;
    /**
     * The DisfavoredAlliances
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\DisfavoredAlliances|null
     */
    public ?\Travelport\Air\StructType\DisfavoredAlliances $DisfavoredAlliances = null;
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
     * The ProhibitedBookingCodes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\ProhibitedBookingCodes|null
     */
    public ?\Travelport\Air\StructType\ProhibitedBookingCodes $ProhibitedBookingCodes = null;
    /**
     * The FlightType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: FlightType
     * @var \Travelport\Air\StructType\FlightType|null
     */
    public ?\Travelport\Air\StructType\FlightType $FlightType = null;
    /**
     * The MaxLayoverDuration
     * Meta information extracted from the WSDL
     * - documentation: This is the maximum duration the layover may have for each trip in the request. Supported providers 1P.
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\MaxLayoverDurationType|null
     */
    public ?\Travelport\Air\StructType\MaxLayoverDurationType $MaxLayoverDuration = null;
    /**
     * The NativeSearchModifier
     * Meta information extracted from the WSDL
     * - documentation: Container for Native command modifiers. Providers supported : 1P
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\TypeNativeSearchModifier|null
     */
    public ?\Travelport\Air\StructType\TypeNativeSearchModifier $NativeSearchModifier = null;
    /**
     * The DistanceType
     * Meta information extracted from the WSDL
     * - default: MI
     * - use: optional
     * @var string|null
     */
    public ?string $DistanceType = null;
    /**
     * The IncludeFlightDetails
     * Meta information extracted from the WSDL
     * - default: true
     * - use: optional
     * @var bool|null
     */
    public ?bool $IncludeFlightDetails = null;
    /**
     * The AllowChangeOfAirport
     * Meta information extracted from the WSDL
     * - default: true
     * - use: optional
     * @var bool|null
     */
    public ?bool $AllowChangeOfAirport = null;
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
     * The MaxSolutions
     * Meta information extracted from the WSDL
     * - documentation: The maximum number of solutions to return. Decreasing this number
     * - use: optional
     * @var int|null
     */
    public ?int $MaxSolutions = null;
    /**
     * The MaxConnectionTime
     * Meta information extracted from the WSDL
     * - documentation: The maximum anount of time (in minutes) that a solution can contain for connections between flights.
     * - use: optional
     * @var int|null
     */
    public ?int $MaxConnectionTime = null;
    /**
     * The SearchWeekends
     * Meta information extracted from the WSDL
     * - documentation: A value of true indicates that search should be expanded to include weekend combinations, if applicable.
     * @var bool|null
     */
    public ?bool $SearchWeekends = null;
    /**
     * The IncludeExtraSolutions
     * Meta information extracted from the WSDL
     * - documentation: If true, indicates that search should be made for returning more solutions, if available. For example, for certain providers, premium members may have the facility to get more solutions. This attribute may have to be combined with
     * other applicable modifiers (like SearchWeekends) to return more results.
     * @var bool|null
     */
    public ?bool $IncludeExtraSolutions = null;
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
     * The ExcludeOpenJawAirport
     * Meta information extracted from the WSDL
     * - documentation: This option ensures that travel into/out of each location will be into/out of the same airport of that location. Values are true or false. Default value is 'false'. If value is true then open jaws are exclude. If false the open jaws
     * are included. The supported providers: 1P
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $ExcludeOpenJawAirport = null;
    /**
     * The ExcludeGroundTransportation
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether to allow the user to exclude ground transportation or not. Default value is 'false'. If value is true then ground transportations are excluded. If false then ground transportations are included. The supported
     * providers: 1P
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $ExcludeGroundTransportation = null;
    /**
     * The MaxJourneyTime
     * Meta information extracted from the WSDL
     * - documentation: Maximum Journey Time for all legs (in hours) 0-99. For LFS Supported Providers are 1G,1V,1P. For AirAvail Supported Providers are 1G,1V. | Maximum Journey Time for this leg (in hours) 0-99.
     * - base: xs:nonNegativeInteger
     * - maxInclusive: 99
     * - minInclusive: 0
     * - use: optional
     * @var int|null
     */
    public ?int $MaxJourneyTime = null;
    /**
     * The JetServiceOnly
     * Meta information extracted from the WSDL
     * - documentation: Restricts results to Jet service flights only.
     * - use: optional
     * @var bool|null
     */
    public ?bool $JetServiceOnly = null;
    /**
     * Constructor method for AirSearchModifiers
     * @uses AirSearchModifiers::setDisfavoredProviders()
     * @uses AirSearchModifiers::setPreferredProviders()
     * @uses AirSearchModifiers::setDisfavoredCarriers()
     * @uses AirSearchModifiers::setPermittedCarriers()
     * @uses AirSearchModifiers::setProhibitedCarriers()
     * @uses AirSearchModifiers::setPreferredCarriers()
     * @uses AirSearchModifiers::setPermittedCabins()
     * @uses AirSearchModifiers::setPreferredCabins()
     * @uses AirSearchModifiers::setPreferredAlliances()
     * @uses AirSearchModifiers::setDisfavoredAlliances()
     * @uses AirSearchModifiers::setPermittedBookingCodes()
     * @uses AirSearchModifiers::setPreferredBookingCodes()
     * @uses AirSearchModifiers::setProhibitedBookingCodes()
     * @uses AirSearchModifiers::setFlightType()
     * @uses AirSearchModifiers::setMaxLayoverDuration()
     * @uses AirSearchModifiers::setNativeSearchModifier()
     * @uses AirSearchModifiers::setDistanceType()
     * @uses AirSearchModifiers::setIncludeFlightDetails()
     * @uses AirSearchModifiers::setAllowChangeOfAirport()
     * @uses AirSearchModifiers::setProhibitOvernightLayovers()
     * @uses AirSearchModifiers::setMaxSolutions()
     * @uses AirSearchModifiers::setMaxConnectionTime()
     * @uses AirSearchModifiers::setSearchWeekends()
     * @uses AirSearchModifiers::setIncludeExtraSolutions()
     * @uses AirSearchModifiers::setProhibitMultiAirportConnection()
     * @uses AirSearchModifiers::setPreferNonStop()
     * @uses AirSearchModifiers::setOrderBy()
     * @uses AirSearchModifiers::setExcludeOpenJawAirport()
     * @uses AirSearchModifiers::setExcludeGroundTransportation()
     * @uses AirSearchModifiers::setMaxJourneyTime()
     * @uses AirSearchModifiers::setJetServiceOnly()
     * @param \Travelport\Air\StructType\DisfavoredProviders $disfavoredProviders
     * @param \Travelport\Air\StructType\PreferredProviders $preferredProviders
     * @param \Travelport\Air\StructType\DisfavoredCarriers $disfavoredCarriers
     * @param \Travelport\Air\StructType\PermittedCarriers $permittedCarriers
     * @param \Travelport\Air\StructType\ProhibitedCarriers $prohibitedCarriers
     * @param \Travelport\Air\StructType\PreferredCarriers $preferredCarriers
     * @param \Travelport\Air\StructType\PermittedCabins $permittedCabins
     * @param \Travelport\Air\StructType\PreferredCabins $preferredCabins
     * @param \Travelport\Air\StructType\PreferredAlliances $preferredAlliances
     * @param \Travelport\Air\StructType\DisfavoredAlliances $disfavoredAlliances
     * @param \Travelport\Air\StructType\PermittedBookingCodes $permittedBookingCodes
     * @param \Travelport\Air\StructType\PreferredBookingCodes $preferredBookingCodes
     * @param \Travelport\Air\StructType\ProhibitedBookingCodes $prohibitedBookingCodes
     * @param \Travelport\Air\StructType\FlightType $flightType
     * @param \Travelport\Air\StructType\MaxLayoverDurationType $maxLayoverDuration
     * @param \Travelport\Air\StructType\TypeNativeSearchModifier $nativeSearchModifier
     * @param string $distanceType
     * @param bool $includeFlightDetails
     * @param bool $allowChangeOfAirport
     * @param bool $prohibitOvernightLayovers
     * @param int $maxSolutions
     * @param int $maxConnectionTime
     * @param bool $searchWeekends
     * @param bool $includeExtraSolutions
     * @param bool $prohibitMultiAirportConnection
     * @param bool $preferNonStop
     * @param string $orderBy
     * @param bool $excludeOpenJawAirport
     * @param bool $excludeGroundTransportation
     * @param int $maxJourneyTime
     * @param bool $jetServiceOnly
     */
    public function __construct(?\Travelport\Air\StructType\DisfavoredProviders $disfavoredProviders = null, ?\Travelport\Air\StructType\PreferredProviders $preferredProviders = null, ?\Travelport\Air\StructType\DisfavoredCarriers $disfavoredCarriers = null, ?\Travelport\Air\StructType\PermittedCarriers $permittedCarriers = null, ?\Travelport\Air\StructType\ProhibitedCarriers $prohibitedCarriers = null, ?\Travelport\Air\StructType\PreferredCarriers $preferredCarriers = null, ?\Travelport\Air\StructType\PermittedCabins $permittedCabins = null, ?\Travelport\Air\StructType\PreferredCabins $preferredCabins = null, ?\Travelport\Air\StructType\PreferredAlliances $preferredAlliances = null, ?\Travelport\Air\StructType\DisfavoredAlliances $disfavoredAlliances = null, ?\Travelport\Air\StructType\PermittedBookingCodes $permittedBookingCodes = null, ?\Travelport\Air\StructType\PreferredBookingCodes $preferredBookingCodes = null, ?\Travelport\Air\StructType\ProhibitedBookingCodes $prohibitedBookingCodes = null, ?\Travelport\Air\StructType\FlightType $flightType = null, ?\Travelport\Air\StructType\MaxLayoverDurationType $maxLayoverDuration = null, ?\Travelport\Air\StructType\TypeNativeSearchModifier $nativeSearchModifier = null, ?string $distanceType = null, ?bool $includeFlightDetails = true, ?bool $allowChangeOfAirport = true, ?bool $prohibitOvernightLayovers = false, ?int $maxSolutions = null, ?int $maxConnectionTime = null, ?bool $searchWeekends = null, ?bool $includeExtraSolutions = null, ?bool $prohibitMultiAirportConnection = null, ?bool $preferNonStop = false, ?string $orderBy = null, ?bool $excludeOpenJawAirport = false, ?bool $excludeGroundTransportation = false, ?int $maxJourneyTime = null, ?bool $jetServiceOnly = null)
    {
        $this
            ->setDisfavoredProviders($disfavoredProviders)
            ->setPreferredProviders($preferredProviders)
            ->setDisfavoredCarriers($disfavoredCarriers)
            ->setPermittedCarriers($permittedCarriers)
            ->setProhibitedCarriers($prohibitedCarriers)
            ->setPreferredCarriers($preferredCarriers)
            ->setPermittedCabins($permittedCabins)
            ->setPreferredCabins($preferredCabins)
            ->setPreferredAlliances($preferredAlliances)
            ->setDisfavoredAlliances($disfavoredAlliances)
            ->setPermittedBookingCodes($permittedBookingCodes)
            ->setPreferredBookingCodes($preferredBookingCodes)
            ->setProhibitedBookingCodes($prohibitedBookingCodes)
            ->setFlightType($flightType)
            ->setMaxLayoverDuration($maxLayoverDuration)
            ->setNativeSearchModifier($nativeSearchModifier)
            ->setDistanceType($distanceType)
            ->setIncludeFlightDetails($includeFlightDetails)
            ->setAllowChangeOfAirport($allowChangeOfAirport)
            ->setProhibitOvernightLayovers($prohibitOvernightLayovers)
            ->setMaxSolutions($maxSolutions)
            ->setMaxConnectionTime($maxConnectionTime)
            ->setSearchWeekends($searchWeekends)
            ->setIncludeExtraSolutions($includeExtraSolutions)
            ->setProhibitMultiAirportConnection($prohibitMultiAirportConnection)
            ->setPreferNonStop($preferNonStop)
            ->setOrderBy($orderBy)
            ->setExcludeOpenJawAirport($excludeOpenJawAirport)
            ->setExcludeGroundTransportation($excludeGroundTransportation)
            ->setMaxJourneyTime($maxJourneyTime)
            ->setJetServiceOnly($jetServiceOnly);
    }
    /**
     * Get DisfavoredProviders value
     * @return \Travelport\Air\StructType\DisfavoredProviders|null
     */
    public function getDisfavoredProviders(): ?\Travelport\Air\StructType\DisfavoredProviders
    {
        return $this->DisfavoredProviders;
    }
    /**
     * Set DisfavoredProviders value
     * @param \Travelport\Air\StructType\DisfavoredProviders $disfavoredProviders
     * @return \Travelport\Air\StructType\AirSearchModifiers
     */
    public function setDisfavoredProviders(?\Travelport\Air\StructType\DisfavoredProviders $disfavoredProviders = null): self
    {
        $this->DisfavoredProviders = $disfavoredProviders;
        
        return $this;
    }
    /**
     * Get PreferredProviders value
     * @return \Travelport\Air\StructType\PreferredProviders|null
     */
    public function getPreferredProviders(): ?\Travelport\Air\StructType\PreferredProviders
    {
        return $this->PreferredProviders;
    }
    /**
     * Set PreferredProviders value
     * @param \Travelport\Air\StructType\PreferredProviders $preferredProviders
     * @return \Travelport\Air\StructType\AirSearchModifiers
     */
    public function setPreferredProviders(?\Travelport\Air\StructType\PreferredProviders $preferredProviders = null): self
    {
        $this->PreferredProviders = $preferredProviders;
        
        return $this;
    }
    /**
     * Get DisfavoredCarriers value
     * @return \Travelport\Air\StructType\DisfavoredCarriers|null
     */
    public function getDisfavoredCarriers(): ?\Travelport\Air\StructType\DisfavoredCarriers
    {
        return $this->DisfavoredCarriers;
    }
    /**
     * Set DisfavoredCarriers value
     * @param \Travelport\Air\StructType\DisfavoredCarriers $disfavoredCarriers
     * @return \Travelport\Air\StructType\AirSearchModifiers
     */
    public function setDisfavoredCarriers(?\Travelport\Air\StructType\DisfavoredCarriers $disfavoredCarriers = null): self
    {
        $this->DisfavoredCarriers = $disfavoredCarriers;
        
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
     * @return \Travelport\Air\StructType\AirSearchModifiers
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
     * @return \Travelport\Air\StructType\AirSearchModifiers
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
     * @return \Travelport\Air\StructType\AirSearchModifiers
     */
    public function setPreferredCarriers(?\Travelport\Air\StructType\PreferredCarriers $preferredCarriers = null): self
    {
        $this->PreferredCarriers = $preferredCarriers;
        
        return $this;
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
     * @return \Travelport\Air\StructType\AirSearchModifiers
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
     * @return \Travelport\Air\StructType\AirSearchModifiers
     */
    public function setPreferredCabins(?\Travelport\Air\StructType\PreferredCabins $preferredCabins = null): self
    {
        $this->PreferredCabins = $preferredCabins;
        
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
     * @return \Travelport\Air\StructType\AirSearchModifiers
     */
    public function setPreferredAlliances(?\Travelport\Air\StructType\PreferredAlliances $preferredAlliances = null): self
    {
        $this->PreferredAlliances = $preferredAlliances;
        
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
     * @return \Travelport\Air\StructType\AirSearchModifiers
     */
    public function setDisfavoredAlliances(?\Travelport\Air\StructType\DisfavoredAlliances $disfavoredAlliances = null): self
    {
        $this->DisfavoredAlliances = $disfavoredAlliances;
        
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
     * @return \Travelport\Air\StructType\AirSearchModifiers
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
     * @return \Travelport\Air\StructType\AirSearchModifiers
     */
    public function setPreferredBookingCodes(?\Travelport\Air\StructType\PreferredBookingCodes $preferredBookingCodes = null): self
    {
        $this->PreferredBookingCodes = $preferredBookingCodes;
        
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
     * @return \Travelport\Air\StructType\AirSearchModifiers
     */
    public function setProhibitedBookingCodes(?\Travelport\Air\StructType\ProhibitedBookingCodes $prohibitedBookingCodes = null): self
    {
        $this->ProhibitedBookingCodes = $prohibitedBookingCodes;
        
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
     * @return \Travelport\Air\StructType\AirSearchModifiers
     */
    public function setFlightType(?\Travelport\Air\StructType\FlightType $flightType = null): self
    {
        $this->FlightType = $flightType;
        
        return $this;
    }
    /**
     * Get MaxLayoverDuration value
     * @return \Travelport\Air\StructType\MaxLayoverDurationType|null
     */
    public function getMaxLayoverDuration(): ?\Travelport\Air\StructType\MaxLayoverDurationType
    {
        return $this->MaxLayoverDuration;
    }
    /**
     * Set MaxLayoverDuration value
     * @param \Travelport\Air\StructType\MaxLayoverDurationType $maxLayoverDuration
     * @return \Travelport\Air\StructType\AirSearchModifiers
     */
    public function setMaxLayoverDuration(?\Travelport\Air\StructType\MaxLayoverDurationType $maxLayoverDuration = null): self
    {
        $this->MaxLayoverDuration = $maxLayoverDuration;
        
        return $this;
    }
    /**
     * Get NativeSearchModifier value
     * @return \Travelport\Air\StructType\TypeNativeSearchModifier|null
     */
    public function getNativeSearchModifier(): ?\Travelport\Air\StructType\TypeNativeSearchModifier
    {
        return $this->NativeSearchModifier;
    }
    /**
     * Set NativeSearchModifier value
     * @param \Travelport\Air\StructType\TypeNativeSearchModifier $nativeSearchModifier
     * @return \Travelport\Air\StructType\AirSearchModifiers
     */
    public function setNativeSearchModifier(?\Travelport\Air\StructType\TypeNativeSearchModifier $nativeSearchModifier = null): self
    {
        $this->NativeSearchModifier = $nativeSearchModifier;
        
        return $this;
    }
    /**
     * Get DistanceType value
     * @return string|null
     */
    public function getDistanceType(): ?string
    {
        return $this->DistanceType;
    }
    /**
     * Set DistanceType value
     * @param string $distanceType
     * @return \Travelport\Air\StructType\AirSearchModifiers
     */
    public function setDistanceType(?string $distanceType = null): self
    {
        $this->DistanceType = $distanceType;
        
        return $this;
    }
    /**
     * Get IncludeFlightDetails value
     * @return bool|null
     */
    public function getIncludeFlightDetails(): ?bool
    {
        return $this->IncludeFlightDetails;
    }
    /**
     * Set IncludeFlightDetails value
     * @param bool $includeFlightDetails
     * @return \Travelport\Air\StructType\AirSearchModifiers
     */
    public function setIncludeFlightDetails(?bool $includeFlightDetails = true): self
    {
        $this->IncludeFlightDetails = $includeFlightDetails;
        
        return $this;
    }
    /**
     * Get AllowChangeOfAirport value
     * @return bool|null
     */
    public function getAllowChangeOfAirport(): ?bool
    {
        return $this->AllowChangeOfAirport;
    }
    /**
     * Set AllowChangeOfAirport value
     * @param bool $allowChangeOfAirport
     * @return \Travelport\Air\StructType\AirSearchModifiers
     */
    public function setAllowChangeOfAirport(?bool $allowChangeOfAirport = true): self
    {
        $this->AllowChangeOfAirport = $allowChangeOfAirport;
        
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
     * @return \Travelport\Air\StructType\AirSearchModifiers
     */
    public function setProhibitOvernightLayovers(?bool $prohibitOvernightLayovers = false): self
    {
        $this->ProhibitOvernightLayovers = $prohibitOvernightLayovers;
        
        return $this;
    }
    /**
     * Get MaxSolutions value
     * @return int|null
     */
    public function getMaxSolutions(): ?int
    {
        return $this->MaxSolutions;
    }
    /**
     * Set MaxSolutions value
     * @param int $maxSolutions
     * @return \Travelport\Air\StructType\AirSearchModifiers
     */
    public function setMaxSolutions(?int $maxSolutions = null): self
    {
        $this->MaxSolutions = $maxSolutions;
        
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
     * @return \Travelport\Air\StructType\AirSearchModifiers
     */
    public function setMaxConnectionTime(?int $maxConnectionTime = null): self
    {
        $this->MaxConnectionTime = $maxConnectionTime;
        
        return $this;
    }
    /**
     * Get SearchWeekends value
     * @return bool|null
     */
    public function getSearchWeekends(): ?bool
    {
        return $this->SearchWeekends;
    }
    /**
     * Set SearchWeekends value
     * @param bool $searchWeekends
     * @return \Travelport\Air\StructType\AirSearchModifiers
     */
    public function setSearchWeekends(?bool $searchWeekends = null): self
    {
        $this->SearchWeekends = $searchWeekends;
        
        return $this;
    }
    /**
     * Get IncludeExtraSolutions value
     * @return bool|null
     */
    public function getIncludeExtraSolutions(): ?bool
    {
        return $this->IncludeExtraSolutions;
    }
    /**
     * Set IncludeExtraSolutions value
     * @param bool $includeExtraSolutions
     * @return \Travelport\Air\StructType\AirSearchModifiers
     */
    public function setIncludeExtraSolutions(?bool $includeExtraSolutions = null): self
    {
        $this->IncludeExtraSolutions = $includeExtraSolutions;
        
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
     * @return \Travelport\Air\StructType\AirSearchModifiers
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
     * @return \Travelport\Air\StructType\AirSearchModifiers
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
     * @return \Travelport\Air\StructType\AirSearchModifiers
     */
    public function setOrderBy(?string $orderBy = null): self
    {
        $this->OrderBy = $orderBy;
        
        return $this;
    }
    /**
     * Get ExcludeOpenJawAirport value
     * @return bool|null
     */
    public function getExcludeOpenJawAirport(): ?bool
    {
        return $this->ExcludeOpenJawAirport;
    }
    /**
     * Set ExcludeOpenJawAirport value
     * @param bool $excludeOpenJawAirport
     * @return \Travelport\Air\StructType\AirSearchModifiers
     */
    public function setExcludeOpenJawAirport(?bool $excludeOpenJawAirport = false): self
    {
        $this->ExcludeOpenJawAirport = $excludeOpenJawAirport;
        
        return $this;
    }
    /**
     * Get ExcludeGroundTransportation value
     * @return bool|null
     */
    public function getExcludeGroundTransportation(): ?bool
    {
        return $this->ExcludeGroundTransportation;
    }
    /**
     * Set ExcludeGroundTransportation value
     * @param bool $excludeGroundTransportation
     * @return \Travelport\Air\StructType\AirSearchModifiers
     */
    public function setExcludeGroundTransportation(?bool $excludeGroundTransportation = false): self
    {
        $this->ExcludeGroundTransportation = $excludeGroundTransportation;
        
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
     * @return \Travelport\Air\StructType\AirSearchModifiers
     */
    public function setMaxJourneyTime(?int $maxJourneyTime = null): self
    {
        $this->MaxJourneyTime = $maxJourneyTime;
        
        return $this;
    }
    /**
     * Get JetServiceOnly value
     * @return bool|null
     */
    public function getJetServiceOnly(): ?bool
    {
        return $this->JetServiceOnly;
    }
    /**
     * Set JetServiceOnly value
     * @param bool $jetServiceOnly
     * @return \Travelport\Air\StructType\AirSearchModifiers
     */
    public function setJetServiceOnly(?bool $jetServiceOnly = null): self
    {
        $this->JetServiceOnly = $jetServiceOnly;
        
        return $this;
    }
}
