<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
    public string $Name;
    /**
     * The SubKey
     * Meta information extracted from the WSDL
     * - documentation: A further breakdown of a keyword.
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\TypeOTASubKey[]
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
     * Constructor method for typeOTAKeyword
     * @uses TypeOTAKeyword::setName()
     * @uses TypeOTAKeyword::setSubKey()
     * @uses TypeOTAKeyword::setText()
     * @uses TypeOTAKeyword::setNumber()
     * @uses TypeOTAKeyword::setDescription()
     * @param string $name
     * @param \Travelport\Air\StructType\TypeOTASubKey[] $subKey
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
     * @return \Travelport\Air\StructType\TypeOTAKeyword
     */
    public function setName(string $name): self
    {
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Get SubKey value
     * @return \Travelport\Air\StructType\TypeOTASubKey[]
     */
    public function getSubKey(): ?array
    {
        return $this->SubKey;
    }
    /**
     * Set SubKey value
     * @param \Travelport\Air\StructType\TypeOTASubKey[] $subKey
     * @return \Travelport\Air\StructType\TypeOTAKeyword
     */
    public function setSubKey(?array $subKey = null): self
    {
        $this->SubKey = $subKey;
        
        return $this;
    }
    /**
     * Add item to SubKey value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\TypeOTASubKey $item
     * @return \Travelport\Air\StructType\TypeOTAKeyword
     */
    public function addToSubKey(\Travelport\Air\StructType\TypeOTASubKey $item): self
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
     * @return \Travelport\Air\StructType\TypeOTAKeyword
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
     * @return \Travelport\Air\StructType\TypeOTAKeyword
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
     * @return \Travelport\Air\StructType\TypeOTAKeyword
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
     * @return \Travelport\Air\StructType\TypeOTAKeyword
     */
    public function setDescription(?string $description = null): self
    {
        $this->Description = $description;
        
        return $this;
    }
}
