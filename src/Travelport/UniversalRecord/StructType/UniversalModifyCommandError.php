<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UniversalModifyCommandError StructType
 * Meta information extracted from the WSDL
 * - documentation: Container to return modify command failures.
 * @subpackage Structs
 */
class UniversalModifyCommandError extends AbstractStructBase
{
    /**
     * The UniversalModifyCmdKey
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $UniversalModifyCmdKey;
    /**
     * The _
     * @var string|null
     */
    public ?string $_ = null;
    /**
     * Constructor method for UniversalModifyCommandError
     * @uses UniversalModifyCommandError::setUniversalModifyCmdKey()
     * @uses UniversalModifyCommandError::set_()
     * @param string $universalModifyCmdKey
     * @param string $_
     */
    public function __construct(string $universalModifyCmdKey, ?string $_ = null)
    {
        $this
            ->setUniversalModifyCmdKey($universalModifyCmdKey)
            ->set_($_);
    }
    /**
     * Get UniversalModifyCmdKey value
     * @return string
     */
    public function getUniversalModifyCmdKey(): string
    {
        return $this->UniversalModifyCmdKey;
    }
    /**
     * Set UniversalModifyCmdKey value
     * @param string $universalModifyCmdKey
     * @return \Travelport\UniversalRecord\StructType\UniversalModifyCommandError
     */
    public function setUniversalModifyCmdKey(string $universalModifyCmdKey): self
    {
        $this->UniversalModifyCmdKey = $universalModifyCmdKey;
        
        return $this;
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
     * @return \Travelport\UniversalRecord\StructType\UniversalModifyCommandError
     */
    public function set_(?string $_ = null): self
    {
        $this->_ = $_;
        
        return $this;
    }
}
