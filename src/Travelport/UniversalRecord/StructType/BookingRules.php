<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
     * @var \Travelport\UniversalRecord\StructType\BookingRulesFareReference[]
     */
    protected ?array $BookingRulesFareReference = null;
    /**
     * The RuleInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\RuleInfo[]
     */
    protected ?array $RuleInfo = null;
    /**
     * The Restriction
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: Restriction
     * @var \Travelport\UniversalRecord\StructType\Restriction[]
     */
    protected ?array $Restriction = null;
    /**
     * The DocumentRequired
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: DocumentRequired
     * @var \Travelport\UniversalRecord\StructType\DocumentRequired[]
     */
    protected ?array $DocumentRequired = null;
    /**
     * The GenderDobRequired
     * Meta information extracted from the WSDL
     * - documentation: Vendor populates if gender/DOB data is required in book.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $GenderDobRequired = null;
    /**
     * Constructor method for BookingRules
     * @uses BookingRules::setBookingRulesFareReference()
     * @uses BookingRules::setRuleInfo()
     * @uses BookingRules::setRestriction()
     * @uses BookingRules::setDocumentRequired()
     * @uses BookingRules::setGenderDobRequired()
     * @param \Travelport\UniversalRecord\StructType\BookingRulesFareReference[] $bookingRulesFareReference
     * @param \Travelport\UniversalRecord\StructType\RuleInfo[] $ruleInfo
     * @param \Travelport\UniversalRecord\StructType\Restriction[] $restriction
     * @param \Travelport\UniversalRecord\StructType\DocumentRequired[] $documentRequired
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
     * @return \Travelport\UniversalRecord\StructType\BookingRulesFareReference[]
     */
    public function getBookingRulesFareReference(): ?array
    {
        return $this->BookingRulesFareReference;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setBookingRulesFareReference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBookingRulesFareReference method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBookingRulesFareReferenceForArrayConstraintFromSetBookingRulesFareReference(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $bookingRulesBookingRulesFareReferenceItem) {
            // validation for constraint: itemType
            if (!$bookingRulesBookingRulesFareReferenceItem instanceof \Travelport\UniversalRecord\StructType\BookingRulesFareReference) {
                $invalidValues[] = is_object($bookingRulesBookingRulesFareReferenceItem) ? get_class($bookingRulesBookingRulesFareReferenceItem) : sprintf('%s(%s)', gettype($bookingRulesBookingRulesFareReferenceItem), var_export($bookingRulesBookingRulesFareReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BookingRulesFareReference property can only contain items of type \Travelport\UniversalRecord\StructType\BookingRulesFareReference, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BookingRulesFareReference value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\BookingRulesFareReference[] $bookingRulesFareReference
     * @return \Travelport\UniversalRecord\StructType\BookingRules
     */
    public function setBookingRulesFareReference(?array $bookingRulesFareReference = null): self
    {
        // validation for constraint: array
        if ('' !== ($bookingRulesFareReferenceArrayErrorMessage = self::validateBookingRulesFareReferenceForArrayConstraintFromSetBookingRulesFareReference($bookingRulesFareReference))) {
            throw new InvalidArgumentException($bookingRulesFareReferenceArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($bookingRulesFareReference) && count($bookingRulesFareReference) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($bookingRulesFareReference)), __LINE__);
        }
        $this->BookingRulesFareReference = $bookingRulesFareReference;
        
        return $this;
    }
    /**
     * Add item to BookingRulesFareReference value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\BookingRulesFareReference $item
     * @return \Travelport\UniversalRecord\StructType\BookingRules
     */
    public function addToBookingRulesFareReference(\Travelport\UniversalRecord\StructType\BookingRulesFareReference $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\BookingRulesFareReference) {
            throw new InvalidArgumentException(sprintf('The BookingRulesFareReference property can only contain items of type \Travelport\UniversalRecord\StructType\BookingRulesFareReference, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->BookingRulesFareReference) && count($this->BookingRulesFareReference) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->BookingRulesFareReference)), __LINE__);
        }
        $this->BookingRulesFareReference[] = $item;
        
        return $this;
    }
    /**
     * Get RuleInfo value
     * @return \Travelport\UniversalRecord\StructType\RuleInfo[]
     */
    public function getRuleInfo(): ?array
    {
        return $this->RuleInfo;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setRuleInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRuleInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRuleInfoForArrayConstraintFromSetRuleInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $bookingRulesRuleInfoItem) {
            // validation for constraint: itemType
            if (!$bookingRulesRuleInfoItem instanceof \Travelport\UniversalRecord\StructType\RuleInfo) {
                $invalidValues[] = is_object($bookingRulesRuleInfoItem) ? get_class($bookingRulesRuleInfoItem) : sprintf('%s(%s)', gettype($bookingRulesRuleInfoItem), var_export($bookingRulesRuleInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RuleInfo property can only contain items of type \Travelport\UniversalRecord\StructType\RuleInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RuleInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RuleInfo[] $ruleInfo
     * @return \Travelport\UniversalRecord\StructType\BookingRules
     */
    public function setRuleInfo(?array $ruleInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($ruleInfoArrayErrorMessage = self::validateRuleInfoForArrayConstraintFromSetRuleInfo($ruleInfo))) {
            throw new InvalidArgumentException($ruleInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($ruleInfo) && count($ruleInfo) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($ruleInfo)), __LINE__);
        }
        $this->RuleInfo = $ruleInfo;
        
        return $this;
    }
    /**
     * Add item to RuleInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RuleInfo $item
     * @return \Travelport\UniversalRecord\StructType\BookingRules
     */
    public function addToRuleInfo(\Travelport\UniversalRecord\StructType\RuleInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\RuleInfo) {
            throw new InvalidArgumentException(sprintf('The RuleInfo property can only contain items of type \Travelport\UniversalRecord\StructType\RuleInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->RuleInfo) && count($this->RuleInfo) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->RuleInfo)), __LINE__);
        }
        $this->RuleInfo[] = $item;
        
        return $this;
    }
    /**
     * Get Restriction value
     * @return \Travelport\UniversalRecord\StructType\Restriction[]
     */
    public function getRestriction(): ?array
    {
        return $this->Restriction;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setRestriction method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRestriction method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRestrictionForArrayConstraintFromSetRestriction(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $bookingRulesRestrictionItem) {
            // validation for constraint: itemType
            if (!$bookingRulesRestrictionItem instanceof \Travelport\UniversalRecord\StructType\Restriction) {
                $invalidValues[] = is_object($bookingRulesRestrictionItem) ? get_class($bookingRulesRestrictionItem) : sprintf('%s(%s)', gettype($bookingRulesRestrictionItem), var_export($bookingRulesRestrictionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Restriction property can only contain items of type \Travelport\UniversalRecord\StructType\Restriction, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Restriction value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Restriction[] $restriction
     * @return \Travelport\UniversalRecord\StructType\BookingRules
     */
    public function setRestriction(?array $restriction = null): self
    {
        // validation for constraint: array
        if ('' !== ($restrictionArrayErrorMessage = self::validateRestrictionForArrayConstraintFromSetRestriction($restriction))) {
            throw new InvalidArgumentException($restrictionArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($restriction) && count($restriction) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($restriction)), __LINE__);
        }
        $this->Restriction = $restriction;
        
        return $this;
    }
    /**
     * Add item to Restriction value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Restriction $item
     * @return \Travelport\UniversalRecord\StructType\BookingRules
     */
    public function addToRestriction(\Travelport\UniversalRecord\StructType\Restriction $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\Restriction) {
            throw new InvalidArgumentException(sprintf('The Restriction property can only contain items of type \Travelport\UniversalRecord\StructType\Restriction, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Restriction) && count($this->Restriction) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Restriction)), __LINE__);
        }
        $this->Restriction[] = $item;
        
        return $this;
    }
    /**
     * Get DocumentRequired value
     * @return \Travelport\UniversalRecord\StructType\DocumentRequired[]
     */
    public function getDocumentRequired(): ?array
    {
        return $this->DocumentRequired;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setDocumentRequired method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDocumentRequired method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDocumentRequiredForArrayConstraintFromSetDocumentRequired(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $bookingRulesDocumentRequiredItem) {
            // validation for constraint: itemType
            if (!$bookingRulesDocumentRequiredItem instanceof \Travelport\UniversalRecord\StructType\DocumentRequired) {
                $invalidValues[] = is_object($bookingRulesDocumentRequiredItem) ? get_class($bookingRulesDocumentRequiredItem) : sprintf('%s(%s)', gettype($bookingRulesDocumentRequiredItem), var_export($bookingRulesDocumentRequiredItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DocumentRequired property can only contain items of type \Travelport\UniversalRecord\StructType\DocumentRequired, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set DocumentRequired value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\DocumentRequired[] $documentRequired
     * @return \Travelport\UniversalRecord\StructType\BookingRules
     */
    public function setDocumentRequired(?array $documentRequired = null): self
    {
        // validation for constraint: array
        if ('' !== ($documentRequiredArrayErrorMessage = self::validateDocumentRequiredForArrayConstraintFromSetDocumentRequired($documentRequired))) {
            throw new InvalidArgumentException($documentRequiredArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($documentRequired) && count($documentRequired) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($documentRequired)), __LINE__);
        }
        $this->DocumentRequired = $documentRequired;
        
        return $this;
    }
    /**
     * Add item to DocumentRequired value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\DocumentRequired $item
     * @return \Travelport\UniversalRecord\StructType\BookingRules
     */
    public function addToDocumentRequired(\Travelport\UniversalRecord\StructType\DocumentRequired $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\DocumentRequired) {
            throw new InvalidArgumentException(sprintf('The DocumentRequired property can only contain items of type \Travelport\UniversalRecord\StructType\DocumentRequired, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->DocumentRequired) && count($this->DocumentRequired) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->DocumentRequired)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\BookingRules
     */
    public function setGenderDobRequired(?bool $genderDobRequired = null): self
    {
        // validation for constraint: boolean
        if (!is_null($genderDobRequired) && !is_bool($genderDobRequired)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($genderDobRequired, true), gettype($genderDobRequired)), __LINE__);
        }
        $this->GenderDobRequired = $genderDobRequired;
        
        return $this;
    }
}
