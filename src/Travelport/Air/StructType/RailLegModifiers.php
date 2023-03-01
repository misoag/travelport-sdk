<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
     * @param \Travelport\Air\StructType\PermittedConnectionPoints $permittedConnectionPoints
     * @param \Travelport\Air\StructType\ProhibitedConnectionPoints $prohibitedConnectionPoints
     * @param string $class
     */
    public function __construct(?\Travelport\Air\StructType\PermittedConnectionPoints $permittedConnectionPoints = null, ?\Travelport\Air\StructType\ProhibitedConnectionPoints $prohibitedConnectionPoints = null, ?string $class = null)
    {
        $this
            ->setPermittedConnectionPoints($permittedConnectionPoints)
            ->setProhibitedConnectionPoints($prohibitedConnectionPoints)
            ->setClass($class);
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
     * @return \Travelport\Air\StructType\RailLegModifiers
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
     * @return \Travelport\Air\StructType\RailLegModifiers
     */
    public function setProhibitedConnectionPoints(?\Travelport\Air\StructType\ProhibitedConnectionPoints $prohibitedConnectionPoints = null): self
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
     * @return \Travelport\Air\StructType\RailLegModifiers
     */
    public function setClass(?string $class = null): self
    {
        $this->Class = $class;
        
        return $this;
    }
}
