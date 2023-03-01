<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
    public ?bool $FastResult = null;
    /**
     * The MoreToken
     * Meta information extracted from the WSDL
     * - documentation: Token is returned for use in subsequent request to retrieve complete results.
     * @var string|null
     */
    public ?string $MoreToken = null;
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
     * @return \Travelport\UniversalRecord\StructType\QuickResponse
     */
    public function setFastResult(?bool $fastResult = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\QuickResponse
     */
    public function setMoreToken(?string $moreToken = null): self
    {
        $this->MoreToken = $moreToken;
        
        return $this;
    }
}
