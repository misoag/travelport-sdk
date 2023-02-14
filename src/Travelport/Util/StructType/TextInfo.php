<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TextInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Information on baggage as published by carrier.
 * @subpackage Structs
 */
class TextInfo extends AbstractStructBase
{
    /**
     * The Text
     * Meta information extracted from the WSDL
     * - documentation: Common type for general textual information
     * - base: xs:string
     * - maxLength: 250
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $Text = null;
    /**
     * The Title
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $Title = null;
    /**
     * Constructor method for TextInfo
     * @uses TextInfo::setText()
     * @uses TextInfo::setTitle()
     * @param string[] $text
     * @param string $title
     */
    public function __construct(?array $text = null, ?string $title = null)
    {
        $this
            ->setText($text)
            ->setTitle($title);
    }
    /**
     * Get Text value
     * @return string[]
     */
    public function getText(): ?array
    {
        return $this->Text;
    }
    /**
     * This method is responsible for validating the values passed to the setText method
     * This method is willingly generated in order to preserve the one-line inline validation within the setText method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTextForArrayConstraintsFromSetText(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $textInfoTextItem) {
            // validation for constraint: itemType
            if (!is_string($textInfoTextItem)) {
                $invalidValues[] = is_object($textInfoTextItem) ? get_class($textInfoTextItem) : sprintf('%s(%s)', gettype($textInfoTextItem), var_export($textInfoTextItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Text property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setText method
     * This method is willingly generated in order to preserve the one-line inline validation within the setText method
     * This has to validate that the items contained by the array match the length constraint
     * @param mixed $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTextForMaxLengthConstraintFromSetText($values): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $textInfoTextItem) {
            // validation for constraint: maxLength(250)
            if (mb_strlen((string) $textInfoTextItem) > 250) {
                $invalidValues[] = var_export($textInfoTextItem, true);
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid length for value(s) %s, the number of characters/octets contained by the literal must be less than or equal to 250', implode(', ', $invalidValues));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Text value
     * @throws InvalidArgumentException
     * @param string[] $text
     * @return \Travelport\Util\StructType\TextInfo
     */
    public function setText(?array $text = null): self
    {
        // validation for constraint: array
        if ('' !== ($textArrayErrorMessage = self::validateTextForArrayConstraintsFromSetText($text))) {
            throw new InvalidArgumentException($textArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxLength(250)
        if ('' !== ($textMaxLengthErrorMessage = self::validateTextForMaxLengthConstraintFromSetText($text))) {
            throw new InvalidArgumentException($textMaxLengthErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($text) && count($text) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($text)), __LINE__);
        }
        $this->Text = $text;
        
        return $this;
    }
    /**
     * Add item to Text value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\Util\StructType\TextInfo
     */
    public function addToText(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Text property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxLength(250)
        if (mb_strlen((string) $item) > 250) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 250', mb_strlen((string) $item)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Text) && count($this->Text) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Text)), __LINE__);
        }
        $this->Text[] = $item;
        
        return $this;
    }
    /**
     * Get Title value
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->Title;
    }
    /**
     * Set Title value
     * @param string $title
     * @return \Travelport\Util\StructType\TextInfo
     */
    public function setTitle(?string $title = null): self
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($title, true), gettype($title)), __LINE__);
        }
        $this->Title = $title;
        
        return $this;
    }
}
