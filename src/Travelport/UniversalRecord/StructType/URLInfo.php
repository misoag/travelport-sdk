<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
    public ?array $Text = null;
    /**
     * The URL
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var string[]
     */
    public ?array $URL = null;
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
     * Set Text value
     * @param string[] $text
     * @return \Travelport\UniversalRecord\StructType\URLInfo
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
     * @return \Travelport\UniversalRecord\StructType\URLInfo
     */
    public function addToText(string $item): self
    {
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
     * Set URL value
     * @param string[] $uRL
     * @return \Travelport\UniversalRecord\StructType\URLInfo
     */
    public function setURL(?array $uRL = null): self
    {
        $this->URL = $uRL;
        
        return $this;
    }
    /**
     * Add item to URL value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\UniversalRecord\StructType\URLInfo
     */
    public function addToURL(string $item): self
    {
        $this->URL[] = $item;
        
        return $this;
    }
}
