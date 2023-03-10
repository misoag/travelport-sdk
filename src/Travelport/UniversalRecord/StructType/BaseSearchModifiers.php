<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseSearchModifiers StructType
 * Meta information extracted from the WSDL
 * - documentation: Controls and switches for the Universal Record Search and Saved Trip search request.
 * @subpackage Structs
 */
class BaseSearchModifiers extends AbstractStructBase
{
    /**
     * The TravelDate
     * Meta information extracted from the WSDL
     * - documentation: Matched with flight departure date or hotel check-in date or vehicle pick-up date. For Rail, travel date should be between journey start and end dates, Cannot be combined with any date in product level ReservationCriteria
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeDateSpec|null
     */
    public ?\Travelport\UniversalRecord\StructType\TypeDateSpec $TravelDate = null;
    /**
     * The IncludeAllNames
     * Meta information extracted from the WSDL
     * - documentation: If true, include all the passenger names in the results. Otherwise include only the name of the primary passenger.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $IncludeAllNames = null;
    /**
     * The IncludeAgentInfo
     * Meta information extracted from the WSDL
     * - documentation: Include information about the agent who created, modified or ticketed the Universal Record.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $IncludeAgentInfo = null;
    /**
     * The MaxResults
     * Meta information extracted from the WSDL
     * - documentation: Used to limit the number of results returned, particularly in more general searches that may return a large result set.
     * - base: xs:integer
     * - default: 20
     * - maxInclusive: 200
     * - minInclusive: 1
     * - use: optional
     * @var int|null
     */
    public ?int $MaxResults = null;
    /**
     * The StartFromResult
     * Meta information extracted from the WSDL
     * - documentation: Used to browse beyond the maximum number of results specified with the MaxResults parameter. Acts as an offset to skip the specified number of PNRs from the begining of the result set.
     * - base: xs:integer
     * - minInclusive: 1
     * - use: optional
     * @var int|null
     */
    public ?int $StartFromResult = null;
    /**
     * The ExcludeAir
     * Meta information extracted from the WSDL
     * - documentation: Exclude Air reservations from the results
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $ExcludeAir = null;
    /**
     * The ExcludeVehicle
     * Meta information extracted from the WSDL
     * - documentation: Exclude Vehicle reservations from the results
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $ExcludeVehicle = null;
    /**
     * The ExcludeHotel
     * Meta information extracted from the WSDL
     * - documentation: Exclude Hotel reservations from the results.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $ExcludeHotel = null;
    /**
     * Constructor method for BaseSearchModifiers
     * @uses BaseSearchModifiers::setTravelDate()
     * @uses BaseSearchModifiers::setIncludeAllNames()
     * @uses BaseSearchModifiers::setIncludeAgentInfo()
     * @uses BaseSearchModifiers::setMaxResults()
     * @uses BaseSearchModifiers::setStartFromResult()
     * @uses BaseSearchModifiers::setExcludeAir()
     * @uses BaseSearchModifiers::setExcludeVehicle()
     * @uses BaseSearchModifiers::setExcludeHotel()
     * @param \Travelport\UniversalRecord\StructType\TypeDateSpec $travelDate
     * @param bool $includeAllNames
     * @param bool $includeAgentInfo
     * @param int $maxResults
     * @param int $startFromResult
     * @param bool $excludeAir
     * @param bool $excludeVehicle
     * @param bool $excludeHotel
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\TypeDateSpec $travelDate = null, ?bool $includeAllNames = false, ?bool $includeAgentInfo = false, ?int $maxResults = 20, ?int $startFromResult = null, ?bool $excludeAir = false, ?bool $excludeVehicle = false, ?bool $excludeHotel = false)
    {
        $this
            ->setTravelDate($travelDate)
            ->setIncludeAllNames($includeAllNames)
            ->setIncludeAgentInfo($includeAgentInfo)
            ->setMaxResults($maxResults)
            ->setStartFromResult($startFromResult)
            ->setExcludeAir($excludeAir)
            ->setExcludeVehicle($excludeVehicle)
            ->setExcludeHotel($excludeHotel);
    }
    /**
     * Get TravelDate value
     * @return \Travelport\UniversalRecord\StructType\TypeDateSpec|null
     */
    public function getTravelDate(): ?\Travelport\UniversalRecord\StructType\TypeDateSpec
    {
        return $this->TravelDate;
    }
    /**
     * Set TravelDate value
     * @param \Travelport\UniversalRecord\StructType\TypeDateSpec $travelDate
     * @return \Travelport\UniversalRecord\StructType\BaseSearchModifiers
     */
    public function setTravelDate(?\Travelport\UniversalRecord\StructType\TypeDateSpec $travelDate = null): self
    {
        $this->TravelDate = $travelDate;
        
        return $this;
    }
    /**
     * Get IncludeAllNames value
     * @return bool|null
     */
    public function getIncludeAllNames(): ?bool
    {
        return $this->IncludeAllNames;
    }
    /**
     * Set IncludeAllNames value
     * @param bool $includeAllNames
     * @return \Travelport\UniversalRecord\StructType\BaseSearchModifiers
     */
    public function setIncludeAllNames(?bool $includeAllNames = false): self
    {
        $this->IncludeAllNames = $includeAllNames;
        
        return $this;
    }
    /**
     * Get IncludeAgentInfo value
     * @return bool|null
     */
    public function getIncludeAgentInfo(): ?bool
    {
        return $this->IncludeAgentInfo;
    }
    /**
     * Set IncludeAgentInfo value
     * @param bool $includeAgentInfo
     * @return \Travelport\UniversalRecord\StructType\BaseSearchModifiers
     */
    public function setIncludeAgentInfo(?bool $includeAgentInfo = false): self
    {
        $this->IncludeAgentInfo = $includeAgentInfo;
        
        return $this;
    }
    /**
     * Get MaxResults value
     * @return int|null
     */
    public function getMaxResults(): ?int
    {
        return $this->MaxResults;
    }
    /**
     * Set MaxResults value
     * @param int $maxResults
     * @return \Travelport\UniversalRecord\StructType\BaseSearchModifiers
     */
    public function setMaxResults(?int $maxResults = 20): self
    {
        $this->MaxResults = $maxResults;
        
        return $this;
    }
    /**
     * Get StartFromResult value
     * @return int|null
     */
    public function getStartFromResult(): ?int
    {
        return $this->StartFromResult;
    }
    /**
     * Set StartFromResult value
     * @param int $startFromResult
     * @return \Travelport\UniversalRecord\StructType\BaseSearchModifiers
     */
    public function setStartFromResult(?int $startFromResult = null): self
    {
        $this->StartFromResult = $startFromResult;
        
        return $this;
    }
    /**
     * Get ExcludeAir value
     * @return bool|null
     */
    public function getExcludeAir(): ?bool
    {
        return $this->ExcludeAir;
    }
    /**
     * Set ExcludeAir value
     * @param bool $excludeAir
     * @return \Travelport\UniversalRecord\StructType\BaseSearchModifiers
     */
    public function setExcludeAir(?bool $excludeAir = false): self
    {
        $this->ExcludeAir = $excludeAir;
        
        return $this;
    }
    /**
     * Get ExcludeVehicle value
     * @return bool|null
     */
    public function getExcludeVehicle(): ?bool
    {
        return $this->ExcludeVehicle;
    }
    /**
     * Set ExcludeVehicle value
     * @param bool $excludeVehicle
     * @return \Travelport\UniversalRecord\StructType\BaseSearchModifiers
     */
    public function setExcludeVehicle(?bool $excludeVehicle = false): self
    {
        $this->ExcludeVehicle = $excludeVehicle;
        
        return $this;
    }
    /**
     * Get ExcludeHotel value
     * @return bool|null
     */
    public function getExcludeHotel(): ?bool
    {
        return $this->ExcludeHotel;
    }
    /**
     * Set ExcludeHotel value
     * @param bool $excludeHotel
     * @return \Travelport\UniversalRecord\StructType\BaseSearchModifiers
     */
    public function setExcludeHotel(?bool $excludeHotel = false): self
    {
        $this->ExcludeHotel = $excludeHotel;
        
        return $this;
    }
}
