<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirPrePayRsp StructType
 * Meta information extracted from the WSDL
 * - documentation: Flight Pass Response.
 * @subpackage Structs
 */
class AirPrePayRsp extends BaseRsp
{
    /**
     * The PrePayProfileInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: PrePayProfileInfo
     * @var \Travelport\Air\StructType\PrePayProfileInfo[]
     */
    public ?array $PrePayProfileInfo = null;
    /**
     * The MaxResults
     * Meta information extracted from the WSDL
     * - documentation: Provider: ACH-Max Number of Flight Passes being returned. | Used to limit the number of results returned, particularly in more general searches that may return a large result set.
     * - base: xs:integer
     * - maxInclusive: 200
     * - minInclusive: 1
     * - use: optional
     * @var int|null
     */
    public ?int $MaxResults = null;
    /**
     * The MoreIndicator
     * Meta information extracted from the WSDL
     * - documentation: Provider: ACH-Indicates if there are more flight passes to be offered
     * - use: optional
     * @var bool|null
     */
    public ?bool $MoreIndicator = null;
    /**
     * The MoreDataStartIndex
     * Meta information extracted from the WSDL
     * - documentation: Provider: ACH-Indicates start index of the next flight Passes
     * - use: optional
     * @var string|null
     */
    public ?string $MoreDataStartIndex = null;
    /**
     * Constructor method for AirPrePayRsp
     * @uses AirPrePayRsp::setPrePayProfileInfo()
     * @uses AirPrePayRsp::setMaxResults()
     * @uses AirPrePayRsp::setMoreIndicator()
     * @uses AirPrePayRsp::setMoreDataStartIndex()
     * @param \Travelport\Air\StructType\PrePayProfileInfo[] $prePayProfileInfo
     * @param int $maxResults
     * @param bool $moreIndicator
     * @param string $moreDataStartIndex
     */
    public function __construct(?array $prePayProfileInfo = null, ?int $maxResults = null, ?bool $moreIndicator = null, ?string $moreDataStartIndex = null)
    {
        $this
            ->setPrePayProfileInfo($prePayProfileInfo)
            ->setMaxResults($maxResults)
            ->setMoreIndicator($moreIndicator)
            ->setMoreDataStartIndex($moreDataStartIndex);
    }
    /**
     * Get PrePayProfileInfo value
     * @return \Travelport\Air\StructType\PrePayProfileInfo[]
     */
    public function getPrePayProfileInfo(): ?array
    {
        return $this->PrePayProfileInfo;
    }
    /**
     * Set PrePayProfileInfo value
     * @param \Travelport\Air\StructType\PrePayProfileInfo[] $prePayProfileInfo
     * @return \Travelport\Air\StructType\AirPrePayRsp
     */
    public function setPrePayProfileInfo(?array $prePayProfileInfo = null): self
    {
        $this->PrePayProfileInfo = $prePayProfileInfo;
        
        return $this;
    }
    /**
     * Add item to PrePayProfileInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\PrePayProfileInfo $item
     * @return \Travelport\Air\StructType\AirPrePayRsp
     */
    public function addToPrePayProfileInfo(\Travelport\Air\StructType\PrePayProfileInfo $item): self
    {
        $this->PrePayProfileInfo[] = $item;
        
        return $this;
    }
    /**
     * Get MaxResults value
     * @return int|null
     */
    public function getMaxResults(): ?int
    {
        return $this->MaxResults;
    }
    /**
     * Set MaxResults value
     * @param int $maxResults
     * @return \Travelport\Air\StructType\AirPrePayRsp
     */
    public function setMaxResults(?int $maxResults = null): self
    {
        $this->MaxResults = $maxResults;
        
        return $this;
    }
    /**
     * Get MoreIndicator value
     * @return bool|null
     */
    public function getMoreIndicator(): ?bool
    {
        return $this->MoreIndicator;
    }
    /**
     * Set MoreIndicator value
     * @param bool $moreIndicator
     * @return \Travelport\Air\StructType\AirPrePayRsp
     */
    public function setMoreIndicator(?bool $moreIndicator = null): self
    {
        $this->MoreIndicator = $moreIndicator;
        
        return $this;
    }
    /**
     * Get MoreDataStartIndex value
     * @return string|null
     */
    public function getMoreDataStartIndex(): ?string
    {
        return $this->MoreDataStartIndex;
    }
    /**
     * Set MoreDataStartIndex value
     * @param string $moreDataStartIndex
     * @return \Travelport\Air\StructType\AirPrePayRsp
     */
    public function setMoreDataStartIndex(?string $moreDataStartIndex = null): self
    {
        $this->MoreDataStartIndex = $moreDataStartIndex;
        
        return $this;
    }
}
