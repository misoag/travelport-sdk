<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
    public string $Name;
    /**
     * The DataType
     * Meta information extracted from the WSDL
     * - documentation: Detailed Billing Information DataType (Alpha, Numeric, etc.)
     * - use: required
     * @var string
     */
    public string $DataType;
    /**
     * The MinLength
     * Meta information extracted from the WSDL
     * - documentation: Detailed Billing Information Minimum Length.
     * - use: required
     * @var string
     */
    public string $MinLength;
    /**
     * The MaxLength
     * Meta information extracted from the WSDL
     * - documentation: Detailed Billing Information Maximum Length.
     * - use: required
     * @var string
     */
    public string $MaxLength;
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - documentation: Detailed Billing Information Value
     * @var string|null
     */
    public ?string $Value = null;
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
     * @param string $name
     * @return \Travelport\Air\StructType\BillingDetailItem
     */
    public function setName(string $name): self
    {
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
     * @param string $dataType
     * @return \Travelport\Air\StructType\BillingDetailItem
     */
    public function setDataType(string $dataType): self
    {
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
     * @return \Travelport\Air\StructType\BillingDetailItem
     */
    public function setMinLength(string $minLength): self
    {
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
     * @return \Travelport\Air\StructType\BillingDetailItem
     */
    public function setMaxLength(string $maxLength): self
    {
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
     * @return \Travelport\Air\StructType\BillingDetailItem
     */
    public function setValue(?string $value = null): self
    {
        $this->Value = $value;
        
        return $this;
    }
}
