<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BillingDetailItem StructType
 * Meta information extracted from the WSDL
 * - documentation: The Billing Details Information
 * @subpackage Structs
 */
class BillingDetailItem extends AbstractStructBase
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: Detailed Billing Information Name(e.g Personal ID, Account Number)
     * - use: required
     * @var string
     */
    protected string $Name;
    /**
     * The DataType
     * Meta information extracted from the WSDL
     * - documentation: Detailed Billing Information DataType (Alpha, Numeric, etc.)
     * - use: required
     * @var string
     */
    protected string $DataType;
    /**
     * The MinLength
     * Meta information extracted from the WSDL
     * - documentation: Detailed Billing Information Minimum Length.
     * - use: required
     * @var string
     */
    protected string $MinLength;
    /**
     * The MaxLength
     * Meta information extracted from the WSDL
     * - documentation: Detailed Billing Information Maximum Length.
     * - use: required
     * @var string
     */
    protected string $MaxLength;
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - documentation: Detailed Billing Information Value
     * @var string|null
     */
    protected ?string $Value = null;
    /**
     * Constructor method for BillingDetailItem
     * @uses BillingDetailItem::setName()
     * @uses BillingDetailItem::setDataType()
     * @uses BillingDetailItem::setMinLength()
     * @uses BillingDetailItem::setMaxLength()
     * @uses BillingDetailItem::setValue()
     * @param string $name
     * @param string $dataType
     * @param string $minLength
     * @param string $maxLength
     * @param string $value
     */
    public function __construct(string $name, string $dataType, string $minLength, string $maxLength, ?string $value = null)
    {
        $this
            ->setName($name)
            ->setDataType($dataType)
            ->setMinLength($minLength)
            ->setMaxLength($maxLength)
            ->setValue($value);
    }
    /**
     * Get Name value
     * @return string
     */
    public function getName(): string
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @uses \Travelport\Util\EnumType\TypeBillingDetailsName::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeBillingDetailsName::getValidValues()
     * @throws InvalidArgumentException
     * @param string $name
     * @return \Travelport\Util\StructType\BillingDetailItem
     */
    public function setName(string $name): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeBillingDetailsName::valueIsValid($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeBillingDetailsName', is_array($name) ? implode(', ', $name) : var_export($name, true), implode(', ', \Travelport\Util\EnumType\TypeBillingDetailsName::getValidValues())), __LINE__);
        }
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Get DataType value
     * @return string
     */
    public function getDataType(): string
    {
        return $this->DataType;
    }
    /**
     * Set DataType value
     * @uses \Travelport\Util\EnumType\TypeBillingDetailsDataType::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeBillingDetailsDataType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $dataType
     * @return \Travelport\Util\StructType\BillingDetailItem
     */
    public function setDataType(string $dataType): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeBillingDetailsDataType::valueIsValid($dataType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeBillingDetailsDataType', is_array($dataType) ? implode(', ', $dataType) : var_export($dataType, true), implode(', ', \Travelport\Util\EnumType\TypeBillingDetailsDataType::getValidValues())), __LINE__);
        }
        $this->DataType = $dataType;
        
        return $this;
    }
    /**
     * Get MinLength value
     * @return string
     */
    public function getMinLength(): string
    {
        return $this->MinLength;
    }
    /**
     * Set MinLength value
     * @param string $minLength
     * @return \Travelport\Util\StructType\BillingDetailItem
     */
    public function setMinLength(string $minLength): self
    {
        // validation for constraint: string
        if (!is_null($minLength) && !is_string($minLength)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($minLength, true), gettype($minLength)), __LINE__);
        }
        $this->MinLength = $minLength;
        
        return $this;
    }
    /**
     * Get MaxLength value
     * @return string
     */
    public function getMaxLength(): string
    {
        return $this->MaxLength;
    }
    /**
     * Set MaxLength value
     * @param string $maxLength
     * @return \Travelport\Util\StructType\BillingDetailItem
     */
    public function setMaxLength(string $maxLength): self
    {
        // validation for constraint: string
        if (!is_null($maxLength) && !is_string($maxLength)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($maxLength, true), gettype($maxLength)), __LINE__);
        }
        $this->MaxLength = $maxLength;
        
        return $this;
    }
    /**
     * Get Value value
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param string $value
     * @return \Travelport\Util\StructType\BillingDetailItem
     */
    public function setValue(?string $value = null): self
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->Value = $value;
        
        return $this;
    }
}
