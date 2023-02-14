<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeKeyword StructType
 * Meta information extracted from the WSDL
 * - documentation: A complexType for keyword information.
 * @subpackage Structs
 */
class TypeKeyword extends AbstractStructBase
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 12
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
     * @var \Travelport\Util\StructType\TypeSubKey[]
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
     * The LanguageCode
     * Meta information extracted from the WSDL
     * - documentation: ISO 639 two-character language codes are used to retrieve specific information in the requested language. For Rich Content and Branding, language codes ZH-HANT (Chinese Traditional), ZH-HANS (Chinese Simplified), FR-CA (French
     * Canadian) and PT-BR (Portuguese Brazil) can also be used. For RCH, language codes ENGB, ENUS, DEDE, DECH can also be used. Only certain services support this attribute. Providers: ACH, RCH, 1G, 1V, 1P.
     * @var string|null
     */
    protected ?string $LanguageCode = null;
    /**
     * Constructor method for typeKeyword
     * @uses TypeKeyword::setName()
     * @uses TypeKeyword::setSubKey()
     * @uses TypeKeyword::setText()
     * @uses TypeKeyword::setNumber()
     * @uses TypeKeyword::setDescription()
     * @uses TypeKeyword::setLanguageCode()
     * @param string $name
     * @param \Travelport\Util\StructType\TypeSubKey[] $subKey
     * @param string[] $text
     * @param string $number
     * @param string $description
     * @param string $languageCode
     */
    public function __construct(string $name, ?array $subKey = null, ?array $text = null, ?string $number = null, ?string $description = null, ?string $languageCode = null)
    {
        $this
            ->setName($name)
            ->setSubKey($subKey)
            ->setText($text)
            ->setNumber($number)
            ->setDescription($description)
            ->setLanguageCode($languageCode);
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
     * @return \Travelport\Util\StructType\TypeKeyword
     */
    public function setName(string $name): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        // validation for constraint: maxLength(12)
        if (!is_null($name) && mb_strlen((string) $name) > 12) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 12', mb_strlen((string) $name)), __LINE__);
        }
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Get SubKey value
     * @return \Travelport\Util\StructType\TypeSubKey[]
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
        foreach ($values as $typeKeywordSubKeyItem) {
            // validation for constraint: itemType
            if (!$typeKeywordSubKeyItem instanceof \Travelport\Util\StructType\TypeSubKey) {
                $invalidValues[] = is_object($typeKeywordSubKeyItem) ? get_class($typeKeywordSubKeyItem) : sprintf('%s(%s)', gettype($typeKeywordSubKeyItem), var_export($typeKeywordSubKeyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SubKey property can only contain items of type \Travelport\Util\StructType\TypeSubKey, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SubKey value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TypeSubKey[] $subKey
     * @return \Travelport\Util\StructType\TypeKeyword
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
     * @param \Travelport\Util\StructType\TypeSubKey $item
     * @return \Travelport\Util\StructType\TypeKeyword
     */
    public function addToSubKey(\Travelport\Util\StructType\TypeSubKey $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\TypeSubKey) {
            throw new InvalidArgumentException(sprintf('The SubKey property can only contain items of type \Travelport\Util\StructType\TypeSubKey, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
        foreach ($values as $typeKeywordTextItem) {
            // validation for constraint: itemType
            if (!is_string($typeKeywordTextItem)) {
                $invalidValues[] = is_object($typeKeywordTextItem) ? get_class($typeKeywordTextItem) : sprintf('%s(%s)', gettype($typeKeywordTextItem), var_export($typeKeywordTextItem, true));
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
     * @return \Travelport\Util\StructType\TypeKeyword
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
     * @return \Travelport\Util\StructType\TypeKeyword
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
     * @return \Travelport\Util\StructType\TypeKeyword
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
     * @return \Travelport\Util\StructType\TypeKeyword
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
    /**
     * Get LanguageCode value
     * @return string|null
     */
    public function getLanguageCode(): ?string
    {
        return $this->LanguageCode;
    }
    /**
     * Set LanguageCode value
     * @param string $languageCode
     * @return \Travelport\Util\StructType\TypeKeyword
     */
    public function setLanguageCode(?string $languageCode = null): self
    {
        // validation for constraint: string
        if (!is_null($languageCode) && !is_string($languageCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($languageCode, true), gettype($languageCode)), __LINE__);
        }
        $this->LanguageCode = $languageCode;
        
        return $this;
    }
}
