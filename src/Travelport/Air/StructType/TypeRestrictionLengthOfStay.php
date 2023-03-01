<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
    public ?int $Length = null;
    /**
     * The StayUnit
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $StayUnit = null;
    /**
     * The StayDate
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $StayDate = null;
    /**
     * The MoreRulesPresent
     * Meta information extracted from the WSDL
     * - documentation: If true, specifies that advance purchase information will be present in fare rules.
     * - use: optional
     * @var bool|null
     */
    public ?bool $MoreRulesPresent = null;
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
     * @return \Travelport\Air\StructType\TypeRestrictionLengthOfStay
     */
    public function setLength(?int $length = null): self
    {
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
     * @param string $stayUnit
     * @return \Travelport\Air\StructType\TypeRestrictionLengthOfStay
     */
    public function setStayUnit(?string $stayUnit = null): self
    {
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
     * @return \Travelport\Air\StructType\TypeRestrictionLengthOfStay
     */
    public function setStayDate(?string $stayDate = null): self
    {
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
     * @return \Travelport\Air\StructType\TypeRestrictionLengthOfStay
     */
    public function setMoreRulesPresent(?bool $moreRulesPresent = null): self
    {
        $this->MoreRulesPresent = $moreRulesPresent;
        
        return $this;
    }
}
