<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CorporateDiscountID StructType
 * Meta information extracted from the WSDL
 * - documentation: These are zero or more negotiated rate codes
 * @subpackage Structs
 */
class CorporateDiscountID extends AbstractStructBase
{
    /**
     * The _
     * @var string|null
     */
    protected ?string $_ = null;
    /**
     * The NegotiatedRateCode
     * Meta information extracted from the WSDL
     * - documentation: When set to true, the data in the CorporateDiscountID is a negotiated rate code. Otherwise, this data is a Corporate Discount ID rate.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $NegotiatedRateCode = null;
    /**
     * Constructor method for CorporateDiscountID
     * @uses CorporateDiscountID::set_()
     * @uses CorporateDiscountID::setNegotiatedRateCode()
     * @param string $_
     * @param bool $negotiatedRateCode
     */
    public function __construct(?string $_ = null, ?bool $negotiatedRateCode = null)
    {
        $this
            ->set_($_)
            ->setNegotiatedRateCode($negotiatedRateCode);
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
     * @return \StructType\CorporateDiscountID
     */
    public function set_(?string $_ = null): self
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($_, true), gettype($_)), __LINE__);
        }
        $this->_ = $_;
        
        return $this;
    }
    /**
     * Get NegotiatedRateCode value
     * @return bool|null
     */
    public function getNegotiatedRateCode(): ?bool
    {
        return $this->NegotiatedRateCode;
    }
    /**
     * Set NegotiatedRateCode value
     * @param bool $negotiatedRateCode
     * @return \StructType\CorporateDiscountID
     */
    public function setNegotiatedRateCode(?bool $negotiatedRateCode = null): self
    {
        // validation for constraint: boolean
        if (!is_null($negotiatedRateCode) && !is_bool($negotiatedRateCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($negotiatedRateCode, true), gettype($negotiatedRateCode)), __LINE__);
        }
        $this->NegotiatedRateCode = $negotiatedRateCode;
        
        return $this;
    }
}
