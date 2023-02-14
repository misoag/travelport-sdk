<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReferenceDataRetrieveReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Request to retrieve code, name and description for a specific reference data type.
 * @subpackage Structs
 */
class ReferenceDataRetrieveReq extends BaseReq
{
    /**
     * The TypeCode
     * Meta information extracted from the WSDL
     * - documentation: The code of the reference data type. Valid values are 'PaymentType', 'PaymentFormatType', 'MerchandisingOfferType', 'HotelTaxType',
     * 'HotelAmenities','Airport','City','Country','CityAirport','BusinessType','Currency','PosChannel','StateProvince','SupplierType','RoleCategoryType','ResourceCategoryType','PaymentType','EmailType','HotelRateCategory','FulfillmentType','HotelRoomViewTy
     * pe', 'HotelMealPlans' , 'GeoPoliticalAreaType', 'AirAndRailMiscType', 'AirAndRailSupplierType', 'HotelMiscType' , 'HotelSupplierType' , 'VehicleMiscType' , 'VehicleSupplierType' , 'AccountingReferenceType' , 'TRMLocation' , 'Title' ,
     * 'PassengerTypeCode' , 'Gender' , 'PostalAddressType' , 'AccountingRemarkType' , 'VehicleSpecialEquipment', 'ReferencePointSearch', 'RailStationLocation', 'RailAccommodation', and 'RailDiscountLoyalty'. | Reference data TypeCode type.
     * - base: xs:string
     * - maxLength: 50
     * - minLength: 1
     * - use: required
     * @var string
     */
    protected string $TypeCode;
    /**
     * The ReferenceDataSearchModifiers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: ReferenceDataSearchModifiers
     * @var \Travelport\Util\StructType\ReferenceDataSearchModifiers|null
     */
    protected ?\Travelport\Util\StructType\ReferenceDataSearchModifiers $ReferenceDataSearchModifiers = null;
    /**
     * The RequestReferenceDataItem
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: RequestReferenceDataItem
     * @var \Travelport\Util\StructType\RequestReferenceDataItem|null
     */
    protected ?\Travelport\Util\StructType\RequestReferenceDataItem $RequestReferenceDataItem = null;
    /**
     * Constructor method for ReferenceDataRetrieveReq
     * @uses ReferenceDataRetrieveReq::setTypeCode()
     * @uses ReferenceDataRetrieveReq::setReferenceDataSearchModifiers()
     * @uses ReferenceDataRetrieveReq::setRequestReferenceDataItem()
     * @param string $typeCode
     * @param \Travelport\Util\StructType\ReferenceDataSearchModifiers $referenceDataSearchModifiers
     * @param \Travelport\Util\StructType\RequestReferenceDataItem $requestReferenceDataItem
     */
    public function __construct(string $typeCode, ?\Travelport\Util\StructType\ReferenceDataSearchModifiers $referenceDataSearchModifiers = null, ?\Travelport\Util\StructType\RequestReferenceDataItem $requestReferenceDataItem = null)
    {
        $this
            ->setTypeCode($typeCode)
            ->setReferenceDataSearchModifiers($referenceDataSearchModifiers)
            ->setRequestReferenceDataItem($requestReferenceDataItem);
    }
    /**
     * Get TypeCode value
     * @return string
     */
    public function getTypeCode(): string
    {
        return $this->TypeCode;
    }
    /**
     * Set TypeCode value
     * @param string $typeCode
     * @return \Travelport\Util\StructType\ReferenceDataRetrieveReq
     */
    public function setTypeCode(string $typeCode): self
    {
        // validation for constraint: string
        if (!is_null($typeCode) && !is_string($typeCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeCode, true), gettype($typeCode)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($typeCode) && mb_strlen((string) $typeCode) > 50) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen((string) $typeCode)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($typeCode) && mb_strlen((string) $typeCode) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $typeCode)), __LINE__);
        }
        $this->TypeCode = $typeCode;
        
        return $this;
    }
    /**
     * Get ReferenceDataSearchModifiers value
     * @return \Travelport\Util\StructType\ReferenceDataSearchModifiers|null
     */
    public function getReferenceDataSearchModifiers(): ?\Travelport\Util\StructType\ReferenceDataSearchModifiers
    {
        return $this->ReferenceDataSearchModifiers;
    }
    /**
     * Set ReferenceDataSearchModifiers value
     * @param \Travelport\Util\StructType\ReferenceDataSearchModifiers $referenceDataSearchModifiers
     * @return \Travelport\Util\StructType\ReferenceDataRetrieveReq
     */
    public function setReferenceDataSearchModifiers(?\Travelport\Util\StructType\ReferenceDataSearchModifiers $referenceDataSearchModifiers = null): self
    {
        $this->ReferenceDataSearchModifiers = $referenceDataSearchModifiers;
        
        return $this;
    }
    /**
     * Get RequestReferenceDataItem value
     * @return \Travelport\Util\StructType\RequestReferenceDataItem|null
     */
    public function getRequestReferenceDataItem(): ?\Travelport\Util\StructType\RequestReferenceDataItem
    {
        return $this->RequestReferenceDataItem;
    }
    /**
     * Set RequestReferenceDataItem value
     * @param \Travelport\Util\StructType\RequestReferenceDataItem $requestReferenceDataItem
     * @return \Travelport\Util\StructType\ReferenceDataRetrieveReq
     */
    public function setRequestReferenceDataItem(?\Travelport\Util\StructType\RequestReferenceDataItem $requestReferenceDataItem = null): self
    {
        $this->RequestReferenceDataItem = $requestReferenceDataItem;
        
        return $this;
    }
}
