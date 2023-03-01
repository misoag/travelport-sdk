<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeSavedTripNote StructType
 * @subpackage Structs
 */
class TypeSavedTripNote extends AbstractStructBase
{
    /**
     * The Text
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 333
     * - use: required
     * @var string
     */
    public string $Text;
    /**
     * Constructor method for typeSavedTripNote
     * @uses TypeSavedTripNote::setText()
     * @param string $text
     */
    public function __construct(string $text)
    {
        $this
            ->setText($text);
    }
    /**
     * Get Text value
     * @return string
     */
    public function getText(): string
    {
        return $this->Text;
    }
    /**
     * Set Text value
     * @param string $text
     * @return \Travelport\UniversalRecord\StructType\TypeSavedTripNote
     */
    public function setText(string $text): self
    {
        $this->Text = $text;
        
        return $this;
    }
}
