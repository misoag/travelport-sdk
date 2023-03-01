<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PassengerReceiptOverride StructType
 * Meta information extracted from the WSDL
 * - documentation: It is required when a passenger receipt is required immediately ,GDS overrides the default value | At least one character data in Next Result Reference
 * - base: xs:string
 * - minLength: 1
 * - whiteSpace: collapse
 * @subpackage Structs
 */
class PassengerReceiptOverride extends AbstractStructBase
{
    /**
     * The _
     * Meta information extracted from the WSDL
     * - documentation: At least one character data in Next Result Reference
     * - base: xs:string
     * - minLength: 1
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $_ = null;
    /**
     * Constructor method for PassengerReceiptOverride
     * @uses PassengerReceiptOverride::set_()
     * @param string $_
     */
    public function __construct(?string $_ = null)
    {
        $this
            ->set_($_);
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_(): ?string
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \Travelport\UniversalRecord\StructType\PassengerReceiptOverride
     */
    public function set_(?string $_ = null): self
    {
        $this->_ = $_;
        
        return $this;
    }
}
