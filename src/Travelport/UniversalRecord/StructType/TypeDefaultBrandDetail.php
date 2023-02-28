<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeDefaultBrandDetail StructType
 * Meta information extracted from the WSDL
 * - documentation: Defines for which air segment the brand is applicable. | Images associated to the brand | Text associated to the brand
 * @subpackage Structs
 */
class TypeDefaultBrandDetail extends AbstractStructBase
{
    /**
     * The Text
     * Meta information extracted from the WSDL
     * - maxOccurs: 4
     * - minOccurs: 0
     * - ref: Text
     * @var \Travelport\UniversalRecord\StructType\TypeTextElement[]
     */
    protected ?array $Text = null;
    /**
     * The ImageLocation
     * Meta information extracted from the WSDL
     * - maxOccurs: 3
     * - minOccurs: 0
     * - ref: ImageLocation
     * @var \Travelport\UniversalRecord\StructType\ImageLocation[]
     */
    protected ?array $ImageLocation = null;
    /**
     * The ApplicableSegment
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * - ref: ApplicableSegment
     * @var \Travelport\UniversalRecord\StructType\TypeApplicableSegment[]
     */
    protected ?array $ApplicableSegment = null;
    /**
     * The BrandID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of the brand
     * - base: xs:string
     * - maxLength: 19
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $BrandID = null;
    /**
     * Constructor method for typeDefaultBrandDetail
     * @uses TypeDefaultBrandDetail::setText()
     * @uses TypeDefaultBrandDetail::setImageLocation()
     * @uses TypeDefaultBrandDetail::setApplicableSegment()
     * @uses TypeDefaultBrandDetail::setBrandID()
     * @param \Travelport\UniversalRecord\StructType\TypeTextElement[] $text
     * @param \Travelport\UniversalRecord\StructType\ImageLocation[] $imageLocation
     * @param \Travelport\UniversalRecord\StructType\TypeApplicableSegment[] $applicableSegment
     * @param string $brandID
     */
    public function __construct(?array $text = null, ?array $imageLocation = null, ?array $applicableSegment = null, ?string $brandID = null)
    {
        $this
            ->setText($text)
            ->setImageLocation($imageLocation)
            ->setApplicableSegment($applicableSegment)
            ->setBrandID($brandID);
    }
    /**
     * Get Text value
     * @return \Travelport\UniversalRecord\StructType\TypeTextElement[]
     */
    public function getText(): ?array
    {
        return $this->Text;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setText method
     * This method is willingly generated in order to preserve the one-line inline validation within the setText method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTextForArrayConstraintFromSetText(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $typeDefaultBrandDetailTextItem) {
            // validation for constraint: itemType
            if (!$typeDefaultBrandDetailTextItem instanceof \Travelport\UniversalRecord\StructType\TypeTextElement) {
                $invalidValues[] = is_object($typeDefaultBrandDetailTextItem) ? get_class($typeDefaultBrandDetailTextItem) : sprintf('%s(%s)', gettype($typeDefaultBrandDetailTextItem), var_export($typeDefaultBrandDetailTextItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Text property can only contain items of type \Travelport\UniversalRecord\StructType\TypeTextElement, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Text value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeTextElement[] $text
     * @return \Travelport\UniversalRecord\StructType\TypeDefaultBrandDetail
     */
    public function setText(?array $text = null): self
    {
        // validation for constraint: array
        if ('' !== ($textArrayErrorMessage = self::validateTextForArrayConstraintFromSetText($text))) {
            throw new InvalidArgumentException($textArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(4)
        if (is_array($text) && count($text) > 4) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 4', count($text)), __LINE__);
        }
        $this->Text = $text;
        
        return $this;
    }
    /**
     * Add item to Text value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeTextElement $item
     * @return \Travelport\UniversalRecord\StructType\TypeDefaultBrandDetail
     */
    public function addToText(\Travelport\UniversalRecord\StructType\TypeTextElement $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\TypeTextElement) {
            throw new InvalidArgumentException(sprintf('The Text property can only contain items of type \Travelport\UniversalRecord\StructType\TypeTextElement, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(4)
        if (is_array($this->Text) && count($this->Text) >= 4) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 4', count($this->Text)), __LINE__);
        }
        $this->Text[] = $item;
        
        return $this;
    }
    /**
     * Get ImageLocation value
     * @return \Travelport\UniversalRecord\StructType\ImageLocation[]
     */
    public function getImageLocation(): ?array
    {
        return $this->ImageLocation;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setImageLocation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setImageLocation method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateImageLocationForArrayConstraintFromSetImageLocation(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $typeDefaultBrandDetailImageLocationItem) {
            // validation for constraint: itemType
            if (!$typeDefaultBrandDetailImageLocationItem instanceof \Travelport\UniversalRecord\StructType\ImageLocation) {
                $invalidValues[] = is_object($typeDefaultBrandDetailImageLocationItem) ? get_class($typeDefaultBrandDetailImageLocationItem) : sprintf('%s(%s)', gettype($typeDefaultBrandDetailImageLocationItem), var_export($typeDefaultBrandDetailImageLocationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ImageLocation property can only contain items of type \Travelport\UniversalRecord\StructType\ImageLocation, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ImageLocation value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ImageLocation[] $imageLocation
     * @return \Travelport\UniversalRecord\StructType\TypeDefaultBrandDetail
     */
    public function setImageLocation(?array $imageLocation = null): self
    {
        // validation for constraint: array
        if ('' !== ($imageLocationArrayErrorMessage = self::validateImageLocationForArrayConstraintFromSetImageLocation($imageLocation))) {
            throw new InvalidArgumentException($imageLocationArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(3)
        if (is_array($imageLocation) && count($imageLocation) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 3', count($imageLocation)), __LINE__);
        }
        $this->ImageLocation = $imageLocation;
        
        return $this;
    }
    /**
     * Add item to ImageLocation value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ImageLocation $item
     * @return \Travelport\UniversalRecord\StructType\TypeDefaultBrandDetail
     */
    public function addToImageLocation(\Travelport\UniversalRecord\StructType\ImageLocation $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\ImageLocation) {
            throw new InvalidArgumentException(sprintf('The ImageLocation property can only contain items of type \Travelport\UniversalRecord\StructType\ImageLocation, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(3)
        if (is_array($this->ImageLocation) && count($this->ImageLocation) >= 3) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 3', count($this->ImageLocation)), __LINE__);
        }
        $this->ImageLocation[] = $item;
        
        return $this;
    }
    /**
     * Get ApplicableSegment value
     * @return \Travelport\UniversalRecord\StructType\TypeApplicableSegment[]
     */
    public function getApplicableSegment(): ?array
    {
        return $this->ApplicableSegment;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setApplicableSegment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setApplicableSegment method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateApplicableSegmentForArrayConstraintFromSetApplicableSegment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $typeDefaultBrandDetailApplicableSegmentItem) {
            // validation for constraint: itemType
            if (!$typeDefaultBrandDetailApplicableSegmentItem instanceof \Travelport\UniversalRecord\StructType\TypeApplicableSegment) {
                $invalidValues[] = is_object($typeDefaultBrandDetailApplicableSegmentItem) ? get_class($typeDefaultBrandDetailApplicableSegmentItem) : sprintf('%s(%s)', gettype($typeDefaultBrandDetailApplicableSegmentItem), var_export($typeDefaultBrandDetailApplicableSegmentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ApplicableSegment property can only contain items of type \Travelport\UniversalRecord\StructType\TypeApplicableSegment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ApplicableSegment value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeApplicableSegment[] $applicableSegment
     * @return \Travelport\UniversalRecord\StructType\TypeDefaultBrandDetail
     */
    public function setApplicableSegment(?array $applicableSegment = null): self
    {
        // validation for constraint: array
        if ('' !== ($applicableSegmentArrayErrorMessage = self::validateApplicableSegmentForArrayConstraintFromSetApplicableSegment($applicableSegment))) {
            throw new InvalidArgumentException($applicableSegmentArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($applicableSegment) && count($applicableSegment) > 99) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 99', count($applicableSegment)), __LINE__);
        }
        $this->ApplicableSegment = $applicableSegment;
        
        return $this;
    }
    /**
     * Add item to ApplicableSegment value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeApplicableSegment $item
     * @return \Travelport\UniversalRecord\StructType\TypeDefaultBrandDetail
     */
    public function addToApplicableSegment(\Travelport\UniversalRecord\StructType\TypeApplicableSegment $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\TypeApplicableSegment) {
            throw new InvalidArgumentException(sprintf('The ApplicableSegment property can only contain items of type \Travelport\UniversalRecord\StructType\TypeApplicableSegment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($this->ApplicableSegment) && count($this->ApplicableSegment) >= 99) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 99', count($this->ApplicableSegment)), __LINE__);
        }
        $this->ApplicableSegment[] = $item;
        
        return $this;
    }
    /**
     * Get BrandID value
     * @return string|null
     */
    public function getBrandID(): ?string
    {
        return $this->BrandID;
    }
    /**
     * Set BrandID value
     * @param string $brandID
     * @return \Travelport\UniversalRecord\StructType\TypeDefaultBrandDetail
     */
    public function setBrandID(?string $brandID = null): self
    {
        // validation for constraint: string
        if (!is_null($brandID) && !is_string($brandID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($brandID, true), gettype($brandID)), __LINE__);
        }
        // validation for constraint: maxLength(19)
        if (!is_null($brandID) && mb_strlen((string) $brandID) > 19) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 19', mb_strlen((string) $brandID)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($brandID) && mb_strlen((string) $brandID) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $brandID)), __LINE__);
        }
        $this->BrandID = $brandID;
        
        return $this;
    }
}
