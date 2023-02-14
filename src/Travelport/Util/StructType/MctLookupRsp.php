<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MctLookupRsp StructType
 * @subpackage Structs
 */
class MctLookupRsp extends BaseRsp
{
    /**
     * The MctStandard
     * Meta information extracted from the WSDL
     * - maxOccurs: 4
     * - minOccurs: 0
     * - ref: MctStandard
     * @var \Travelport\Util\StructType\MctStandard[]
     */
    protected ?array $MctStandard = null;
    /**
     * The MctException
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: MctException
     * @var \Travelport\Util\StructType\MctException[]
     */
    protected ?array $MctException = null;
    /**
     * Constructor method for MctLookupRsp
     * @uses MctLookupRsp::setMctStandard()
     * @uses MctLookupRsp::setMctException()
     * @param \Travelport\Util\StructType\MctStandard[] $mctStandard
     * @param \Travelport\Util\StructType\MctException[] $mctException
     */
    public function __construct(?array $mctStandard = null, ?array $mctException = null)
    {
        $this
            ->setMctStandard($mctStandard)
            ->setMctException($mctException);
    }
    /**
     * Get MctStandard value
     * @return \Travelport\Util\StructType\MctStandard[]
     */
    public function getMctStandard(): ?array
    {
        return $this->MctStandard;
    }
    /**
     * This method is responsible for validating the values passed to the setMctStandard method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMctStandard method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMctStandardForArrayConstraintsFromSetMctStandard(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $mctLookupRspMctStandardItem) {
            // validation for constraint: itemType
            if (!$mctLookupRspMctStandardItem instanceof \Travelport\Util\StructType\MctStandard) {
                $invalidValues[] = is_object($mctLookupRspMctStandardItem) ? get_class($mctLookupRspMctStandardItem) : sprintf('%s(%s)', gettype($mctLookupRspMctStandardItem), var_export($mctLookupRspMctStandardItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MctStandard property can only contain items of type \Travelport\Util\StructType\MctStandard, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MctStandard value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\MctStandard[] $mctStandard
     * @return \Travelport\Util\StructType\MctLookupRsp
     */
    public function setMctStandard(?array $mctStandard = null): self
    {
        // validation for constraint: array
        if ('' !== ($mctStandardArrayErrorMessage = self::validateMctStandardForArrayConstraintsFromSetMctStandard($mctStandard))) {
            throw new InvalidArgumentException($mctStandardArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(4)
        if (is_array($mctStandard) && count($mctStandard) > 4) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 4', count($mctStandard)), __LINE__);
        }
        $this->MctStandard = $mctStandard;
        
        return $this;
    }
    /**
     * Add item to MctStandard value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\MctStandard $item
     * @return \Travelport\Util\StructType\MctLookupRsp
     */
    public function addToMctStandard(\Travelport\Util\StructType\MctStandard $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\MctStandard) {
            throw new InvalidArgumentException(sprintf('The MctStandard property can only contain items of type \Travelport\Util\StructType\MctStandard, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(4)
        if (is_array($this->MctStandard) && count($this->MctStandard) >= 4) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 4', count($this->MctStandard)), __LINE__);
        }
        $this->MctStandard[] = $item;
        
        return $this;
    }
    /**
     * Get MctException value
     * @return \Travelport\Util\StructType\MctException[]
     */
    public function getMctException(): ?array
    {
        return $this->MctException;
    }
    /**
     * This method is responsible for validating the values passed to the setMctException method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMctException method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMctExceptionForArrayConstraintsFromSetMctException(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $mctLookupRspMctExceptionItem) {
            // validation for constraint: itemType
            if (!$mctLookupRspMctExceptionItem instanceof \Travelport\Util\StructType\MctException) {
                $invalidValues[] = is_object($mctLookupRspMctExceptionItem) ? get_class($mctLookupRspMctExceptionItem) : sprintf('%s(%s)', gettype($mctLookupRspMctExceptionItem), var_export($mctLookupRspMctExceptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MctException property can only contain items of type \Travelport\Util\StructType\MctException, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MctException value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\MctException[] $mctException
     * @return \Travelport\Util\StructType\MctLookupRsp
     */
    public function setMctException(?array $mctException = null): self
    {
        // validation for constraint: array
        if ('' !== ($mctExceptionArrayErrorMessage = self::validateMctExceptionForArrayConstraintsFromSetMctException($mctException))) {
            throw new InvalidArgumentException($mctExceptionArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($mctException) && count($mctException) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($mctException)), __LINE__);
        }
        $this->MctException = $mctException;
        
        return $this;
    }
    /**
     * Add item to MctException value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\MctException $item
     * @return \Travelport\Util\StructType\MctLookupRsp
     */
    public function addToMctException(\Travelport\Util\StructType\MctException $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\MctException) {
            throw new InvalidArgumentException(sprintf('The MctException property can only contain items of type \Travelport\Util\StructType\MctException, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->MctException) && count($this->MctException) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->MctException)), __LINE__);
        }
        $this->MctException[] = $item;
        
        return $this;
    }
}
