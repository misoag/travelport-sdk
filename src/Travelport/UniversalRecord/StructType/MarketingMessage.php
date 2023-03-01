<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
    public ?array $Text = null;
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
     * Set Text value
     * @param string[] $text
     * @return \Travelport\UniversalRecord\StructType\MarketingMessage
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
     * @return \Travelport\UniversalRecord\StructType\MarketingMessage
     */
    public function addToText(string $item): self
    {
        $this->Text[] = $item;
        
        return $this;
    }
}
