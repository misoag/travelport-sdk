<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
     * @var \Travelport\Util\StructType\DisfavoredProviders|null
     */
    protected ?\Travelport\Util\StructType\DisfavoredProviders $DisfavoredProviders = null;
    /**
     * The PreferredProviders
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\PreferredProviders|null
     */
    protected ?\Travelport\Util\StructType\PreferredProviders $PreferredProviders = null;
    /**
     * The DisfavoredCarriers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\DisfavoredCarriers|null
     */
    protected ?\Travelport\Util\StructType\DisfavoredCarriers $DisfavoredCarriers = null;
    /**
     * The PermittedCarriers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: PermittedCarriers
     * @var \Travelport\Util\StructType\PermittedCarriers|null
     */
    protected ?\Travelport\Util\StructType\PermittedCarriers $PermittedCarriers = null;
    /**
     * The ProhibitedCarriers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: ProhibitedCarriers
     * @var \Travelport\Util\StructType\ProhibitedCarriers|null
     */
    protected ?\Travelport\Util\StructType\ProhibitedCarriers $ProhibitedCarriers = null;
    /**
     * The PreferredCarriers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: PreferredCarriers
     * @var \Travelport\Util\StructType\PreferredCarriers|null
     */
    protected ?\Travelport\Util\StructType\PreferredCarriers $PreferredCarriers = null;
    /**
     * The PermittedCabins
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: PermittedCabins
     * @var \Travelport\Util\StructType\PermittedCabins|null
     */
    protected ?\Travelport\Util\StructType\PermittedCabins $PermittedCabins = null;
    /**
     * The PreferredCabins
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: PreferredCabins
     * @var \Travelport\Util\StructType\PreferredCabins|null
     */
    protected ?\Travelport\Util\StructType\PreferredCabins $PreferredCabins = null;
    /**
     * The PreferredAlliances
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\PreferredAlliances|null
     */
    protected ?\Travelport\Util\StructType\PreferredAlliances $PreferredAlliances = null;
    /**
     * The DisfavoredAlliances
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\DisfavoredAlliances|null
     */
    protected ?\Travelport\Util\StructType\DisfavoredAlliances $DisfavoredAlliances = null;
    /**
     * The PermittedBookingCodes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\PermittedBookingCodes|null
     */
    protected ?\Travelport\Util\StructType\PermittedBookingCodes $PermittedBookingCodes = null;
    /**
     * The PreferredBookingCodes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: PreferredBookingCodes
     * @var \Travelport\Util\StructType\PreferredBookingCodes|null
     */
    protected ?\Travelport\Util\StructType\PreferredBookingCodes $PreferredBookingCodes = null;
    /**
     * The ProhibitedBookingCodes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\ProhibitedBookingCodes|null
     */
    protected ?\Travelport\Util\StructType\ProhibitedBookingCodes $ProhibitedBookingCodes = null;
    /**
     * The FlightType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: FlightType
     * @var \Travelport\Util\StructType\FlightType|null
     */
    protected ?\Travelport\Util\StructType\FlightType $FlightType = null;
    /**
     * The MaxLayoverDuration
     * Meta information extracted from the WSDL
     * - documentation: This is the maximum duration the layover may have for each trip in the request. Supported providers 1P.
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\MaxLayoverDurationType|null
     */
    protected ?\Travelport\Util\StructType\MaxLayoverDurationType $MaxLayoverDuration = null;
    /**
     * The NativeSearchModifier
     * Meta information extracted from the WSDL
     * - documentation: Container for Native command modifiers. Providers supported : 1P
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\TypeNativeSearchModifier|null
     */
    protected ?\Travelport\Util\StructType\TypeNativeSearchModifier $NativeSearchModifier = null;
    /**
     * The DistanceType
     * Meta information extracted from the WSDL
     * - default: MI
     * - use: optional
     * @var string|null
     */
    protected ?string $DistanceType = null;
    /**
     * The IncludeFlightDetails
     * Meta information extracted from the WSDL
     * - default: true
     * - use: optional
     * @var bool|null
     */
    protected ?bool $IncludeFlightDetails = null;
    /**
     * The AllowChangeOfAirport
     * Meta information extracted from the WSDL
     * - default: true
     * - use: optional
     * @var bool|null
     */
    protected ?bool $AllowChangeOfAirport = null;
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
     * The MaxSolutions
     * Meta information extracted from the WSDL
     * - documentation: The maximum number of solutions to return. Decreasing this number
     * - use: optional
     * @var int|null
     */
    protected ?int $MaxSolutions = null;
    /**
     * The MaxConnectionTime
     * Meta information extracted from the WSDL
     * - documentation: The maximum anount of time (in minutes) that a solution can contain for connections between flights.
     * - use: optional
     * @var int|null
     */
    protected ?int $MaxConnectionTime = null;
    /**
     * The SearchWeekends
     * Meta information extracted from the WSDL
     * - documentation: A value of true indicates that search should be expanded to include weekend combinations, if applicable.
     * @var bool|null
     */
    protected ?bool $SearchWeekends = null;
    /**
     * The IncludeExtraSolutions
     * Meta information extracted from the WSDL
     * - documentation: If true, indicates that search should be made for returning more solutions, if available. For example, for certain providers, premium members may have the facility to get more solutions. This attribute may have to be combined with
     * other applicable modifiers (like SearchWeekends) to return more results.
     * @var bool|null
     */
    protected ?bool $IncludeExtraSolutions = null;
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
     * The ExcludeOpenJawAirport
     * Meta information extracted from the WSDL
     * - documentation: This option ensures that travel into/out of each location will be into/out of the same airport of that location. Values are true or false. Default value is 'false'. If value is true then open jaws are exclude. If false the open jaws
     * are included. The supported providers: 1P
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $ExcludeOpenJawAirport = null;
    /**
     * The ExcludeGroundTransportation
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether to allow the user to exclude ground transportation or not. Default value is 'false'. If value is true then ground transportations are excluded. If false then ground transportations are included. The supported
     * providers: 1P
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $ExcludeGroundTransportation = null;
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
    protected ?int $MaxJourneyTime = null;
    /**
     * The JetServiceOnly
     * Meta information extracted from the WSDL
     * - documentation: Restricts results to Jet service flights only.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $JetServiceOnly = null;
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
     * @param \Travelport\Util\StructType\DisfavoredProviders $disfavoredProviders
     * @param \Travelport\Util\StructType\PreferredProviders $preferredProviders
     * @param \Travelport\Util\StructType\DisfavoredCarriers $disfavoredCarriers
     * @param \Travelport\Util\StructType\PermittedCarriers $permittedCarriers
     * @param \Travelport\Util\StructType\ProhibitedCarriers $prohibitedCarriers
     * @param \Travelport\Util\StructType\PreferredCarriers $preferredCarriers
     * @param \Travelport\Util\StructType\PermittedCabins $permittedCabins
     * @param \Travelport\Util\StructType\PreferredCabins $preferredCabins
     * @param \Travelport\Util\StructType\PreferredAlliances $preferredAlliances
     * @param \Travelport\Util\StructType\DisfavoredAlliances $disfavoredAlliances
     * @param \Travelport\Util\StructType\PermittedBookingCodes $permittedBookingCodes
     * @param \Travelport\Util\StructType\PreferredBookingCodes $preferredBookingCodes
     * @param \Travelport\Util\StructType\ProhibitedBookingCodes $prohibitedBookingCodes
     * @param \Travelport\Util\StructType\FlightType $flightType
     * @param \Travelport\Util\StructType\MaxLayoverDurationType $maxLayoverDuration
     * @param \Travelport\Util\StructType\TypeNativeSearchModifier $nativeSearchModifier
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
    public function __construct(?\Travelport\Util\StructType\DisfavoredProviders $disfavoredProviders = null, ?\Travelport\Util\StructType\PreferredProviders $preferredProviders = null, ?\Travelport\Util\StructType\DisfavoredCarriers $disfavoredCarriers = null, ?\Travelport\Util\StructType\PermittedCarriers $permittedCarriers = null, ?\Travelport\Util\StructType\ProhibitedCarriers $prohibitedCarriers = null, ?\Travelport\Util\StructType\PreferredCarriers $preferredCarriers = null, ?\Travelport\Util\StructType\PermittedCabins $permittedCabins = null, ?\Travelport\Util\StructType\PreferredCabins $preferredCabins = null, ?\Travelport\Util\StructType\PreferredAlliances $preferredAlliances = null, ?\Travelport\Util\StructType\DisfavoredAlliances $disfavoredAlliances = null, ?\Travelport\Util\StructType\PermittedBookingCodes $permittedBookingCodes = null, ?\Travelport\Util\StructType\PreferredBookingCodes $preferredBookingCodes = null, ?\Travelport\Util\StructType\ProhibitedBookingCodes $prohibitedBookingCodes = null, ?\Travelport\Util\StructType\FlightType $flightType = null, ?\Travelport\Util\StructType\MaxLayoverDurationType $maxLayoverDuration = null, ?\Travelport\Util\StructType\TypeNativeSearchModifier $nativeSearchModifier = null, ?string $distanceType = null, ?bool $includeFlightDetails = true, ?bool $allowChangeOfAirport = true, ?bool $prohibitOvernightLayovers = false, ?int $maxSolutions = null, ?int $maxConnectionTime = null, ?bool $searchWeekends = null, ?bool $includeExtraSolutions = null, ?bool $prohibitMultiAirportConnection = null, ?bool $preferNonStop = false, ?string $orderBy = null, ?bool $excludeOpenJawAirport = false, ?bool $excludeGroundTransportation = false, ?int $maxJourneyTime = null, ?bool $jetServiceOnly = null)
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
     * @return \Travelport\Util\StructType\DisfavoredProviders|null
     */
    public function getDisfavoredProviders(): ?\Travelport\Util\StructType\DisfavoredProviders
    {
        return $this->DisfavoredProviders;
    }
    /**
     * Set DisfavoredProviders value
     * @param \Travelport\Util\StructType\DisfavoredProviders $disfavoredProviders
     * @return \Travelport\Util\StructType\AirSearchModifiers
     */
    public function setDisfavoredProviders(?\Travelport\Util\StructType\DisfavoredProviders $disfavoredProviders = null): self
    {
        $this->DisfavoredProviders = $disfavoredProviders;
        
        return $this;
    }
    /**
     * Get PreferredProviders value
     * @return \Travelport\Util\StructType\PreferredProviders|null
     */
    public function getPreferredProviders(): ?\Travelport\Util\StructType\PreferredProviders
    {
        return $this->PreferredProviders;
    }
    /**
     * Set PreferredProviders value
     * @param \Travelport\Util\StructType\PreferredProviders $preferredProviders
     * @return \Travelport\Util\StructType\AirSearchModifiers
     */
    public function setPreferredProviders(?\Travelport\Util\StructType\PreferredProviders $preferredProviders = null): self
    {
        $this->PreferredProviders = $preferredProviders;
        
        return $this;
    }
    /**
     * Get DisfavoredCarriers value
     * @return \Travelport\Util\StructType\DisfavoredCarriers|null
     */
    public function getDisfavoredCarriers(): ?\Travelport\Util\StructType\DisfavoredCarriers
    {
        return $this->DisfavoredCarriers;
    }
    /**
     * Set DisfavoredCarriers value
     * @param \Travelport\Util\StructType\DisfavoredCarriers $disfavoredCarriers
     * @return \Travelport\Util\StructType\AirSearchModifiers
     */
    public function setDisfavoredCarriers(?\Travelport\Util\StructType\DisfavoredCarriers $disfavoredCarriers = null): self
    {
        $this->DisfavoredCarriers = $disfavoredCarriers;
        
        return $this;
    }
    /**
     * Get PermittedCarriers value
     * @return \Travelport\Util\StructType\PermittedCarriers|null
     */
    public function getPermittedCarriers(): ?\Travelport\Util\StructType\PermittedCarriers
    {
        return $this->PermittedCarriers;
    }
    /**
     * Set PermittedCarriers value
     * @param \Travelport\Util\StructType\PermittedCarriers $permittedCarriers
     * @return \Travelport\Util\StructType\AirSearchModifiers
     */
    public function setPermittedCarriers(?\Travelport\Util\StructType\PermittedCarriers $permittedCarriers = null): self
    {
        $this->PermittedCarriers = $permittedCarriers;
        
        return $this;
    }
    /**
     * Get ProhibitedCarriers value
     * @return \Travelport\Util\StructType\ProhibitedCarriers|null
     */
    public function getProhibitedCarriers(): ?\Travelport\Util\StructType\ProhibitedCarriers
    {
        return $this->ProhibitedCarriers;
    }
    /**
     * Set ProhibitedCarriers value
     * @param \Travelport\Util\StructType\ProhibitedCarriers $prohibitedCarriers
     * @return \Travelport\Util\StructType\AirSearchModifiers
     */
    public function setProhibitedCarriers(?\Travelport\Util\StructType\ProhibitedCarriers $prohibitedCarriers = null): self
    {
        $this->ProhibitedCarriers = $prohibitedCarriers;
        
        return $this;
    }
    /**
     * Get PreferredCarriers value
     * @return \Travelport\Util\StructType\PreferredCarriers|null
     */
    public function getPreferredCarriers(): ?\Travelport\Util\StructType\PreferredCarriers
    {
        return $this->PreferredCarriers;
    }
    /**
     * Set PreferredCarriers value
     * @param \Travelport\Util\StructType\PreferredCarriers $preferredCarriers
     * @return \Travelport\Util\StructType\AirSearchModifiers
     */
    public function setPreferredCarriers(?\Travelport\Util\StructType\PreferredCarriers $preferredCarriers = null): self
    {
        $this->PreferredCarriers = $preferredCarriers;
        
        return $this;
    }
    /**
     * Get PermittedCabins value
     * @return \Travelport\Util\StructType\PermittedCabins|null
     */
    public function getPermittedCabins(): ?\Travelport\Util\StructType\PermittedCabins
    {
        return $this->PermittedCabins;
    }
    /**
     * Set PermittedCabins value
     * @param \Travelport\Util\StructType\PermittedCabins $permittedCabins
     * @return \Travelport\Util\StructType\AirSearchModifiers
     */
    public function setPermittedCabins(?\Travelport\Util\StructType\PermittedCabins $permittedCabins = null): self
    {
        $this->PermittedCabins = $permittedCabins;
        
        return $this;
    }
    /**
     * Get PreferredCabins value
     * @return \Travelport\Util\StructType\PreferredCabins|null
     */
    public function getPreferredCabins(): ?\Travelport\Util\StructType\PreferredCabins
    {
        return $this->PreferredCabins;
    }
    /**
     * Set PreferredCabins value
     * @param \Travelport\Util\StructType\PreferredCabins $preferredCabins
     * @return \Travelport\Util\StructType\AirSearchModifiers
     */
    public function setPreferredCabins(?\Travelport\Util\StructType\PreferredCabins $preferredCabins = null): self
    {
        $this->PreferredCabins = $preferredCabins;
        
        return $this;
    }
    /**
     * Get PreferredAlliances value
     * @return \Travelport\Util\StructType\PreferredAlliances|null
     */
    public function getPreferredAlliances(): ?\Travelport\Util\StructType\PreferredAlliances
    {
        return $this->PreferredAlliances;
    }
    /**
     * Set PreferredAlliances value
     * @param \Travelport\Util\StructType\PreferredAlliances $preferredAlliances
     * @return \Travelport\Util\StructType\AirSearchModifiers
     */
    public function setPreferredAlliances(?\Travelport\Util\StructType\PreferredAlliances $preferredAlliances = null): self
    {
        $this->PreferredAlliances = $preferredAlliances;
        
        return $this;
    }
    /**
     * Get DisfavoredAlliances value
     * @return \Travelport\Util\StructType\DisfavoredAlliances|null
     */
    public function getDisfavoredAlliances(): ?\Travelport\Util\StructType\DisfavoredAlliances
    {
        return $this->DisfavoredAlliances;
    }
    /**
     * Set DisfavoredAlliances value
     * @param \Travelport\Util\StructType\DisfavoredAlliances $disfavoredAlliances
     * @return \Travelport\Util\StructType\AirSearchModifiers
     */
    public function setDisfavoredAlliances(?\Travelport\Util\StructType\DisfavoredAlliances $disfavoredAlliances = null): self
    {
        $this->DisfavoredAlliances = $disfavoredAlliances;
        
        return $this;
    }
    /**
     * Get PermittedBookingCodes value
     * @return \Travelport\Util\StructType\PermittedBookingCodes|null
     */
    public function getPermittedBookingCodes(): ?\Travelport\Util\StructType\PermittedBookingCodes
    {
        return $this->PermittedBookingCodes;
    }
    /**
     * Set PermittedBookingCodes value
     * @param \Travelport\Util\StructType\PermittedBookingCodes $permittedBookingCodes
     * @return \Travelport\Util\StructType\AirSearchModifiers
     */
    public function setPermittedBookingCodes(?\Travelport\Util\StructType\PermittedBookingCodes $permittedBookingCodes = null): self
    {
        $this->PermittedBookingCodes = $permittedBookingCodes;
        
        return $this;
    }
    /**
     * Get PreferredBookingCodes value
     * @return \Travelport\Util\StructType\PreferredBookingCodes|null
     */
    public function getPreferredBookingCodes(): ?\Travelport\Util\StructType\PreferredBookingCodes
    {
        return $this->PreferredBookingCodes;
    }
    /**
     * Set PreferredBookingCodes value
     * @param \Travelport\Util\StructType\PreferredBookingCodes $preferredBookingCodes
     * @return \Travelport\Util\StructType\AirSearchModifiers
     */
    public function setPreferredBookingCodes(?\Travelport\Util\StructType\PreferredBookingCodes $preferredBookingCodes = null): self
    {
        $this->PreferredBookingCodes = $preferredBookingCodes;
        
        return $this;
    }
    /**
     * Get ProhibitedBookingCodes value
     * @return \Travelport\Util\StructType\ProhibitedBookingCodes|null
     */
    public function getProhibitedBookingCodes(): ?\Travelport\Util\StructType\ProhibitedBookingCodes
    {
        return $this->ProhibitedBookingCodes;
    }
    /**
     * Set ProhibitedBookingCodes value
     * @param \Travelport\Util\StructType\ProhibitedBookingCodes $prohibitedBookingCodes
     * @return \Travelport\Util\StructType\AirSearchModifiers
     */
    public function setProhibitedBookingCodes(?\Travelport\Util\StructType\ProhibitedBookingCodes $prohibitedBookingCodes = null): self
    {
        $this->ProhibitedBookingCodes = $prohibitedBookingCodes;
        
        return $this;
    }
    /**
     * Get FlightType value
     * @return \Travelport\Util\StructType\FlightType|null
     */
    public function getFlightType(): ?\Travelport\Util\StructType\FlightType
    {
        return $this->FlightType;
    }
    /**
     * Set FlightType value
     * @param \Travelport\Util\StructType\FlightType $flightType
     * @return \Travelport\Util\StructType\AirSearchModifiers
     */
    public function setFlightType(?\Travelport\Util\StructType\FlightType $flightType = null): self
    {
        $this->FlightType = $flightType;
        
        return $this;
    }
    /**
     * Get MaxLayoverDuration value
     * @return \Travelport\Util\StructType\MaxLayoverDurationType|null
     */
    public function getMaxLayoverDuration(): ?\Travelport\Util\StructType\MaxLayoverDurationType
    {
        return $this->MaxLayoverDuration;
    }
    /**
     * Set MaxLayoverDuration value
     * @param \Travelport\Util\StructType\MaxLayoverDurationType $maxLayoverDuration
     * @return \Travelport\Util\StructType\AirSearchModifiers
     */
    public function setMaxLayoverDuration(?\Travelport\Util\StructType\MaxLayoverDurationType $maxLayoverDuration = null): self
    {
        $this->MaxLayoverDuration = $maxLayoverDuration;
        
        return $this;
    }
    /**
     * Get NativeSearchModifier value
     * @return \Travelport\Util\StructType\TypeNativeSearchModifier|null
     */
    public function getNativeSearchModifier(): ?\Travelport\Util\StructType\TypeNativeSearchModifier
    {
        return $this->NativeSearchModifier;
    }
    /**
     * Set NativeSearchModifier value
     * @param \Travelport\Util\StructType\TypeNativeSearchModifier $nativeSearchModifier
     * @return \Travelport\Util\StructType\AirSearchModifiers
     */
    public function setNativeSearchModifier(?\Travelport\Util\StructType\TypeNativeSearchModifier $nativeSearchModifier = null): self
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
     * @uses \Travelport\Util\EnumType\TypeDistance::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeDistance::getValidValues()
     * @throws InvalidArgumentException
     * @param string $distanceType
     * @return \Travelport\Util\StructType\AirSearchModifiers
     */
    public function setDistanceType(?string $distanceType = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeDistance::valueIsValid($distanceType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeDistance', is_array($distanceType) ? implode(', ', $distanceType) : var_export($distanceType, true), implode(', ', \Travelport\Util\EnumType\TypeDistance::getValidValues())), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirSearchModifiers
     */
    public function setIncludeFlightDetails(?bool $includeFlightDetails = true): self
    {
        // validation for constraint: boolean
        if (!is_null($includeFlightDetails) && !is_bool($includeFlightDetails)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeFlightDetails, true), gettype($includeFlightDetails)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirSearchModifiers
     */
    public function setAllowChangeOfAirport(?bool $allowChangeOfAirport = true): self
    {
        // validation for constraint: boolean
        if (!is_null($allowChangeOfAirport) && !is_bool($allowChangeOfAirport)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($allowChangeOfAirport, true), gettype($allowChangeOfAirport)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirSearchModifiers
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
     * @return \Travelport\Util\StructType\AirSearchModifiers
     */
    public function setMaxSolutions(?int $maxSolutions = null): self
    {
        // validation for constraint: int
        if (!is_null($maxSolutions) && !(is_int($maxSolutions) || ctype_digit($maxSolutions))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxSolutions, true), gettype($maxSolutions)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirSearchModifiers
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
     * @return \Travelport\Util\StructType\AirSearchModifiers
     */
    public function setSearchWeekends(?bool $searchWeekends = null): self
    {
        // validation for constraint: boolean
        if (!is_null($searchWeekends) && !is_bool($searchWeekends)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($searchWeekends, true), gettype($searchWeekends)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirSearchModifiers
     */
    public function setIncludeExtraSolutions(?bool $includeExtraSolutions = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includeExtraSolutions) && !is_bool($includeExtraSolutions)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeExtraSolutions, true), gettype($includeExtraSolutions)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirSearchModifiers
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
     * @return \Travelport\Util\StructType\AirSearchModifiers
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
     * @return \Travelport\Util\StructType\AirSearchModifiers
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
     * @return \Travelport\Util\StructType\AirSearchModifiers
     */
    public function setExcludeOpenJawAirport(?bool $excludeOpenJawAirport = false): self
    {
        // validation for constraint: boolean
        if (!is_null($excludeOpenJawAirport) && !is_bool($excludeOpenJawAirport)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($excludeOpenJawAirport, true), gettype($excludeOpenJawAirport)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirSearchModifiers
     */
    public function setExcludeGroundTransportation(?bool $excludeGroundTransportation = false): self
    {
        // validation for constraint: boolean
        if (!is_null($excludeGroundTransportation) && !is_bool($excludeGroundTransportation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($excludeGroundTransportation, true), gettype($excludeGroundTransportation)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirSearchModifiers
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
     * @return \Travelport\Util\StructType\AirSearchModifiers
     */
    public function setJetServiceOnly(?bool $jetServiceOnly = null): self
    {
        // validation for constraint: boolean
        if (!is_null($jetServiceOnly) && !is_bool($jetServiceOnly)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($jetServiceOnly, true), gettype($jetServiceOnly)), __LINE__);
        }
        $this->JetServiceOnly = $jetServiceOnly;
        
        return $this;
    }
}
