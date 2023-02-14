<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Routing StructType
 * @subpackage Structs
 */
class Routing extends AbstractStructBase
{
    /**
     * The DirectionInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\DirectionInfo[]
     */
    protected ?array $DirectionInfo = null;
    /**
     * The RoutingConstructedInd
     * @var bool|null
     */
    protected ?bool $RoutingConstructedInd = null;
    /**
     * The Number
     * @var string|null
     */
    protected ?string $Number = null;
    /**
     * The RoutingRestriction
     * @var string|null
     */
    protected ?string $RoutingRestriction = null;
    /**
     * Constructor method for Routing
     * @uses Routing::setDirectionInfo()
     * @uses Routing::setRoutingConstructedInd()
     * @uses Routing::setNumber()
     * @uses Routing::setRoutingRestriction()
     * @param \Travelport\UniversalRecord\StructType\DirectionInfo[] $directionInfo
     * @param bool $routingConstructedInd
     * @param string $number
     * @param string $routingRestriction
     */
    public function __construct(?array $directionInfo = null, ?bool $routingConstructedInd = null, ?string $number = null, ?string $routingRestriction = null)
    {
        $this
            ->setDirectionInfo($directionInfo)
            ->setRoutingConstructedInd($routingConstructedInd)
            ->setNumber($number)
            ->setRoutingRestriction($routingRestriction);
    }
    /**
     * Get DirectionInfo value
     * @return \Travelport\UniversalRecord\StructType\DirectionInfo[]
     */
    public function getDirectionInfo(): ?array
    {
        return $this->DirectionInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setDirectionInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDirectionInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDirectionInfoForArrayConstraintsFromSetDirectionInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $routingDirectionInfoItem) {
            // validation for constraint: itemType
            if (!$routingDirectionInfoItem instanceof \Travelport\UniversalRecord\StructType\DirectionInfo) {
                $invalidValues[] = is_object($routingDirectionInfoItem) ? get_class($routingDirectionInfoItem) : sprintf('%s(%s)', gettype($routingDirectionInfoItem), var_export($routingDirectionInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DirectionInfo property can only contain items of type \Travelport\UniversalRecord\StructType\DirectionInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set DirectionInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\DirectionInfo[] $directionInfo
     * @return \Travelport\UniversalRecord\StructType\Routing
     */
    public function setDirectionInfo(?array $directionInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($directionInfoArrayErrorMessage = self::validateDirectionInfoForArrayConstraintsFromSetDirectionInfo($directionInfo))) {
            throw new InvalidArgumentException($directionInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($directionInfo) && count($directionInfo) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($directionInfo)), __LINE__);
        }
        $this->DirectionInfo = $directionInfo;
        
        return $this;
    }
    /**
     * Add item to DirectionInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\DirectionInfo $item
     * @return \Travelport\UniversalRecord\StructType\Routing
     */
    public function addToDirectionInfo(\Travelport\UniversalRecord\StructType\DirectionInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\DirectionInfo) {
            throw new InvalidArgumentException(sprintf('The DirectionInfo property can only contain items of type \Travelport\UniversalRecord\StructType\DirectionInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->DirectionInfo) && count($this->DirectionInfo) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->DirectionInfo)), __LINE__);
        }
        $this->DirectionInfo[] = $item;
        
        return $this;
    }
    /**
     * Get RoutingConstructedInd value
     * @return bool|null
     */
    public function getRoutingConstructedInd(): ?bool
    {
        return $this->RoutingConstructedInd;
    }
    /**
     * Set RoutingConstructedInd value
     * @param bool $routingConstructedInd
     * @return \Travelport\UniversalRecord\StructType\Routing
     */
    public function setRoutingConstructedInd(?bool $routingConstructedInd = null): self
    {
        // validation for constraint: boolean
        if (!is_null($routingConstructedInd) && !is_bool($routingConstructedInd)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($routingConstructedInd, true), gettype($routingConstructedInd)), __LINE__);
        }
        $this->RoutingConstructedInd = $routingConstructedInd;
        
        return $this;
    }
    /**
     * Get Number value
     * @return string|null
     */
    public function getNumber(): ?string
    {
        return $this->Number;
    }
    /**
     * Set Number value
     * @param string $number
     * @return \Travelport\UniversalRecord\StructType\Routing
     */
    public function setNumber(?string $number = null): self
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($number, true), gettype($number)), __LINE__);
        }
        $this->Number = $number;
        
        return $this;
    }
    /**
     * Get RoutingRestriction value
     * @return string|null
     */
    public function getRoutingRestriction(): ?string
    {
        return $this->RoutingRestriction;
    }
    /**
     * Set RoutingRestriction value
     * @param string $routingRestriction
     * @return \Travelport\UniversalRecord\StructType\Routing
     */
    public function setRoutingRestriction(?string $routingRestriction = null): self
    {
        // validation for constraint: string
        if (!is_null($routingRestriction) && !is_string($routingRestriction)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($routingRestriction, true), gettype($routingRestriction)), __LINE__);
        }
        $this->RoutingRestriction = $routingRestriction;
        
        return $this;
    }
}
