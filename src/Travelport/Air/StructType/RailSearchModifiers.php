<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RailSearchModifiers StructType
 * Meta information extracted from the WSDL
 * - documentation: Controls and switches for the Rail Availability Search request
 * @subpackage Structs
 */
class RailSearchModifiers extends AbstractStructBase
{
    /**
     * The PreferredSuppliers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\PreferredSuppliers|null
     */
    public ?\Travelport\Air\StructType\PreferredSuppliers $PreferredSuppliers = null;
    /**
     * The MaxChanges
     * Meta information extracted from the WSDL
     * - base: xs:integer
     * - default: 2
     * - maxInclusive: 3
     * - minInclusive: 0
     * - use: optional
     * @var int|null
     */
    public ?int $MaxChanges = null;
    /**
     * The Direction
     * Meta information extracted from the WSDL
     * - documentation: The direction of travel.
     * - use: optional
     * @var string|null
     */
    public ?string $Direction = null;
    /**
     * The Class
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $Class = null;
    /**
     * The MaxSolutions
     * Meta information extracted from the WSDL
     * - documentation: The maximum number of solutions to return. Decreasing this number
     * - default: 300
     * - use: optional
     * @var int|null
     */
    public ?int $MaxSolutions = null;
    /**
     * Constructor method for RailSearchModifiers
     * @uses RailSearchModifiers::setPreferredSuppliers()
     * @uses RailSearchModifiers::setMaxChanges()
     * @uses RailSearchModifiers::setDirection()
     * @uses RailSearchModifiers::setClass()
     * @uses RailSearchModifiers::setMaxSolutions()
     * @param \Travelport\Air\StructType\PreferredSuppliers $preferredSuppliers
     * @param int $maxChanges
     * @param string $direction
     * @param string $class
     * @param int $maxSolutions
     */
    public function __construct(?\Travelport\Air\StructType\PreferredSuppliers $preferredSuppliers = null, ?int $maxChanges = 2, ?string $direction = null, ?string $class = null, ?int $maxSolutions = 300)
    {
        $this
            ->setPreferredSuppliers($preferredSuppliers)
            ->setMaxChanges($maxChanges)
            ->setDirection($direction)
            ->setClass($class)
            ->setMaxSolutions($maxSolutions);
    }
    /**
     * Get PreferredSuppliers value
     * @return \Travelport\Air\StructType\PreferredSuppliers|null
     */
    public function getPreferredSuppliers(): ?\Travelport\Air\StructType\PreferredSuppliers
    {
        return $this->PreferredSuppliers;
    }
    /**
     * Set PreferredSuppliers value
     * @param \Travelport\Air\StructType\PreferredSuppliers $preferredSuppliers
     * @return \Travelport\Air\StructType\RailSearchModifiers
     */
    public function setPreferredSuppliers(?\Travelport\Air\StructType\PreferredSuppliers $preferredSuppliers = null): self
    {
        $this->PreferredSuppliers = $preferredSuppliers;
        
        return $this;
    }
    /**
     * Get MaxChanges value
     * @return int|null
     */
    public function getMaxChanges(): ?int
    {
        return $this->MaxChanges;
    }
    /**
     * Set MaxChanges value
     * @param int $maxChanges
     * @return \Travelport\Air\StructType\RailSearchModifiers
     */
    public function setMaxChanges(?int $maxChanges = 2): self
    {
        $this->MaxChanges = $maxChanges;
        
        return $this;
    }
    /**
     * Get Direction value
     * @return string|null
     */
    public function getDirection(): ?string
    {
        return $this->Direction;
    }
    /**
     * Set Direction value
     * @param string $direction
     * @return \Travelport\Air\StructType\RailSearchModifiers
     */
    public function setDirection(?string $direction = null): self
    {
        $this->Direction = $direction;
        
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
     * @return \Travelport\Air\StructType\RailSearchModifiers
     */
    public function setClass(?string $class = null): self
    {
        $this->Class = $class;
        
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
     * @return \Travelport\Air\StructType\RailSearchModifiers
     */
    public function setMaxSolutions(?int $maxSolutions = 300): self
    {
        $this->MaxSolutions = $maxSolutions;
        
        return $this;
    }
}
