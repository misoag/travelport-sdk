<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for McoSearchResult StructType
 * @subpackage Structs
 */
class McoSearchResult extends AbstractStructBase
{
    /**
     * The CreateDate
     * Meta information extracted from the WSDL
     * - documentation: The date the MCO was issued
     * - use: required
     * @var string
     */
    protected string $CreateDate;
    /**
     * The Number
     * Meta information extracted from the WSDL
     * - documentation: The MCO number
     * - use: required
     * @var string
     */
    protected string $Number;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - documentation: The status of the MCO
     * - use: required
     * @var string
     */
    protected string $Status;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - documentation: The Type of the MCO
     * - use: required
     * @var string
     */
    protected string $Type;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:Name
     * @var \Travelport\Util\StructType\Name|null
     */
    protected ?\Travelport\Util\StructType\Name $Name = null;
    /**
     * The LocatorCode
     * Meta information extracted from the WSDL
     * - documentation: The locator code that the MCO is linked to
     * - use: optional
     * @var string|null
     */
    protected ?string $LocatorCode = null;
    /**
     * Constructor method for McoSearchResult
     * @uses McoSearchResult::setCreateDate()
     * @uses McoSearchResult::setNumber()
     * @uses McoSearchResult::setStatus()
     * @uses McoSearchResult::setType()
     * @uses McoSearchResult::setName()
     * @uses McoSearchResult::setLocatorCode()
     * @param string $createDate
     * @param string $number
     * @param string $status
     * @param string $type
     * @param \Travelport\Util\StructType\Name $name
     * @param string $locatorCode
     */
    public function __construct(string $createDate, string $number, string $status, string $type, ?\Travelport\Util\StructType\Name $name = null, ?string $locatorCode = null)
    {
        $this
            ->setCreateDate($createDate)
            ->setNumber($number)
            ->setStatus($status)
            ->setType($type)
            ->setName($name)
            ->setLocatorCode($locatorCode);
    }
    /**
     * Get CreateDate value
     * @return string
     */
    public function getCreateDate(): string
    {
        return $this->CreateDate;
    }
    /**
     * Set CreateDate value
     * @param string $createDate
     * @return \Travelport\Util\StructType\McoSearchResult
     */
    public function setCreateDate(string $createDate): self
    {
        // validation for constraint: string
        if (!is_null($createDate) && !is_string($createDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($createDate, true), gettype($createDate)), __LINE__);
        }
        $this->CreateDate = $createDate;
        
        return $this;
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
     * @return \Travelport\Util\StructType\McoSearchResult
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
     * Get Status value
     * @return string
     */
    public function getStatus(): string
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \Travelport\Util\EnumType\TypeMCOStatus::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeMCOStatus::getValidValues()
     * @throws InvalidArgumentException
     * @param string $status
     * @return \Travelport\Util\StructType\McoSearchResult
     */
    public function setStatus(string $status): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeMCOStatus::valueIsValid($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeMCOStatus', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \Travelport\Util\EnumType\TypeMCOStatus::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        
        return $this;
    }
    /**
     * Get Type value
     * @return string
     */
    public function getType(): string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \Travelport\Util\EnumType\TypeMCOType::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeMCOType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $type
     * @return \Travelport\Util\StructType\McoSearchResult
     */
    public function setType(string $type): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeMCOType::valueIsValid($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeMCOType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \Travelport\Util\EnumType\TypeMCOType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        
        return $this;
    }
    /**
     * Get Name value
     * @return \Travelport\Util\StructType\Name|null
     */
    public function getName(): ?\Travelport\Util\StructType\Name
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param \Travelport\Util\StructType\Name $name
     * @return \Travelport\Util\StructType\McoSearchResult
     */
    public function setName(?\Travelport\Util\StructType\Name $name = null): self
    {
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Get LocatorCode value
     * @return string|null
     */
    public function getLocatorCode(): ?string
    {
        return $this->LocatorCode;
    }
    /**
     * Set LocatorCode value
     * @param string $locatorCode
     * @return \Travelport\Util\StructType\McoSearchResult
     */
    public function setLocatorCode(?string $locatorCode = null): self
    {
        // validation for constraint: string
        if (!is_null($locatorCode) && !is_string($locatorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($locatorCode, true), gettype($locatorCode)), __LINE__);
        }
        $this->LocatorCode = $locatorCode;
        
        return $this;
    }
}
