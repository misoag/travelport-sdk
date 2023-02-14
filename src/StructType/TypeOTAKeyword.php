<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeOTAKeyword StructType
 * Meta information extracted from the WSDL
 * - documentation: A complexType for keyword information.
 * @subpackage Structs
 */
class TypeOTAKeyword extends AbstractStructBase
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 6
     * - use: required
     * @var string
     */
    protected string $Name;
    /**
     * The SubKey
     * Meta information extracted from the WSDL
     * - documentation: A further breakdown of a keyword.
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \StructType\TypeOTASubKey[]
     */
    protected ?array $SubKey = null;
    /**
     * The Text
     * Meta information extracted from the WSDL
     * - documentation: Information for a keyword.
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $Text = null;
    /**
     * The Number
     * @var string|null
     */
    protected ?string $Number = null;
    /**
     * The Description
     * @var string|null
     */
    protected ?string $Description = null;
    /**
     * Constructor method for typeOTAKeyword
     * @uses TypeOTAKeyword::setName()
     * @uses TypeOTAKeyword::setSubKey()
     * @uses TypeOTAKeyword::setText()
     * @uses TypeOTAKeyword::setNumber()
     * @uses TypeOTAKeyword::setDescription()
     * @param string $name
     * @param \StructType\TypeOTASubKey[] $subKey
     * @param string[] $text
     * @param string $number
     * @param string $description
     */
    public function __construct(string $name, ?array $subKey = null, ?array $text = null, ?string $number = null, ?string $description = null)
    {
        $this
            ->setName($name)
            ->setSubKey($subKey)
            ->setText($text)
            ->setNumber($number)
            ->setDescription($description);
    }
    /**
     * Get Name value
     * @return string
     */
    public function getName(): string
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \StructType\TypeOTAKeyword
     */
    public function setName(string $name): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        // validation for constraint: maxLength(6)
        if (!is_null($name) && mb_strlen((string) $name) > 6) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 6', mb_strlen((string) $name)), __LINE__);
        }
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Get SubKey value
     * @return \StructType\TypeOTASubKey[]
     */
    public function getSubKey(): ?array
    {
        return $this->SubKey;
    }
    /**
     * This method is responsible for validating the values passed to the setSubKey method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSubKey method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSubKeyForArrayConstraintsFromSetSubKey(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $typeOTAKeywordSubKeyItem) {
            // validation for constraint: itemType
            if (!$typeOTAKeywordSubKeyItem instanceof \StructType\TypeOTASubKey) {
                $invalidValues[] = is_object($typeOTAKeywordSubKeyItem) ? get_class($typeOTAKeywordSubKeyItem) : sprintf('%s(%s)', gettype($typeOTAKeywordSubKeyItem), var_export($typeOTAKeywordSubKeyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SubKey property can only contain items of type \StructType\TypeOTASubKey, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SubKey value
     * @throws InvalidArgumentException
     * @param \StructType\TypeOTASubKey[] $subKey
     * @return \StructType\TypeOTAKeyword
     */
    public function setSubKey(?array $subKey = null): self
    {
        // validation for constraint: array
        if ('' !== ($subKeyArrayErrorMessage = self::validateSubKeyForArrayConstraintsFromSetSubKey($subKey))) {
            throw new InvalidArgumentException($subKeyArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($subKey) && count($subKey) > 99) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 99', count($subKey)), __LINE__);
        }
        $this->SubKey = $subKey;
        
        return $this;
    }
    /**
     * Add item to SubKey value
     * @throws InvalidArgumentException
     * @param \StructType\TypeOTASubKey $item
     * @return \StructType\TypeOTAKeyword
     */
    public function addToSubKey(\StructType\TypeOTASubKey $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\TypeOTASubKey) {
            throw new InvalidArgumentException(sprintf('The SubKey property can only contain items of type \StructType\TypeOTASubKey, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($this->SubKey) && count($this->SubKey) >= 99) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 99', count($this->SubKey)), __LINE__);
        }
        $this->SubKey[] = $item;
        
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
        foreach ($values as $typeOTAKeywordTextItem) {
            // validation for constraint: itemType
            if (!is_string($typeOTAKeywordTextItem)) {
                $invalidValues[] = is_object($typeOTAKeywordTextItem) ? get_class($typeOTAKeywordTextItem) : sprintf('%s(%s)', gettype($typeOTAKeywordTextItem), var_export($typeOTAKeywordTextItem, true));
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
     * @return \StructType\TypeOTAKeyword
     */
    public function setText(?array $text = null): self
    {
        // validation for constraint: array
        if ('' !== ($textArrayErrorMessage = self::validateTextForArrayConstraintsFromSetText($text))) {
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
     * @return \StructType\TypeOTAKeyword
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
     * Get Number value
     * @return string|null
     */
    public function getNumber(): ?string
    {
        return $this->Number;
    }
    /**
     * Set Number value
     * @param string $number
     * @return \StructType\TypeOTAKeyword
     */
    public function setNumber(?string $number = null): self
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($number, true), gettype($number)), __LINE__);
        }
        $this->Number = $number;
        
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
     * @return \StructType\TypeOTAKeyword
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
