<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FeeApplication StructType
 * Meta information extracted from the WSDL
 * - documentation: Describes how the fees are to be applied. | The type of FeeApplication
 * - base: xs:string
 * @subpackage Structs
 */
class FeeApplication extends AbstractStructBase
{
    /**
     * The _
     * Meta information extracted from the WSDL
     * - documentation: The type of FeeApplication
     * - base: xs:string
     * @var string|null
     */
    public ?string $_ = null;
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - length: 1
     * - use: optional
     * @var string|null
     */
    public ?string $Code = null;
    /**
     * Constructor method for FeeApplication
     * @uses FeeApplication::set_()
     * @uses FeeApplication::setCode()
     * @param string $_
     * @param string $code
     */
    public function __construct(?string $_ = null, ?string $code = null)
    {
        $this
            ->set_($_)
            ->setCode($code);
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
     * @return \Travelport\UniversalRecord\StructType\FeeApplication
     */
    public function set_(?string $_ = null): self
    {
        $this->_ = $_;
        
        return $this;
    }
    /**
     * Get Code value
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Travelport\UniversalRecord\StructType\FeeApplication
     */
    public function setCode(?string $code = null): self
    {
        $this->Code = $code;
        
        return $this;
    }
}
