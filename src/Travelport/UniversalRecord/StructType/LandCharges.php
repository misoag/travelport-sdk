<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LandCharges StructType
 * Meta information extracted from the WSDL
 * - documentation: Prints non-air charges on a document.
 * @subpackage Structs
 */
class LandCharges extends AbstractStructBase
{
    /**
     * The Tax
     * Meta information extracted from the WSDL
     * - maxOccurs: 3
     * - minOccurs: 0
     * - ref: Tax
     * @var \Travelport\UniversalRecord\StructType\Tax[]
     */
    protected ?array $Tax = null;
    /**
     * The Base
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $Base = null;
    /**
     * The Total
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $Total = null;
    /**
     * The Miscellaneous
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $Miscellaneous = null;
    /**
     * The PrePaid
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $PrePaid = null;
    /**
     * The Deposit
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $Deposit = null;
    /**
     * Constructor method for LandCharges
     * @uses LandCharges::setTax()
     * @uses LandCharges::setBase()
     * @uses LandCharges::setTotal()
     * @uses LandCharges::setMiscellaneous()
     * @uses LandCharges::setPrePaid()
     * @uses LandCharges::setDeposit()
     * @param \Travelport\UniversalRecord\StructType\Tax[] $tax
     * @param string $base
     * @param string $total
     * @param string $miscellaneous
     * @param string $prePaid
     * @param string $deposit
     */
    public function __construct(?array $tax = null, ?string $base = null, ?string $total = null, ?string $miscellaneous = null, ?string $prePaid = null, ?string $deposit = null)
    {
        $this
            ->setTax($tax)
            ->setBase($base)
            ->setTotal($total)
            ->setMiscellaneous($miscellaneous)
            ->setPrePaid($prePaid)
            ->setDeposit($deposit);
    }
    /**
     * Get Tax value
     * @return \Travelport\UniversalRecord\StructType\Tax[]
     */
    public function getTax(): ?array
    {
        return $this->Tax;
    }
    /**
     * This method is responsible for validating the values passed to the setTax method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTax method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTaxForArrayConstraintsFromSetTax(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $landChargesTaxItem) {
            // validation for constraint: itemType
            if (!$landChargesTaxItem instanceof \Travelport\UniversalRecord\StructType\Tax) {
                $invalidValues[] = is_object($landChargesTaxItem) ? get_class($landChargesTaxItem) : sprintf('%s(%s)', gettype($landChargesTaxItem), var_export($landChargesTaxItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Tax property can only contain items of type \Travelport\UniversalRecord\StructType\Tax, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Tax value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Tax[] $tax
     * @return \Travelport\UniversalRecord\StructType\LandCharges
     */
    public function setTax(?array $tax = null): self
    {
        // validation for constraint: array
        if ('' !== ($taxArrayErrorMessage = self::validateTaxForArrayConstraintsFromSetTax($tax))) {
            throw new InvalidArgumentException($taxArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(3)
        if (is_array($tax) && count($tax) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 3', count($tax)), __LINE__);
        }
        $this->Tax = $tax;
        
        return $this;
    }
    /**
     * Add item to Tax value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Tax $item
     * @return \Travelport\UniversalRecord\StructType\LandCharges
     */
    public function addToTax(\Travelport\UniversalRecord\StructType\Tax $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\Tax) {
            throw new InvalidArgumentException(sprintf('The Tax property can only contain items of type \Travelport\UniversalRecord\StructType\Tax, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(3)
        if (is_array($this->Tax) && count($this->Tax) >= 3) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 3', count($this->Tax)), __LINE__);
        }
        $this->Tax[] = $item;
        
        return $this;
    }
    /**
     * Get Base value
     * @return string|null
     */
    public function getBase(): ?string
    {
        return $this->Base;
    }
    /**
     * Set Base value
     * @param string $base
     * @return \Travelport\UniversalRecord\StructType\LandCharges
     */
    public function setBase(?string $base = null): self
    {
        // validation for constraint: string
        if (!is_null($base) && !is_string($base)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($base, true), gettype($base)), __LINE__);
        }
        $this->Base = $base;
        
        return $this;
    }
    /**
     * Get Total value
     * @return string|null
     */
    public function getTotal(): ?string
    {
        return $this->Total;
    }
    /**
     * Set Total value
     * @param string $total
     * @return \Travelport\UniversalRecord\StructType\LandCharges
     */
    public function setTotal(?string $total = null): self
    {
        // validation for constraint: string
        if (!is_null($total) && !is_string($total)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($total, true), gettype($total)), __LINE__);
        }
        $this->Total = $total;
        
        return $this;
    }
    /**
     * Get Miscellaneous value
     * @return string|null
     */
    public function getMiscellaneous(): ?string
    {
        return $this->Miscellaneous;
    }
    /**
     * Set Miscellaneous value
     * @param string $miscellaneous
     * @return \Travelport\UniversalRecord\StructType\LandCharges
     */
    public function setMiscellaneous(?string $miscellaneous = null): self
    {
        // validation for constraint: string
        if (!is_null($miscellaneous) && !is_string($miscellaneous)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($miscellaneous, true), gettype($miscellaneous)), __LINE__);
        }
        $this->Miscellaneous = $miscellaneous;
        
        return $this;
    }
    /**
     * Get PrePaid value
     * @return string|null
     */
    public function getPrePaid(): ?string
    {
        return $this->PrePaid;
    }
    /**
     * Set PrePaid value
     * @param string $prePaid
     * @return \Travelport\UniversalRecord\StructType\LandCharges
     */
    public function setPrePaid(?string $prePaid = null): self
    {
        // validation for constraint: string
        if (!is_null($prePaid) && !is_string($prePaid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($prePaid, true), gettype($prePaid)), __LINE__);
        }
        $this->PrePaid = $prePaid;
        
        return $this;
    }
    /**
     * Get Deposit value
     * @return string|null
     */
    public function getDeposit(): ?string
    {
        return $this->Deposit;
    }
    /**
     * Set Deposit value
     * @param string $deposit
     * @return \Travelport\UniversalRecord\StructType\LandCharges
     */
    public function setDeposit(?string $deposit = null): self
    {
        // validation for constraint: string
        if (!is_null($deposit) && !is_string($deposit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deposit, true), gettype($deposit)), __LINE__);
        }
        $this->Deposit = $deposit;
        
        return $this;
    }
}
