<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookingRules StructType
 * Meta information extracted from the WSDL
 * - documentation: Detail about required documents for this pre pay id | Booking restrictions for associated pre pay account | Account Related Rules for pre pay profiles | Rules related to pre pay booking
 * @subpackage Structs
 */
class BookingRules extends AbstractStructBase
{
    /**
     * The BookingRulesFareReference
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: BookingRulesFareReference
     * @var \Travelport\Air\StructType\BookingRulesFareReference[]
     */
    public ?array $BookingRulesFareReference = null;
    /**
     * The RuleInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\RuleInfo[]
     */
    public ?array $RuleInfo = null;
    /**
     * The Restriction
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: Restriction
     * @var \Travelport\Air\StructType\Restriction[]
     */
    public ?array $Restriction = null;
    /**
     * The DocumentRequired
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: DocumentRequired
     * @var \Travelport\Air\StructType\DocumentRequired[]
     */
    public ?array $DocumentRequired = null;
    /**
     * The GenderDobRequired
     * Meta information extracted from the WSDL
     * - documentation: Vendor populates if gender/DOB data is required in book.
     * - use: optional
     * @var bool|null
     */
    public ?bool $GenderDobRequired = null;
    /**
     * Constructor method for BookingRules
     * @uses BookingRules::setBookingRulesFareReference()
     * @uses BookingRules::setRuleInfo()
     * @uses BookingRules::setRestriction()
     * @uses BookingRules::setDocumentRequired()
     * @uses BookingRules::setGenderDobRequired()
     * @param \Travelport\Air\StructType\BookingRulesFareReference[] $bookingRulesFareReference
     * @param \Travelport\Air\StructType\RuleInfo[] $ruleInfo
     * @param \Travelport\Air\StructType\Restriction[] $restriction
     * @param \Travelport\Air\StructType\DocumentRequired[] $documentRequired
     * @param bool $genderDobRequired
     */
    public function __construct(?array $bookingRulesFareReference = null, ?array $ruleInfo = null, ?array $restriction = null, ?array $documentRequired = null, ?bool $genderDobRequired = null)
    {
        $this
            ->setBookingRulesFareReference($bookingRulesFareReference)
            ->setRuleInfo($ruleInfo)
            ->setRestriction($restriction)
            ->setDocumentRequired($documentRequired)
            ->setGenderDobRequired($genderDobRequired);
    }
    /**
     * Get BookingRulesFareReference value
     * @return \Travelport\Air\StructType\BookingRulesFareReference[]
     */
    public function getBookingRulesFareReference(): ?array
    {
        return $this->BookingRulesFareReference;
    }
    /**
     * Set BookingRulesFareReference value
     * @param \Travelport\Air\StructType\BookingRulesFareReference[] $bookingRulesFareReference
     * @return \Travelport\Air\StructType\BookingRules
     */
    public function setBookingRulesFareReference(?array $bookingRulesFareReference = null): self
    {
        $this->BookingRulesFareReference = $bookingRulesFareReference;
        
        return $this;
    }
    /**
     * Add item to BookingRulesFareReference value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\BookingRulesFareReference $item
     * @return \Travelport\Air\StructType\BookingRules
     */
    public function addToBookingRulesFareReference(\Travelport\Air\StructType\BookingRulesFareReference $item): self
    {
        $this->BookingRulesFareReference[] = $item;
        
        return $this;
    }
    /**
     * Get RuleInfo value
     * @return \Travelport\Air\StructType\RuleInfo[]
     */
    public function getRuleInfo(): ?array
    {
        return $this->RuleInfo;
    }
    /**
     * Set RuleInfo value
     * @param \Travelport\Air\StructType\RuleInfo[] $ruleInfo
     * @return \Travelport\Air\StructType\BookingRules
     */
    public function setRuleInfo(?array $ruleInfo = null): self
    {
        $this->RuleInfo = $ruleInfo;
        
        return $this;
    }
    /**
     * Add item to RuleInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\RuleInfo $item
     * @return \Travelport\Air\StructType\BookingRules
     */
    public function addToRuleInfo(\Travelport\Air\StructType\RuleInfo $item): self
    {
        $this->RuleInfo[] = $item;
        
        return $this;
    }
    /**
     * Get Restriction value
     * @return \Travelport\Air\StructType\Restriction[]
     */
    public function getRestriction(): ?array
    {
        return $this->Restriction;
    }
    /**
     * Set Restriction value
     * @param \Travelport\Air\StructType\Restriction[] $restriction
     * @return \Travelport\Air\StructType\BookingRules
     */
    public function setRestriction(?array $restriction = null): self
    {
        $this->Restriction = $restriction;
        
        return $this;
    }
    /**
     * Add item to Restriction value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\Restriction $item
     * @return \Travelport\Air\StructType\BookingRules
     */
    public function addToRestriction(\Travelport\Air\StructType\Restriction $item): self
    {
        $this->Restriction[] = $item;
        
        return $this;
    }
    /**
     * Get DocumentRequired value
     * @return \Travelport\Air\StructType\DocumentRequired[]
     */
    public function getDocumentRequired(): ?array
    {
        return $this->DocumentRequired;
    }
    /**
     * Set DocumentRequired value
     * @param \Travelport\Air\StructType\DocumentRequired[] $documentRequired
     * @return \Travelport\Air\StructType\BookingRules
     */
    public function setDocumentRequired(?array $documentRequired = null): self
    {
        $this->DocumentRequired = $documentRequired;
        
        return $this;
    }
    /**
     * Add item to DocumentRequired value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\DocumentRequired $item
     * @return \Travelport\Air\StructType\BookingRules
     */
    public function addToDocumentRequired(\Travelport\Air\StructType\DocumentRequired $item): self
    {
        $this->DocumentRequired[] = $item;
        
        return $this;
    }
    /**
     * Get GenderDobRequired value
     * @return bool|null
     */
    public function getGenderDobRequired(): ?bool
    {
        return $this->GenderDobRequired;
    }
    /**
     * Set GenderDobRequired value
     * @param bool $genderDobRequired
     * @return \Travelport\Air\StructType\BookingRules
     */
    public function setGenderDobRequired(?bool $genderDobRequired = null): self
    {
        $this->GenderDobRequired = $genderDobRequired;
        
        return $this;
    }
}
