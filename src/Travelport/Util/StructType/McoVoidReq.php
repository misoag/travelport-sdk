<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for McoVoidReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Void an MCO (of any type).
 * @subpackage Structs
 */
class McoVoidReq extends BaseReq
{
    /**
     * The Number
     * Meta information extracted from the WSDL
     * - documentation: The number of the MCO to void
     * - use: required
     * @var string
     */
    protected string $Number;
    /**
     * The GeneralRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:GeneralRemark
     * @var \Travelport\Util\StructType\GeneralRemark[]
     */
    protected ?array $GeneralRemark = null;
    /**
     * The ReturnMCO
     * Meta information extracted from the WSDL
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $ReturnMCO = null;
    /**
     * Constructor method for McoVoidReq
     * @uses McoVoidReq::setNumber()
     * @uses McoVoidReq::setGeneralRemark()
     * @uses McoVoidReq::setReturnMCO()
     * @param string $number
     * @param \Travelport\Util\StructType\GeneralRemark[] $generalRemark
     * @param bool $returnMCO
     */
    public function __construct(string $number, ?array $generalRemark = null, ?bool $returnMCO = false)
    {
        $this
            ->setNumber($number)
            ->setGeneralRemark($generalRemark)
            ->setReturnMCO($returnMCO);
    }
    /**
     * Get Number value
     * @return string
     */
    public function getNumber(): string
    {
        return $this->Number;
    }
    /**
     * Set Number value
     * @param string $number
     * @return \Travelport\Util\StructType\McoVoidReq
     */
    public function setNumber(string $number): self
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($number, true), gettype($number)), __LINE__);
        }
        $this->Number = $number;
        
        return $this;
    }
    /**
     * Get GeneralRemark value
     * @return \Travelport\Util\StructType\GeneralRemark[]
     */
    public function getGeneralRemark(): ?array
    {
        return $this->GeneralRemark;
    }
    /**
     * This method is responsible for validating the values passed to the setGeneralRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGeneralRemark method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGeneralRemarkForArrayConstraintsFromSetGeneralRemark(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $mcoVoidReqGeneralRemarkItem) {
            // validation for constraint: itemType
            if (!$mcoVoidReqGeneralRemarkItem instanceof \Travelport\Util\StructType\GeneralRemark) {
                $invalidValues[] = is_object($mcoVoidReqGeneralRemarkItem) ? get_class($mcoVoidReqGeneralRemarkItem) : sprintf('%s(%s)', gettype($mcoVoidReqGeneralRemarkItem), var_export($mcoVoidReqGeneralRemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The GeneralRemark property can only contain items of type \Travelport\Util\StructType\GeneralRemark, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set GeneralRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\GeneralRemark[] $generalRemark
     * @return \Travelport\Util\StructType\McoVoidReq
     */
    public function setGeneralRemark(?array $generalRemark = null): self
    {
        // validation for constraint: array
        if ('' !== ($generalRemarkArrayErrorMessage = self::validateGeneralRemarkForArrayConstraintsFromSetGeneralRemark($generalRemark))) {
            throw new InvalidArgumentException($generalRemarkArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($generalRemark) && count($generalRemark) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($generalRemark)), __LINE__);
        }
        $this->GeneralRemark = $generalRemark;
        
        return $this;
    }
    /**
     * Add item to GeneralRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\GeneralRemark $item
     * @return \Travelport\Util\StructType\McoVoidReq
     */
    public function addToGeneralRemark(\Travelport\Util\StructType\GeneralRemark $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\GeneralRemark) {
            throw new InvalidArgumentException(sprintf('The GeneralRemark property can only contain items of type \Travelport\Util\StructType\GeneralRemark, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->GeneralRemark) && count($this->GeneralRemark) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->GeneralRemark)), __LINE__);
        }
        $this->GeneralRemark[] = $item;
        
        return $this;
    }
    /**
     * Get ReturnMCO value
     * @return bool|null
     */
    public function getReturnMCO(): ?bool
    {
        return $this->ReturnMCO;
    }
    /**
     * Set ReturnMCO value
     * @param bool $returnMCO
     * @return \Travelport\Util\StructType\McoVoidReq
     */
    public function setReturnMCO(?bool $returnMCO = false): self
    {
        // validation for constraint: boolean
        if (!is_null($returnMCO) && !is_bool($returnMCO)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($returnMCO, true), gettype($returnMCO)), __LINE__);
        }
        $this->ReturnMCO = $returnMCO;
        
        return $this;
    }
}
