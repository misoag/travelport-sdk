<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DirectPayment StructType
 * Meta information extracted from the WSDL
 * - documentation: Direct Payment Form of Payments
 * @subpackage Structs
 */
class DirectPayment extends AbstractStructBase
{
    /**
     * The Text
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $Text = null;
    /**
     * Constructor method for DirectPayment
     * @uses DirectPayment::setText()
     * @param string $text
     */
    public function __construct(?string $text = null)
    {
        $this
            ->setText($text);
    }
    /**
     * Get Text value
     * @return string|null
     */
    public function getText(): ?string
    {
        return $this->Text;
    }
    /**
     * Set Text value
     * @param string $text
     * @return \Travelport\UniversalRecord\StructType\DirectPayment
     */
    public function setText(?string $text = null): self
    {
        $this->Text = $text;
        
        return $this;
    }
}
