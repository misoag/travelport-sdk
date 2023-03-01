<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RailLegModifiers StructType
 * @subpackage Structs
 */
class RailLegModifiers extends AbstractStructBase
{
    /**
     * The PermittedConnectionPoints
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\PermittedConnectionPoints|null
     */
    public ?\Travelport\UniversalRecord\StructType\PermittedConnectionPoints $PermittedConnectionPoints = null;
    /**
     * The ProhibitedConnectionPoints
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\ProhibitedConnectionPoints|null
     */
    public ?\Travelport\UniversalRecord\StructType\ProhibitedConnectionPoints $ProhibitedConnectionPoints = null;
    /**
     * The Class
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $Class = null;
    /**
     * Constructor method for RailLegModifiers
     * @uses RailLegModifiers::setPermittedConnectionPoints()
     * @uses RailLegModifiers::setProhibitedConnectionPoints()
     * @uses RailLegModifiers::setClass()
     * @param \Travelport\UniversalRecord\StructType\PermittedConnectionPoints $permittedConnectionPoints
     * @param \Travelport\UniversalRecord\StructType\ProhibitedConnectionPoints $prohibitedConnectionPoints
     * @param string $class
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\PermittedConnectionPoints $permittedConnectionPoints = null, ?\Travelport\UniversalRecord\StructType\ProhibitedConnectionPoints $prohibitedConnectionPoints = null, ?string $class = null)
    {
        $this
            ->setPermittedConnectionPoints($permittedConnectionPoints)
            ->setProhibitedConnectionPoints($prohibitedConnectionPoints)
            ->setClass($class);
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
     * @return \Travelport\UniversalRecord\StructType\RailLegModifiers
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
     * @return \Travelport\UniversalRecord\StructType\RailLegModifiers
     */
    public function setProhibitedConnectionPoints(?\Travelport\UniversalRecord\StructType\ProhibitedConnectionPoints $prohibitedConnectionPoints = null): self
    {
        $this->ProhibitedConnectionPoints = $prohibitedConnectionPoints;
        
        return $this;
    }
    /**
     * Get Class value
     * @return string|null
     */
    public function getClass(): ?string
    {
        return $this->Class;
    }
    /**
     * Set Class value
     * @param string $class
     * @return \Travelport\UniversalRecord\StructType\RailLegModifiers
     */
    public function setClass(?string $class = null): self
    {
        $this->Class = $class;
        
        return $this;
    }
}
