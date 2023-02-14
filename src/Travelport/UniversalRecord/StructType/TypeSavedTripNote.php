<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected string $Text;
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
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($text, true), gettype($text)), __LINE__);
        }
        // validation for constraint: maxLength(333)
        if (!is_null($text) && mb_strlen((string) $text) > 333) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 333', mb_strlen((string) $text)), __LINE__);
        }
        $this->Text = $text;
        
        return $this;
    }
}
