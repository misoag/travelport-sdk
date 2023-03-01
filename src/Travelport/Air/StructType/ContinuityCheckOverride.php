<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContinuityCheckOverride StructType
 * Meta information extracted from the WSDL
 * - documentation: Performs an override of continuity validation errors. | At least one character data in Next Result Reference
 * - base: xs:string
 * - minLength: 1
 * - whiteSpace: collapse
 * @subpackage Structs
 */
class ContinuityCheckOverride extends AbstractStructBase
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
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Will use key to map continuity remark to a particular segment | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $Key = null;
    /**
     * Constructor method for ContinuityCheckOverride
     * @uses ContinuityCheckOverride::set_()
     * @uses ContinuityCheckOverride::setKey()
     * @param string $_
     * @param string $key
     */
    public function __construct(?string $_ = null, ?string $key = null)
    {
        $this
            ->set_($_)
            ->setKey($key);
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
     * @return \Travelport\Air\StructType\ContinuityCheckOverride
     */
    public function set_(?string $_ = null): self
    {
        $this->_ = $_;
        
        return $this;
    }
    /**
     * Get Key value
     * @return string|null
     */
    public function getKey(): ?string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Travelport\Air\StructType\ContinuityCheckOverride
     */
    public function setKey(?string $key = null): self
    {
        $this->Key = $key;
        
        return $this;
    }
}
