<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PseudoCityCode StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the PCC name which can access or modify the PNR. | The PCC of the host system. | 2 to 10 Letter Pseudo City Code
 * - base: xs:string
 * - maxLength: 10
 * - minLength: 2
 * @subpackage Structs
 */
class PseudoCityCode extends AbstractStructBase
{
    /**
     * The _
     * Meta information extracted from the WSDL
     * - documentation: 2 to 10 Letter Pseudo City Code
     * - base: xs:string
     * - maxLength: 10
     * - minLength: 2
     * @var string|null
     */
    public ?string $_ = null;
    /**
     * Constructor method for PseudoCityCode
     * @uses PseudoCityCode::set_()
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
     * @return \Travelport\UniversalRecord\StructType\PseudoCityCode
     */
    public function set_(?string $_ = null): self
    {
        $this->_ = $_;
        
        return $this;
    }
}
