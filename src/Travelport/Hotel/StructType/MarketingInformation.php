<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MarketingInformation StructType
 * Meta information extracted from the WSDL
 * - documentation: Marketing text or Notices for Suppliers
 * @subpackage Structs
 */
class MarketingInformation extends AbstractStructBase
{
    /**
     * The Text
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * @var string[]
     */
    public ?array $Text = null;
    /**
     * Constructor method for MarketingInformation
     * @uses MarketingInformation::setText()
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
     * @return \Travelport\Hotel\StructType\MarketingInformation
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
     * @return \Travelport\Hotel\StructType\MarketingInformation
     */
    public function addToText(string $item): self
    {
        $this->Text[] = $item;
        
        return $this;
    }
}
