<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for QueuePlace StructType
 * Meta information extracted from the WSDL
 * - documentation: Identifies the Queue Information to be selected for placing the UR | Allow queue placement of a PNR at the time of booking to be used for Providers 1G,1V and 1P.
 * @subpackage Structs
 */
class QueuePlace extends AbstractStructBase
{
    /**
     * The PseudoCityCode
     * Meta information extracted from the WSDL
     * - documentation: Pseudo City Code | 2 to 10 Letter Pseudo City Code
     * - base: xs:string
     * - maxLength: 10
     * - maxOccurs: 1
     * - minLength: 2
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PseudoCityCode = null;
    /**
     * The QueueSelector
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: QueueSelector
     * @var \Travelport\Hotel\StructType\QueueSelector[]
     */
    protected ?array $QueueSelector = null;
    /**
     * Constructor method for QueuePlace
     * @uses QueuePlace::setPseudoCityCode()
     * @uses QueuePlace::setQueueSelector()
     * @param string $pseudoCityCode
     * @param \Travelport\Hotel\StructType\QueueSelector[] $queueSelector
     */
    public function __construct(?string $pseudoCityCode = null, ?array $queueSelector = null)
    {
        $this
            ->setPseudoCityCode($pseudoCityCode)
            ->setQueueSelector($queueSelector);
    }
    /**
     * Get PseudoCityCode value
     * @return string|null
     */
    public function getPseudoCityCode(): ?string
    {
        return $this->PseudoCityCode;
    }
    /**
     * Set PseudoCityCode value
     * @param string $pseudoCityCode
     * @return \Travelport\Hotel\StructType\QueuePlace
     */
    public function setPseudoCityCode(?string $pseudoCityCode = null): self
    {
        // validation for constraint: string
        if (!is_null($pseudoCityCode) && !is_string($pseudoCityCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pseudoCityCode, true), gettype($pseudoCityCode)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($pseudoCityCode) && mb_strlen((string) $pseudoCityCode) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen((string) $pseudoCityCode)), __LINE__);
        }
        // validation for constraint: minLength(2)
        if (!is_null($pseudoCityCode) && mb_strlen((string) $pseudoCityCode) < 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 2', mb_strlen((string) $pseudoCityCode)), __LINE__);
        }
        $this->PseudoCityCode = $pseudoCityCode;
        
        return $this;
    }
    /**
     * Get QueueSelector value
     * @return \Travelport\Hotel\StructType\QueueSelector[]
     */
    public function getQueueSelector(): ?array
    {
        return $this->QueueSelector;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setQueueSelector method
     * This method is willingly generated in order to preserve the one-line inline validation within the setQueueSelector method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateQueueSelectorForArrayConstraintFromSetQueueSelector(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $queuePlaceQueueSelectorItem) {
            // validation for constraint: itemType
            if (!$queuePlaceQueueSelectorItem instanceof \Travelport\Hotel\StructType\QueueSelector) {
                $invalidValues[] = is_object($queuePlaceQueueSelectorItem) ? get_class($queuePlaceQueueSelectorItem) : sprintf('%s(%s)', gettype($queuePlaceQueueSelectorItem), var_export($queuePlaceQueueSelectorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The QueueSelector property can only contain items of type \Travelport\Hotel\StructType\QueueSelector, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set QueueSelector value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\QueueSelector[] $queueSelector
     * @return \Travelport\Hotel\StructType\QueuePlace
     */
    public function setQueueSelector(?array $queueSelector = null): self
    {
        // validation for constraint: array
        if ('' !== ($queueSelectorArrayErrorMessage = self::validateQueueSelectorForArrayConstraintFromSetQueueSelector($queueSelector))) {
            throw new InvalidArgumentException($queueSelectorArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($queueSelector) && count($queueSelector) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($queueSelector)), __LINE__);
        }
        $this->QueueSelector = $queueSelector;
        
        return $this;
    }
    /**
     * Add item to QueueSelector value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\QueueSelector $item
     * @return \Travelport\Hotel\StructType\QueuePlace
     */
    public function addToQueueSelector(\Travelport\Hotel\StructType\QueueSelector $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Hotel\StructType\QueueSelector) {
            throw new InvalidArgumentException(sprintf('The QueueSelector property can only contain items of type \Travelport\Hotel\StructType\QueueSelector, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->QueueSelector) && count($this->QueueSelector) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->QueueSelector)), __LINE__);
        }
        $this->QueueSelector[] = $item;
        
        return $this;
    }
}
