<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlightType StructType
 * Meta information extracted from the WSDL
 * - documentation: Modifier to request flight type options example non-stop only, non-stop and direct only, include single online connection etc.
 * @subpackage Structs
 */
class FlightType extends AbstractStructBase
{
    /**
     * The RequireSingleCarrier
     * Meta information extracted from the WSDL
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $RequireSingleCarrier = null;
    /**
     * The MaxConnections
     * Meta information extracted from the WSDL
     * - base: xs:integer
     * - default: -1
     * - maxInclusive: 3
     * - minInclusive: -1
     * - use: optional
     * @var int|null
     */
    public ?int $MaxConnections = null;
    /**
     * The MaxStops
     * Meta information extracted from the WSDL
     * - base: xs:integer
     * - default: -1
     * - maxInclusive: 3
     * - minInclusive: -1
     * - use: optional
     * @var int|null
     */
    public ?int $MaxStops = null;
    /**
     * The NonStopDirects
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    public ?bool $NonStopDirects = null;
    /**
     * The StopDirects
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    public ?bool $StopDirects = null;
    /**
     * The SingleOnlineCon
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    public ?bool $SingleOnlineCon = null;
    /**
     * The DoubleOnlineCon
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    public ?bool $DoubleOnlineCon = null;
    /**
     * The TripleOnlineCon
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    public ?bool $TripleOnlineCon = null;
    /**
     * The SingleInterlineCon
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    public ?bool $SingleInterlineCon = null;
    /**
     * The DoubleInterlineCon
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    public ?bool $DoubleInterlineCon = null;
    /**
     * The TripleInterlineCon
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    public ?bool $TripleInterlineCon = null;
    /**
     * Constructor method for FlightType
     * @uses FlightType::setRequireSingleCarrier()
     * @uses FlightType::setMaxConnections()
     * @uses FlightType::setMaxStops()
     * @uses FlightType::setNonStopDirects()
     * @uses FlightType::setStopDirects()
     * @uses FlightType::setSingleOnlineCon()
     * @uses FlightType::setDoubleOnlineCon()
     * @uses FlightType::setTripleOnlineCon()
     * @uses FlightType::setSingleInterlineCon()
     * @uses FlightType::setDoubleInterlineCon()
     * @uses FlightType::setTripleInterlineCon()
     * @param bool $requireSingleCarrier
     * @param int $maxConnections
     * @param int $maxStops
     * @param bool $nonStopDirects
     * @param bool $stopDirects
     * @param bool $singleOnlineCon
     * @param bool $doubleOnlineCon
     * @param bool $tripleOnlineCon
     * @param bool $singleInterlineCon
     * @param bool $doubleInterlineCon
     * @param bool $tripleInterlineCon
     */
    public function __construct(?bool $requireSingleCarrier = false, ?int $maxConnections = -1, ?int $maxStops = -1, ?bool $nonStopDirects = null, ?bool $stopDirects = null, ?bool $singleOnlineCon = null, ?bool $doubleOnlineCon = null, ?bool $tripleOnlineCon = null, ?bool $singleInterlineCon = null, ?bool $doubleInterlineCon = null, ?bool $tripleInterlineCon = null)
    {
        $this
            ->setRequireSingleCarrier($requireSingleCarrier)
            ->setMaxConnections($maxConnections)
            ->setMaxStops($maxStops)
            ->setNonStopDirects($nonStopDirects)
            ->setStopDirects($stopDirects)
            ->setSingleOnlineCon($singleOnlineCon)
            ->setDoubleOnlineCon($doubleOnlineCon)
            ->setTripleOnlineCon($tripleOnlineCon)
            ->setSingleInterlineCon($singleInterlineCon)
            ->setDoubleInterlineCon($doubleInterlineCon)
            ->setTripleInterlineCon($tripleInterlineCon);
    }
    /**
     * Get RequireSingleCarrier value
     * @return bool|null
     */
    public function getRequireSingleCarrier(): ?bool
    {
        return $this->RequireSingleCarrier;
    }
    /**
     * Set RequireSingleCarrier value
     * @param bool $requireSingleCarrier
     * @return \Travelport\UniversalRecord\StructType\FlightType
     */
    public function setRequireSingleCarrier(?bool $requireSingleCarrier = false): self
    {
        $this->RequireSingleCarrier = $requireSingleCarrier;
        
        return $this;
    }
    /**
     * Get MaxConnections value
     * @return int|null
     */
    public function getMaxConnections(): ?int
    {
        return $this->MaxConnections;
    }
    /**
     * Set MaxConnections value
     * @param int $maxConnections
     * @return \Travelport\UniversalRecord\StructType\FlightType
     */
    public function setMaxConnections(?int $maxConnections = -1): self
    {
        $this->MaxConnections = $maxConnections;
        
        return $this;
    }
    /**
     * Get MaxStops value
     * @return int|null
     */
    public function getMaxStops(): ?int
    {
        return $this->MaxStops;
    }
    /**
     * Set MaxStops value
     * @param int $maxStops
     * @return \Travelport\UniversalRecord\StructType\FlightType
     */
    public function setMaxStops(?int $maxStops = -1): self
    {
        $this->MaxStops = $maxStops;
        
        return $this;
    }
    /**
     * Get NonStopDirects value
     * @return bool|null
     */
    public function getNonStopDirects(): ?bool
    {
        return $this->NonStopDirects;
    }
    /**
     * Set NonStopDirects value
     * @param bool $nonStopDirects
     * @return \Travelport\UniversalRecord\StructType\FlightType
     */
    public function setNonStopDirects(?bool $nonStopDirects = null): self
    {
        $this->NonStopDirects = $nonStopDirects;
        
        return $this;
    }
    /**
     * Get StopDirects value
     * @return bool|null
     */
    public function getStopDirects(): ?bool
    {
        return $this->StopDirects;
    }
    /**
     * Set StopDirects value
     * @param bool $stopDirects
     * @return \Travelport\UniversalRecord\StructType\FlightType
     */
    public function setStopDirects(?bool $stopDirects = null): self
    {
        $this->StopDirects = $stopDirects;
        
        return $this;
    }
    /**
     * Get SingleOnlineCon value
     * @return bool|null
     */
    public function getSingleOnlineCon(): ?bool
    {
        return $this->SingleOnlineCon;
    }
    /**
     * Set SingleOnlineCon value
     * @param bool $singleOnlineCon
     * @return \Travelport\UniversalRecord\StructType\FlightType
     */
    public function setSingleOnlineCon(?bool $singleOnlineCon = null): self
    {
        $this->SingleOnlineCon = $singleOnlineCon;
        
        return $this;
    }
    /**
     * Get DoubleOnlineCon value
     * @return bool|null
     */
    public function getDoubleOnlineCon(): ?bool
    {
        return $this->DoubleOnlineCon;
    }
    /**
     * Set DoubleOnlineCon value
     * @param bool $doubleOnlineCon
     * @return \Travelport\UniversalRecord\StructType\FlightType
     */
    public function setDoubleOnlineCon(?bool $doubleOnlineCon = null): self
    {
        $this->DoubleOnlineCon = $doubleOnlineCon;
        
        return $this;
    }
    /**
     * Get TripleOnlineCon value
     * @return bool|null
     */
    public function getTripleOnlineCon(): ?bool
    {
        return $this->TripleOnlineCon;
    }
    /**
     * Set TripleOnlineCon value
     * @param bool $tripleOnlineCon
     * @return \Travelport\UniversalRecord\StructType\FlightType
     */
    public function setTripleOnlineCon(?bool $tripleOnlineCon = null): self
    {
        $this->TripleOnlineCon = $tripleOnlineCon;
        
        return $this;
    }
    /**
     * Get SingleInterlineCon value
     * @return bool|null
     */
    public function getSingleInterlineCon(): ?bool
    {
        return $this->SingleInterlineCon;
    }
    /**
     * Set SingleInterlineCon value
     * @param bool $singleInterlineCon
     * @return \Travelport\UniversalRecord\StructType\FlightType
     */
    public function setSingleInterlineCon(?bool $singleInterlineCon = null): self
    {
        $this->SingleInterlineCon = $singleInterlineCon;
        
        return $this;
    }
    /**
     * Get DoubleInterlineCon value
     * @return bool|null
     */
    public function getDoubleInterlineCon(): ?bool
    {
        return $this->DoubleInterlineCon;
    }
    /**
     * Set DoubleInterlineCon value
     * @param bool $doubleInterlineCon
     * @return \Travelport\UniversalRecord\StructType\FlightType
     */
    public function setDoubleInterlineCon(?bool $doubleInterlineCon = null): self
    {
        $this->DoubleInterlineCon = $doubleInterlineCon;
        
        return $this;
    }
    /**
     * Get TripleInterlineCon value
     * @return bool|null
     */
    public function getTripleInterlineCon(): ?bool
    {
        return $this->TripleInterlineCon;
    }
    /**
     * Set TripleInterlineCon value
     * @param bool $tripleInterlineCon
     * @return \Travelport\UniversalRecord\StructType\FlightType
     */
    public function setTripleInterlineCon(?bool $tripleInterlineCon = null): self
    {
        $this->TripleInterlineCon = $tripleInterlineCon;
        
        return $this;
    }
}
