<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirPricingCommand StructType
 * Meta information extracted from the WSDL
 * - documentation: A containter to identify individual pricing events. A pricing result will be returned for each pricing command according to its parameters.
 * @subpackage Structs
 */
class AirPricingCommand extends AbstractStructBase
{
    /**
     * The AirPricingModifiers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: AirPricingModifiers
     * @var \Travelport\Util\StructType\AirPricingModifiers|null
     */
    protected ?\Travelport\Util\StructType\AirPricingModifiers $AirPricingModifiers = null;
    /**
     * The AirSegmentPricingModifiers
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AirSegmentPricingModifiers
     * @var \Travelport\Util\StructType\AirSegmentPricingModifiers[]
     */
    protected ?array $AirSegmentPricingModifiers = null;
    /**
     * The CommandKey
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 10
     * - use: optional
     * @var string|null
     */
    protected ?string $CommandKey = null;
    /**
     * The CabinClass
     * Meta information extracted from the WSDL
     * - documentation: Specify the cabin type to price the entire itinerary in. If segment level cabin selection is required, this attribute should not be used.
     * - use: optional
     * @var string|null
     */
    protected ?string $CabinClass = null;
    /**
     * Constructor method for AirPricingCommand
     * @uses AirPricingCommand::setAirPricingModifiers()
     * @uses AirPricingCommand::setAirSegmentPricingModifiers()
     * @uses AirPricingCommand::setCommandKey()
     * @uses AirPricingCommand::setCabinClass()
     * @param \Travelport\Util\StructType\AirPricingModifiers $airPricingModifiers
     * @param \Travelport\Util\StructType\AirSegmentPricingModifiers[] $airSegmentPricingModifiers
     * @param string $commandKey
     * @param string $cabinClass
     */
    public function __construct(?\Travelport\Util\StructType\AirPricingModifiers $airPricingModifiers = null, ?array $airSegmentPricingModifiers = null, ?string $commandKey = null, ?string $cabinClass = null)
    {
        $this
            ->setAirPricingModifiers($airPricingModifiers)
            ->setAirSegmentPricingModifiers($airSegmentPricingModifiers)
            ->setCommandKey($commandKey)
            ->setCabinClass($cabinClass);
    }
    /**
     * Get AirPricingModifiers value
     * @return \Travelport\Util\StructType\AirPricingModifiers|null
     */
    public function getAirPricingModifiers(): ?\Travelport\Util\StructType\AirPricingModifiers
    {
        return $this->AirPricingModifiers;
    }
    /**
     * Set AirPricingModifiers value
     * @param \Travelport\Util\StructType\AirPricingModifiers $airPricingModifiers
     * @return \Travelport\Util\StructType\AirPricingCommand
     */
    public function setAirPricingModifiers(?\Travelport\Util\StructType\AirPricingModifiers $airPricingModifiers = null): self
    {
        $this->AirPricingModifiers = $airPricingModifiers;
        
        return $this;
    }
    /**
     * Get AirSegmentPricingModifiers value
     * @return \Travelport\Util\StructType\AirSegmentPricingModifiers[]
     */
    public function getAirSegmentPricingModifiers(): ?array
    {
        return $this->AirSegmentPricingModifiers;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAirSegmentPricingModifiers method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirSegmentPricingModifiers method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAirSegmentPricingModifiersForArrayConstraintFromSetAirSegmentPricingModifiers(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airPricingCommandAirSegmentPricingModifiersItem) {
            // validation for constraint: itemType
            if (!$airPricingCommandAirSegmentPricingModifiersItem instanceof \Travelport\Util\StructType\AirSegmentPricingModifiers) {
                $invalidValues[] = is_object($airPricingCommandAirSegmentPricingModifiersItem) ? get_class($airPricingCommandAirSegmentPricingModifiersItem) : sprintf('%s(%s)', gettype($airPricingCommandAirSegmentPricingModifiersItem), var_export($airPricingCommandAirSegmentPricingModifiersItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AirSegmentPricingModifiers property can only contain items of type \Travelport\Util\StructType\AirSegmentPricingModifiers, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AirSegmentPricingModifiers value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\AirSegmentPricingModifiers[] $airSegmentPricingModifiers
     * @return \Travelport\Util\StructType\AirPricingCommand
     */
    public function setAirSegmentPricingModifiers(?array $airSegmentPricingModifiers = null): self
    {
        // validation for constraint: array
        if ('' !== ($airSegmentPricingModifiersArrayErrorMessage = self::validateAirSegmentPricingModifiersForArrayConstraintFromSetAirSegmentPricingModifiers($airSegmentPricingModifiers))) {
            throw new InvalidArgumentException($airSegmentPricingModifiersArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($airSegmentPricingModifiers) && count($airSegmentPricingModifiers) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($airSegmentPricingModifiers)), __LINE__);
        }
        $this->AirSegmentPricingModifiers = $airSegmentPricingModifiers;
        
        return $this;
    }
    /**
     * Add item to AirSegmentPricingModifiers value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\AirSegmentPricingModifiers $item
     * @return \Travelport\Util\StructType\AirPricingCommand
     */
    public function addToAirSegmentPricingModifiers(\Travelport\Util\StructType\AirSegmentPricingModifiers $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\AirSegmentPricingModifiers) {
            throw new InvalidArgumentException(sprintf('The AirSegmentPricingModifiers property can only contain items of type \Travelport\Util\StructType\AirSegmentPricingModifiers, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AirSegmentPricingModifiers) && count($this->AirSegmentPricingModifiers) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AirSegmentPricingModifiers)), __LINE__);
        }
        $this->AirSegmentPricingModifiers[] = $item;
        
        return $this;
    }
    /**
     * Get CommandKey value
     * @return string|null
     */
    public function getCommandKey(): ?string
    {
        return $this->CommandKey;
    }
    /**
     * Set CommandKey value
     * @param string $commandKey
     * @return \Travelport\Util\StructType\AirPricingCommand
     */
    public function setCommandKey(?string $commandKey = null): self
    {
        // validation for constraint: string
        if (!is_null($commandKey) && !is_string($commandKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($commandKey, true), gettype($commandKey)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($commandKey) && mb_strlen((string) $commandKey) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen((string) $commandKey)), __LINE__);
        }
        $this->CommandKey = $commandKey;
        
        return $this;
    }
    /**
     * Get CabinClass value
     * @return string|null
     */
    public function getCabinClass(): ?string
    {
        return $this->CabinClass;
    }
    /**
     * Set CabinClass value
     * @param string $cabinClass
     * @return \Travelport\Util\StructType\AirPricingCommand
     */
    public function setCabinClass(?string $cabinClass = null): self
    {
        // validation for constraint: string
        if (!is_null($cabinClass) && !is_string($cabinClass)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cabinClass, true), gettype($cabinClass)), __LINE__);
        }
        $this->CabinClass = $cabinClass;
        
        return $this;
    }
}
