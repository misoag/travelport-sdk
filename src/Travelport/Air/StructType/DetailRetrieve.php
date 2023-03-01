<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DetailRetrieve StructType
 * Meta information extracted from the WSDL
 * - documentation: Provider reservation locator to be specified for display operation, if mentioned along woth the EMD number then synchronization of that EMD is performed considering the same to be associated with the mentioned PNR. | Provider:
 * 1G/1V/1P-Information required for a detailed EMD retrieve
 * @subpackage Structs
 */
class DetailRetrieve extends AbstractStructBase
{
    /**
     * The ProviderReservationDetail
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:ProviderReservationDetail
     * @var \Travelport\Air\StructType\TypeProviderReservationDetail|null
     */
    public ?\Travelport\Air\StructType\TypeProviderReservationDetail $ProviderReservationDetail = null;
    /**
     * The EMDNumber
     * Meta information extracted from the WSDL
     * - documentation: EMD number to be specified for display operation. If mentioned along with provider reservation detail then synchronization of that EMD is performed considering the same to be associated with the mentioned PNR. | 13 character EMD
     * number
     * - base: xs:string
     * - length: 13
     * @var string|null
     */
    public ?string $EMDNumber = null;
    /**
     * Constructor method for DetailRetrieve
     * @uses DetailRetrieve::setProviderReservationDetail()
     * @uses DetailRetrieve::setEMDNumber()
     * @param \Travelport\Air\StructType\TypeProviderReservationDetail $providerReservationDetail
     * @param string $eMDNumber
     */
    public function __construct(?\Travelport\Air\StructType\TypeProviderReservationDetail $providerReservationDetail = null, ?string $eMDNumber = null)
    {
        $this
            ->setProviderReservationDetail($providerReservationDetail)
            ->setEMDNumber($eMDNumber);
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
     * @return \Travelport\Air\StructType\DetailRetrieve
     */
    public function setProviderReservationDetail(?\Travelport\Air\StructType\TypeProviderReservationDetail $providerReservationDetail = null): self
    {
        $this->ProviderReservationDetail = $providerReservationDetail;
        
        return $this;
    }
    /**
     * Get EMDNumber value
     * @return string|null
     */
    public function getEMDNumber(): ?string
    {
        return $this->EMDNumber;
    }
    /**
     * Set EMDNumber value
     * @param string $eMDNumber
     * @return \Travelport\Air\StructType\DetailRetrieve
     */
    public function setEMDNumber(?string $eMDNumber = null): self
    {
        $this->EMDNumber = $eMDNumber;
        
        return $this;
    }
}
