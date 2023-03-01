<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
    public ?array $Text = null;
    /**
     * The Title
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $Title = null;
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
     * Set Text value
     * @param string[] $text
     * @return \Travelport\Air\StructType\TextInfo
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
     * @return \Travelport\Air\StructType\TextInfo
     */
    public function addToText(string $item): self
    {
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
     * @return \Travelport\Air\StructType\TextInfo
     */
    public function setTitle(?string $title = null): self
    {
        $this->Title = $title;
        
        return $this;
    }
}
