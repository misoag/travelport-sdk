<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CarrierCode StructType
 * Meta information extracted from the WSDL
 * - documentation: 2 Letter Carrier code
 * - base: xs:string
 * - length: 2
 * @subpackage Structs
 */
class CarrierCode extends AbstractStructBase
{
    /**
     * The _
     * Meta information extracted from the WSDL
     * - documentation: 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * @var string|null
     */
    public ?string $_ = null;
    /**
     * Constructor method for CarrierCode
     * @uses CarrierCode::set_()
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
     * @return \Travelport\Air\StructType\CarrierCode
     */
    public function set_(?string $_ = null): self
    {
        $this->_ = $_;
        
        return $this;
    }
}
