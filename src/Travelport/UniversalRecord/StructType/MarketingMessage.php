<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MarketingMessage StructType
 * Meta information extracted from the WSDL
 * - documentation: Marketing information provided by the supplier
 * @subpackage Structs
 */
class MarketingMessage extends AbstractStructBase
{
    /**
     * The Text
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $Text = null;
    /**
     * Constructor method for MarketingMessage
     * @uses MarketingMessage::setText()
     * @param string[] $text
     */
    public function __construct(?array $text = null)
    {
        $this
            ->setText($text);
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
        foreach ($values as $marketingMessageTextItem) {
            // validation for constraint: itemType
            if (!is_string($marketingMessageTextItem)) {
                $invalidValues[] = is_object($marketingMessageTextItem) ? get_class($marketingMessageTextItem) : sprintf('%s(%s)', gettype($marketingMessageTextItem), var_export($marketingMessageTextItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Text property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Text value
     * @throws InvalidArgumentException
     * @param string[] $text
     * @return \Travelport\UniversalRecord\StructType\MarketingMessage
     */
    public function setText(?array $text = null): self
    {
        // validation for constraint: array
        if ('' !== ($textArrayErrorMessage = self::validateTextForArrayConstraintsFromSetText($text))) {
            throw new InvalidArgumentException($textArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($text) && count($text) > 99) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 99', count($text)), __LINE__);
        }
        $this->Text = $text;
        
        return $this;
    }
    /**
     * Add item to Text value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\UniversalRecord\StructType\MarketingMessage
     */
    public function addToText(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Text property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($this->Text) && count($this->Text) >= 99) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 99', count($this->Text)), __LINE__);
        }
        $this->Text[] = $item;
        
        return $this;
    }
}
