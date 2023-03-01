<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelRuleItem StructType
 * Meta information extracted from the WSDL
 * - documentation: Textual information about the hotel rule
 * @subpackage Structs
 */
class HotelRuleItem extends AbstractStructBase
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public string $Name;
    /**
     * The Text
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * @var string[]
     */
    public ?array $Text = null;
    /**
     * Constructor method for HotelRuleItem
     * @uses HotelRuleItem::setName()
     * @uses HotelRuleItem::setText()
     * @param string $name
     * @param string[] $text
     */
    public function __construct(string $name, ?array $text = null)
    {
        $this
            ->setName($name)
            ->setText($text);
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
     * @return \Travelport\UniversalRecord\StructType\HotelRuleItem
     */
    public function setName(string $name): self
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
     * @return \Travelport\UniversalRecord\StructType\HotelRuleItem
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
     * @return \Travelport\UniversalRecord\StructType\HotelRuleItem
     */
    public function addToText(string $item): self
    {
        $this->Text[] = $item;
        
        return $this;
    }
}
