<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListRetrieve StructType
 * Meta information extracted from the WSDL
 * - documentation: Provider reservation details to be provided to fetch list of EMDs associated with it. | Provider: 1G/1V/1P-Information required for retrieval of list of EMDs
 * @subpackage Structs
 */
class ListRetrieve extends AbstractStructBase
{
    /**
     * The ProviderReservationDetail
     * Meta information extracted from the WSDL
     * - ref: common:ProviderReservationDetail
     * @var \Travelport\Air\StructType\TypeProviderReservationDetail|null
     */
    public ?\Travelport\Air\StructType\TypeProviderReservationDetail $ProviderReservationDetail = null;
    /**
     * Constructor method for ListRetrieve
     * @uses ListRetrieve::setProviderReservationDetail()
     * @param \Travelport\Air\StructType\TypeProviderReservationDetail $providerReservationDetail
     */
    public function __construct(?\Travelport\Air\StructType\TypeProviderReservationDetail $providerReservationDetail = null)
    {
        $this
            ->setProviderReservationDetail($providerReservationDetail);
    }
    /**
     * Get ProviderReservationDetail value
     * @return \Travelport\Air\StructType\TypeProviderReservationDetail|null
     */
    public function getProviderReservationDetail(): ?\Travelport\Air\StructType\TypeProviderReservationDetail
    {
        return $this->ProviderReservationDetail;
    }
    /**
     * Set ProviderReservationDetail value
     * @param \Travelport\Air\StructType\TypeProviderReservationDetail $providerReservationDetail
     * @return \Travelport\Air\StructType\ListRetrieve
     */
    public function setProviderReservationDetail(?\Travelport\Air\StructType\TypeProviderReservationDetail $providerReservationDetail = null): self
    {
        $this->ProviderReservationDetail = $providerReservationDetail;
        
        return $this;
    }
}
