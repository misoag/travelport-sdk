<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for State StructType
 * Meta information extracted from the WSDL
 * - documentation: Container to house the state code for an address
 * @subpackage Structs
 */
class State extends AbstractStructBase
{
    /**
     * The _
     * @var string|null
     */
    public ?string $_ = null;
    /**
     * Constructor method for State
     * @uses State::set_()
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
     * @return \Travelport\Hotel\StructType\State
     */
    public function set_(?string $_ = null): self
    {
        $this->_ = $_;
        
        return $this;
    }
}
