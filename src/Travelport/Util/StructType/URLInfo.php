<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for URLInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the text and URL of baggage as published by carrier.
 * @subpackage Structs
 */
class URLInfo extends AbstractStructBase
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
     * The URL
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $URL = null;
    /**
     * Constructor method for URLInfo
     * @uses URLInfo::setText()
     * @uses URLInfo::setURL()
     * @param string[] $text
     * @param string[] $uRL
     */
    public function __construct(?array $text = null, ?array $uRL = null)
    {
        $this
            ->setText($text)
            ->setURL($uRL);
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
        foreach ($values as $uRLInfoTextItem) {
            // validation for constraint: itemType
            if (!is_string($uRLInfoTextItem)) {
                $invalidValues[] = is_object($uRLInfoTextItem) ? get_class($uRLInfoTextItem) : sprintf('%s(%s)', gettype($uRLInfoTextItem), var_export($uRLInfoTextItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Text property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setText method
     * This method is willingly generated in order to preserve the one-line inline validation within the setText method
     * This has to validate that the items contained by the array match the length constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTextForMaxLengthConstraintFromSetText(?array $values = null): string
    {
        $message = '';
        $invalidValues = [];
        foreach (($values ?? []) as $uRLInfoTextItem) {
            // validation for constraint: maxLength(250)
            if (mb_strlen((string) $uRLInfoTextItem) > 250) {
                $invalidValues[] = var_export($uRLInfoTextItem, true);
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
     * @return \Travelport\Util\StructType\URLInfo
     */
    public function setText(?array $text = null): self
    {
        // validation for constraint: array
        if ('' !== ($textArrayErrorMessage = self::validateTextForArrayConstraintFromSetText($text))) {
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
     * @return \Travelport\Util\StructType\URLInfo
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
     * Get URL value
     * @return string[]
     */
    public function getURL(): ?array
    {
        return $this->URL;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setURL method
     * This method is willingly generated in order to preserve the one-line inline validation within the setURL method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateURLForArrayConstraintFromSetURL(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $uRLInfoURLItem) {
            // validation for constraint: itemType
            if (!is_string($uRLInfoURLItem)) {
                $invalidValues[] = is_object($uRLInfoURLItem) ? get_class($uRLInfoURLItem) : sprintf('%s(%s)', gettype($uRLInfoURLItem), var_export($uRLInfoURLItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The URL property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set URL value
     * @throws InvalidArgumentException
     * @param string[] $uRL
     * @return \Travelport\Util\StructType\URLInfo
     */
    public function setURL(?array $uRL = null): self
    {
        // validation for constraint: array
        if ('' !== ($uRLArrayErrorMessage = self::validateURLForArrayConstraintFromSetURL($uRL))) {
            throw new InvalidArgumentException($uRLArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($uRL) && count($uRL) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($uRL)), __LINE__);
        }
        $this->URL = $uRL;
        
        return $this;
    }
    /**
     * Add item to URL value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\Util\StructType\URLInfo
     */
    public function addToURL(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The URL property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->URL) && count($this->URL) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->URL)), __LINE__);
        }
        $this->URL[] = $item;
        
        return $this;
    }
}
