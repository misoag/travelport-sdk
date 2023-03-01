<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EMDRetrieveReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Electronic Miscellaneous Document retrieve request.Supported providers are 1G/1V/1P
 * @subpackage Structs
 */
class EMDRetrieveReq extends BaseReq
{
    /**
     * The ListRetrieve
     * Meta information extracted from the WSDL
     * - choice: ListRetrieve | DetailRetrieve
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \Travelport\Air\StructType\ListRetrieve|null
     */
    public ?\Travelport\Air\StructType\ListRetrieve $ListRetrieve = null;
    /**
     * The DetailRetrieve
     * Meta information extracted from the WSDL
     * - choice: ListRetrieve | DetailRetrieve
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \Travelport\Air\StructType\DetailRetrieve|null
     */
    public ?\Travelport\Air\StructType\DetailRetrieve $DetailRetrieve = null;
    /**
     * Constructor method for EMDRetrieveReq
     * @uses EMDRetrieveReq::setListRetrieve()
     * @uses EMDRetrieveReq::setDetailRetrieve()
     * @param \Travelport\Air\StructType\ListRetrieve $listRetrieve
     * @param \Travelport\Air\StructType\DetailRetrieve $detailRetrieve
     */
    public function __construct(?\Travelport\Air\StructType\ListRetrieve $listRetrieve = null, ?\Travelport\Air\StructType\DetailRetrieve $detailRetrieve = null)
    {
        $this
            ->setListRetrieve($listRetrieve)
            ->setDetailRetrieve($detailRetrieve);
    }
    /**
     * Get ListRetrieve value
     * @return \Travelport\Air\StructType\ListRetrieve|null
     */
    public function getListRetrieve(): ?\Travelport\Air\StructType\ListRetrieve
    {
        return $this->ListRetrieve ?? null;
    }
    /**
     * Set ListRetrieve value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\Air\StructType\ListRetrieve $listRetrieve
     * @return \Travelport\Air\StructType\EMDRetrieveReq
     */
    public function setListRetrieve(?\Travelport\Air\StructType\ListRetrieve $listRetrieve = null): self
    {
        if (is_null($listRetrieve) || (is_array($listRetrieve) && empty($listRetrieve))) {
            unset($this->ListRetrieve);
        } else {
            $this->ListRetrieve = $listRetrieve;
        }
        
        return $this;
    }
    /**
     * Get DetailRetrieve value
     * @return \Travelport\Air\StructType\DetailRetrieve|null
     */
    public function getDetailRetrieve(): ?\Travelport\Air\StructType\DetailRetrieve
    {
        return $this->DetailRetrieve ?? null;
    }
    /**
     * Set DetailRetrieve value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\Air\StructType\DetailRetrieve $detailRetrieve
     * @return \Travelport\Air\StructType\EMDRetrieveReq
     */
    public function setDetailRetrieve(?\Travelport\Air\StructType\DetailRetrieve $detailRetrieve = null): self
    {
        if (is_null($detailRetrieve) || (is_array($detailRetrieve) && empty($detailRetrieve))) {
            unset($this->DetailRetrieve);
        } else {
            $this->DetailRetrieve = $detailRetrieve;
        }
        
        return $this;
    }
}
