<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProviderReservationSearchModifiers StructType
 * Meta information extracted from the WSDL
 * - documentation: Controls and switches for the PNR Search request.
 * @subpackage Structs
 */
class ProviderReservationSearchModifiers extends AbstractStructBase
{
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
     * - documentation: Include information about the agent who created, modified or ticketed the PNR.
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
     * - default: 1
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
     * - documentation: Exclude Hotel reservations from the results
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $ExcludeHotel = null;
    /**
     * The ExcludeGround
     * Meta information extracted from the WSDL
     * - documentation: Exclude Ground reservations from the results
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $ExcludeGround = null;
    /**
     * Constructor method for ProviderReservationSearchModifiers
     * @uses ProviderReservationSearchModifiers::setIncludeAllNames()
     * @uses ProviderReservationSearchModifiers::setIncludeAgentInfo()
     * @uses ProviderReservationSearchModifiers::setMaxResults()
     * @uses ProviderReservationSearchModifiers::setStartFromResult()
     * @uses ProviderReservationSearchModifiers::setExcludeAir()
     * @uses ProviderReservationSearchModifiers::setExcludeVehicle()
     * @uses ProviderReservationSearchModifiers::setExcludeHotel()
     * @uses ProviderReservationSearchModifiers::setExcludeGround()
     * @param bool $includeAllNames
     * @param bool $includeAgentInfo
     * @param int $maxResults
     * @param int $startFromResult
     * @param bool $excludeAir
     * @param bool $excludeVehicle
     * @param bool $excludeHotel
     * @param bool $excludeGround
     */
    public function __construct(?bool $includeAllNames = false, ?bool $includeAgentInfo = false, ?int $maxResults = 20, ?int $startFromResult = 1, ?bool $excludeAir = false, ?bool $excludeVehicle = false, ?bool $excludeHotel = false, ?bool $excludeGround = false)
    {
        $this
            ->setIncludeAllNames($includeAllNames)
            ->setIncludeAgentInfo($includeAgentInfo)
            ->setMaxResults($maxResults)
            ->setStartFromResult($startFromResult)
            ->setExcludeAir($excludeAir)
            ->setExcludeVehicle($excludeVehicle)
            ->setExcludeHotel($excludeHotel)
            ->setExcludeGround($excludeGround);
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
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationSearchModifiers
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
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationSearchModifiers
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
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationSearchModifiers
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
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationSearchModifiers
     */
    public function setStartFromResult(?int $startFromResult = 1): self
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
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationSearchModifiers
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
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationSearchModifiers
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
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationSearchModifiers
     */
    public function setExcludeHotel(?bool $excludeHotel = false): self
    {
        $this->ExcludeHotel = $excludeHotel;
        
        return $this;
    }
    /**
     * Get ExcludeGround value
     * @return bool|null
     */
    public function getExcludeGround(): ?bool
    {
        return $this->ExcludeGround;
    }
    /**
     * Set ExcludeGround value
     * @param bool $excludeGround
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationSearchModifiers
     */
    public function setExcludeGround(?bool $excludeGround = false): self
    {
        $this->ExcludeGround = $excludeGround;
        
        return $this;
    }
}
