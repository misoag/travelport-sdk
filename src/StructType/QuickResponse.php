<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for QuickResponse StructType
 * @subpackage Structs
 */
class QuickResponse extends AbstractStructBase
{
    /**
     * The FastResult
     * Meta information extracted from the WSDL
     * - documentation: Set to true on initial request to have results returned immediately and may contain fewer hotels. Default is false.
     * @var bool|null
     */
    protected ?bool $FastResult = null;
    /**
     * The MoreToken
     * Meta information extracted from the WSDL
     * - documentation: Token is returned for use in subsequent request to retrieve complete results.
     * @var string|null
     */
    protected ?string $MoreToken = null;
    /**
     * Constructor method for QuickResponse
     * @uses QuickResponse::setFastResult()
     * @uses QuickResponse::setMoreToken()
     * @param bool $fastResult
     * @param string $moreToken
     */
    public function __construct(?bool $fastResult = null, ?string $moreToken = null)
    {
        $this
            ->setFastResult($fastResult)
            ->setMoreToken($moreToken);
    }
    /**
     * Get FastResult value
     * @return bool|null
     */
    public function getFastResult(): ?bool
    {
        return $this->FastResult;
    }
    /**
     * Set FastResult value
     * @param bool $fastResult
     * @return \StructType\QuickResponse
     */
    public function setFastResult(?bool $fastResult = null): self
    {
        // validation for constraint: boolean
        if (!is_null($fastResult) && !is_bool($fastResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($fastResult, true), gettype($fastResult)), __LINE__);
        }
        $this->FastResult = $fastResult;
        
        return $this;
    }
    /**
     * Get MoreToken value
     * @return string|null
     */
    public function getMoreToken(): ?string
    {
        return $this->MoreToken;
    }
    /**
     * Set MoreToken value
     * @param string $moreToken
     * @return \StructType\QuickResponse
     */
    public function setMoreToken(?string $moreToken = null): self
    {
        // validation for constraint: string
        if (!is_null($moreToken) && !is_string($moreToken)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($moreToken, true), gettype($moreToken)), __LINE__);
        }
        $this->MoreToken = $moreToken;
        
        return $this;
    }
}
