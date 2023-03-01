<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeRateDescription StructType
 * @subpackage Structs
 */
class TypeRateDescription extends AbstractStructBase
{
    /**
     * The Text
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxOccurs: 999
     * @var string[]
     */
    public ?array $Text = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: Optional context name of the text block being returned i.e. Room details
     * - use: optional
     * @var string|null
     */
    public ?string $Name = null;
    /**
     * Constructor method for typeRateDescription
     * @uses TypeRateDescription::setText()
     * @uses TypeRateDescription::setName()
     * @param string[] $text
     * @param string $name
     */
    public function __construct(?array $text = null, ?string $name = null)
    {
        $this
            ->setText($text)
            ->setName($name);
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
     * @return \Travelport\Hotel\StructType\TypeRateDescription
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
     * @return \Travelport\Hotel\StructType\TypeRateDescription
     */
    public function addToText(string $item): self
    {
        $this->Text[] = $item;
        
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Travelport\Hotel\StructType\TypeRateDescription
     */
    public function setName(?string $name = null): self
    {
        $this->Name = $name;
        
        return $this;
    }
}
