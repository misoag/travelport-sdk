<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

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
    public string $Name;
    /**
     * The SubKey
     * Meta information extracted from the WSDL
     * - documentation: A further breakdown of a keyword.
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \Travelport\Hotel\StructType\TypeSubKey[]
     */
    public ?array $SubKey = null;
    /**
     * The Text
     * Meta information extracted from the WSDL
     * - documentation: Information for a keyword.
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var string[]
     */
    public ?array $Text = null;
    /**
     * The Number
     * @var string|null
     */
    public ?string $Number = null;
    /**
     * The Description
     * @var string|null
     */
    public ?string $Description = null;
    /**
     * The LanguageCode
     * Meta information extracted from the WSDL
     * - documentation: ISO 639 two-character language codes are used to retrieve specific information in the requested language. For Rich Content and Branding, language codes ZH-HANT (Chinese Traditional), ZH-HANS (Chinese Simplified), FR-CA (French
     * Canadian) and PT-BR (Portuguese Brazil) can also be used. For RCH, language codes ENGB, ENUS, DEDE, DECH can also be used. Only certain services support this attribute. Providers: ACH, RCH, 1G, 1V, 1P.
     * @var string|null
     */
    public ?string $LanguageCode = null;
    /**
     * Constructor method for typeKeyword
     * @uses TypeKeyword::setName()
     * @uses TypeKeyword::setSubKey()
     * @uses TypeKeyword::setText()
     * @uses TypeKeyword::setNumber()
     * @uses TypeKeyword::setDescription()
     * @uses TypeKeyword::setLanguageCode()
     * @param string $name
     * @param \Travelport\Hotel\StructType\TypeSubKey[] $subKey
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
     * @return \Travelport\Hotel\StructType\TypeKeyword
     */
    public function setName(string $name): self
    {
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Get SubKey value
     * @return \Travelport\Hotel\StructType\TypeSubKey[]
     */
    public function getSubKey(): ?array
    {
        return $this->SubKey;
    }
    /**
     * Set SubKey value
     * @param \Travelport\Hotel\StructType\TypeSubKey[] $subKey
     * @return \Travelport\Hotel\StructType\TypeKeyword
     */
    public function setSubKey(?array $subKey = null): self
    {
        $this->SubKey = $subKey;
        
        return $this;
    }
    /**
     * Add item to SubKey value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\TypeSubKey $item
     * @return \Travelport\Hotel\StructType\TypeKeyword
     */
    public function addToSubKey(\Travelport\Hotel\StructType\TypeSubKey $item): self
    {
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
     * Set Text value
     * @param string[] $text
     * @return \Travelport\Hotel\StructType\TypeKeyword
     */
    public function setText(?array $text = null): self
    {
        $this->Text = $text;
        
        return $this;
    }
    /**
     * Add item to Text value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\Hotel\StructType\TypeKeyword
     */
    public function addToText(string $item): self
    {
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
     * @return \Travelport\Hotel\StructType\TypeKeyword
     */
    public function setNumber(?string $number = null): self
    {
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
     * @return \Travelport\Hotel\StructType\TypeKeyword
     */
    public function setDescription(?string $description = null): self
    {
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
     * @return \Travelport\Hotel\StructType\TypeKeyword
     */
    public function setLanguageCode(?string $languageCode = null): self
    {
        $this->LanguageCode = $languageCode;
        
        return $this;
    }
}
