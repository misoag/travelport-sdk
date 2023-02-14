<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServiceGroup StructType
 * Meta information extracted from the WSDL
 * - documentation: The Service Group of the Ancillary Service. Providers: 1G, 1V, 1P, ACH
 * @subpackage Structs
 */
class ServiceGroup extends AbstractStructBase
{
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - documentation: The Service Group Code of the Ancillary Service. Providers: 1G, 1V, 1P, ACH
     * - use: required
     * @var string
     */
    protected string $Code;
    /**
     * The ServiceSubGroup
     * Meta information extracted from the WSDL
     * - maxOccurs: 15
     * - minOccurs: 0
     * - ref: ServiceSubGroup
     * @var \Travelport\UniversalRecord\StructType\ServiceSubGroup[]
     */
    protected ?array $ServiceSubGroup = null;
    /**
     * Constructor method for ServiceGroup
     * @uses ServiceGroup::setCode()
     * @uses ServiceGroup::setServiceSubGroup()
     * @param string $code
     * @param \Travelport\UniversalRecord\StructType\ServiceSubGroup[] $serviceSubGroup
     */
    public function __construct(string $code, ?array $serviceSubGroup = null)
    {
        $this
            ->setCode($code)
            ->setServiceSubGroup($serviceSubGroup);
    }
    /**
     * Get Code value
     * @return string
     */
    public function getCode(): string
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Travelport\UniversalRecord\StructType\ServiceGroup
     */
    public function setCode(string $code): self
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        $this->Code = $code;
        
        return $this;
    }
    /**
     * Get ServiceSubGroup value
     * @return \Travelport\UniversalRecord\StructType\ServiceSubGroup[]
     */
    public function getServiceSubGroup(): ?array
    {
        return $this->ServiceSubGroup;
    }
    /**
     * This method is responsible for validating the values passed to the setServiceSubGroup method
     * This method is willingly generated in order to preserve the one-line inline validation within the setServiceSubGroup method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateServiceSubGroupForArrayConstraintsFromSetServiceSubGroup(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $serviceGroupServiceSubGroupItem) {
            // validation for constraint: itemType
            if (!$serviceGroupServiceSubGroupItem instanceof \Travelport\UniversalRecord\StructType\ServiceSubGroup) {
                $invalidValues[] = is_object($serviceGroupServiceSubGroupItem) ? get_class($serviceGroupServiceSubGroupItem) : sprintf('%s(%s)', gettype($serviceGroupServiceSubGroupItem), var_export($serviceGroupServiceSubGroupItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ServiceSubGroup property can only contain items of type \Travelport\UniversalRecord\StructType\ServiceSubGroup, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ServiceSubGroup value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ServiceSubGroup[] $serviceSubGroup
     * @return \Travelport\UniversalRecord\StructType\ServiceGroup
     */
    public function setServiceSubGroup(?array $serviceSubGroup = null): self
    {
        // validation for constraint: array
        if ('' !== ($serviceSubGroupArrayErrorMessage = self::validateServiceSubGroupForArrayConstraintsFromSetServiceSubGroup($serviceSubGroup))) {
            throw new InvalidArgumentException($serviceSubGroupArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(15)
        if (is_array($serviceSubGroup) && count($serviceSubGroup) > 15) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 15', count($serviceSubGroup)), __LINE__);
        }
        $this->ServiceSubGroup = $serviceSubGroup;
        
        return $this;
    }
    /**
     * Add item to ServiceSubGroup value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ServiceSubGroup $item
     * @return \Travelport\UniversalRecord\StructType\ServiceGroup
     */
    public function addToServiceSubGroup(\Travelport\UniversalRecord\StructType\ServiceSubGroup $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\ServiceSubGroup) {
            throw new InvalidArgumentException(sprintf('The ServiceSubGroup property can only contain items of type \Travelport\UniversalRecord\StructType\ServiceSubGroup, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(15)
        if (is_array($this->ServiceSubGroup) && count($this->ServiceSubGroup) >= 15) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 15', count($this->ServiceSubGroup)), __LINE__);
        }
        $this->ServiceSubGroup[] = $item;
        
        return $this;
    }
}
