<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
    public int $Name;
    /**
     * The Text
     * Meta information extracted from the WSDL
     * - documentation: Information for a sub key.
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var string[]
     */
    public ?array $Text = null;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: A brief description of a subkey.
     * @var string|null
     */
    public ?string $Description = null;
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
     * @return \Travelport\Air\StructType\TypeOTASubKey
     */
    public function setName(int $name): self
    {
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
     * Set Text value
     * @param string[] $text
     * @return \Travelport\Air\StructType\TypeOTASubKey
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
     * @return \Travelport\Air\StructType\TypeOTASubKey
     */
    public function addToText(string $item): self
    {
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
     * @return \Travelport\Air\StructType\TypeOTASubKey
     */
    public function setDescription(?string $description = null): self
    {
        $this->Description = $description;
        
        return $this;
    }
}
