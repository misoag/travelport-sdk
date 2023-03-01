<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirPrePayReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Flight Pass Request.
 * @subpackage Structs
 */
class AirPrePayReq extends BaseReq
{
    /**
     * The ListSearch
     * Meta information extracted from the WSDL
     * - choice: ListSearch | PrePayRetrieve
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \Travelport\Air\StructType\ListSearch|null
     */
    public ?\Travelport\Air\StructType\ListSearch $ListSearch = null;
    /**
     * The PrePayRetrieve
     * Meta information extracted from the WSDL
     * - choice: ListSearch | PrePayRetrieve
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \Travelport\Air\StructType\PrePayRetrieve|null
     */
    public ?\Travelport\Air\StructType\PrePayRetrieve $PrePayRetrieve = null;
    /**
     * Constructor method for AirPrePayReq
     * @uses AirPrePayReq::setListSearch()
     * @uses AirPrePayReq::setPrePayRetrieve()
     * @param \Travelport\Air\StructType\ListSearch $listSearch
     * @param \Travelport\Air\StructType\PrePayRetrieve $prePayRetrieve
     */
    public function __construct(?\Travelport\Air\StructType\ListSearch $listSearch = null, ?\Travelport\Air\StructType\PrePayRetrieve $prePayRetrieve = null)
    {
        $this
            ->setListSearch($listSearch)
            ->setPrePayRetrieve($prePayRetrieve);
    }
    /**
     * Get ListSearch value
     * @return \Travelport\Air\StructType\ListSearch|null
     */
    public function getListSearch(): ?\Travelport\Air\StructType\ListSearch
    {
        return $this->ListSearch ?? null;
    }
    /**
     * Set ListSearch value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\Air\StructType\ListSearch $listSearch
     * @return \Travelport\Air\StructType\AirPrePayReq
     */
    public function setListSearch(?\Travelport\Air\StructType\ListSearch $listSearch = null): self
    {
        if (is_null($listSearch) || (is_array($listSearch) && empty($listSearch))) {
            unset($this->ListSearch);
        } else {
            $this->ListSearch = $listSearch;
        }
        
        return $this;
    }
    /**
     * Get PrePayRetrieve value
     * @return \Travelport\Air\StructType\PrePayRetrieve|null
     */
    public function getPrePayRetrieve(): ?\Travelport\Air\StructType\PrePayRetrieve
    {
        return $this->PrePayRetrieve ?? null;
    }
    /**
     * Set PrePayRetrieve value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\Air\StructType\PrePayRetrieve $prePayRetrieve
     * @return \Travelport\Air\StructType\AirPrePayReq
     */
    public function setPrePayRetrieve(?\Travelport\Air\StructType\PrePayRetrieve $prePayRetrieve = null): self
    {
        if (is_null($prePayRetrieve) || (is_array($prePayRetrieve) && empty($prePayRetrieve))) {
            unset($this->PrePayRetrieve);
        } else {
            $this->PrePayRetrieve = $prePayRetrieve;
        }
        
        return $this;
    }
}
