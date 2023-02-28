<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeOTASubKey StructType
 * Meta information extracted from the WSDL
 * - documentation: The attributes and elements in a SubKey.
 * @subpackage Structs
 */
class TypeOTASubKey extends AbstractStructBase
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: A subkey to identify the special equipment codes. Applicable when Policy/@Name is EQUIP. Uses OTA CODE "EQP". 1P. | Refers to Open Travel Code
     * - base: xs:positiveInteger
     * - use: required
     * @var int
     */
    protected int $Name;
    /**
     * The Text
     * Meta information extracted from the WSDL
     * - documentation: Information for a sub key.
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $Text = null;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: A brief description of a subkey.
     * @var string|null
     */
    protected ?string $Description = null;
    /**
     * Constructor method for typeOTASubKey
     * @uses TypeOTASubKey::setName()
     * @uses TypeOTASubKey::setText()
     * @uses TypeOTASubKey::setDescription()
     * @param int $name
     * @param string[] $text
     * @param string $description
     */
    public function __construct(int $name, ?array $text = null, ?string $description = null)
    {
        $this
            ->setName($name)
            ->setText($text)
            ->setDescription($description);
    }
    /**
     * Get Name value
     * @return int
     */
    public function getName(): int
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param int $name
     * @return \Travelport\Util\StructType\TypeOTASubKey
     */
    public function setName(int $name): self
    {
        // validation for constraint: int
        if (!is_null($name) && !(is_int($name) || ctype_digit($name))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        
        return $this;
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
        foreach ($values as $typeOTASubKeyTextItem) {
            // validation for constraint: itemType
            if (!is_string($typeOTASubKeyTextItem)) {
                $invalidValues[] = is_object($typeOTASubKeyTextItem) ? get_class($typeOTASubKeyTextItem) : sprintf('%s(%s)', gettype($typeOTASubKeyTextItem), var_export($typeOTASubKeyTextItem, true));
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
     * @return \Travelport\Util\StructType\TypeOTASubKey
     */
    public function setText(?array $text = null): self
    {
        // validation for constraint: array
        if ('' !== ($textArrayErrorMessage = self::validateTextForArrayConstraintFromSetText($text))) {
            throw new InvalidArgumentException($textArrayErrorMessage, __LINE__);
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
     * @return \Travelport\Util\StructType\TypeOTASubKey
     */
    public function addToText(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Text property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Text) && count($this->Text) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Text)), __LINE__);
        }
        $this->Text[] = $item;
        
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Travelport\Util\StructType\TypeOTASubKey
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->Description = $description;
        
        return $this;
    }
}
