<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeRestrictionLengthOfStay StructType
 * Meta information extracted from the WSDL
 * - documentation: Length Of Stay Restriction ( e.g. 2 day minimum..)
 * @subpackage Structs
 */
class TypeRestrictionLengthOfStay extends AbstractStructBase
{
    /**
     * The Length
     * Meta information extracted from the WSDL
     * - use: optional
     * @var int|null
     */
    protected ?int $Length = null;
    /**
     * The StayUnit
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $StayUnit = null;
    /**
     * The StayDate
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $StayDate = null;
    /**
     * The MoreRulesPresent
     * Meta information extracted from the WSDL
     * - documentation: If true, specifies that advance purchase information will be present in fare rules.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $MoreRulesPresent = null;
    /**
     * Constructor method for typeRestrictionLengthOfStay
     * @uses TypeRestrictionLengthOfStay::setLength()
     * @uses TypeRestrictionLengthOfStay::setStayUnit()
     * @uses TypeRestrictionLengthOfStay::setStayDate()
     * @uses TypeRestrictionLengthOfStay::setMoreRulesPresent()
     * @param int $length
     * @param string $stayUnit
     * @param string $stayDate
     * @param bool $moreRulesPresent
     */
    public function __construct(?int $length = null, ?string $stayUnit = null, ?string $stayDate = null, ?bool $moreRulesPresent = null)
    {
        $this
            ->setLength($length)
            ->setStayUnit($stayUnit)
            ->setStayDate($stayDate)
            ->setMoreRulesPresent($moreRulesPresent);
    }
    /**
     * Get Length value
     * @return int|null
     */
    public function getLength(): ?int
    {
        return $this->Length;
    }
    /**
     * Set Length value
     * @param int $length
     * @return \Travelport\Util\StructType\TypeRestrictionLengthOfStay
     */
    public function setLength(?int $length = null): self
    {
        // validation for constraint: int
        if (!is_null($length) && !(is_int($length) || ctype_digit($length))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($length, true), gettype($length)), __LINE__);
        }
        $this->Length = $length;
        
        return $this;
    }
    /**
     * Get StayUnit value
     * @return string|null
     */
    public function getStayUnit(): ?string
    {
        return $this->StayUnit;
    }
    /**
     * Set StayUnit value
     * @uses \Travelport\Util\EnumType\TypeStayUnit::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeStayUnit::getValidValues()
     * @throws InvalidArgumentException
     * @param string $stayUnit
     * @return \Travelport\Util\StructType\TypeRestrictionLengthOfStay
     */
    public function setStayUnit(?string $stayUnit = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeStayUnit::valueIsValid($stayUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeStayUnit', is_array($stayUnit) ? implode(', ', $stayUnit) : var_export($stayUnit, true), implode(', ', \Travelport\Util\EnumType\TypeStayUnit::getValidValues())), __LINE__);
        }
        $this->StayUnit = $stayUnit;
        
        return $this;
    }
    /**
     * Get StayDate value
     * @return string|null
     */
    public function getStayDate(): ?string
    {
        return $this->StayDate;
    }
    /**
     * Set StayDate value
     * @param string $stayDate
     * @return \Travelport\Util\StructType\TypeRestrictionLengthOfStay
     */
    public function setStayDate(?string $stayDate = null): self
    {
        // validation for constraint: string
        if (!is_null($stayDate) && !is_string($stayDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($stayDate, true), gettype($stayDate)), __LINE__);
        }
        $this->StayDate = $stayDate;
        
        return $this;
    }
    /**
     * Get MoreRulesPresent value
     * @return bool|null
     */
    public function getMoreRulesPresent(): ?bool
    {
        return $this->MoreRulesPresent;
    }
    /**
     * Set MoreRulesPresent value
     * @param bool $moreRulesPresent
     * @return \Travelport\Util\StructType\TypeRestrictionLengthOfStay
     */
    public function setMoreRulesPresent(?bool $moreRulesPresent = null): self
    {
        // validation for constraint: boolean
        if (!is_null($moreRulesPresent) && !is_bool($moreRulesPresent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($moreRulesPresent, true), gettype($moreRulesPresent)), __LINE__);
        }
        $this->MoreRulesPresent = $moreRulesPresent;
        
        return $this;
    }
}
