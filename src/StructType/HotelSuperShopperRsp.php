<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelSuperShopperRsp StructType
 * @subpackage Structs
 */
class HotelSuperShopperRsp extends BaseSearchRsp
{
    /**
     * The VendorLocation
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:VendorLocation
     * @var \StructType\VendorLocation[]
     */
    protected ?array $VendorLocation = null;
    /**
     * The CurrencyRateConversion
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: CurrencyRateConversion
     * @var \StructType\CurrencyRateConversion[]
     */
    protected ?array $CurrencyRateConversion = null;
    /**
     * The HotelSuperShopperResults
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: HotelSuperShopperResults
     * @var \StructType\HotelSuperShopperResults[]
     */
    protected ?array $HotelSuperShopperResults = null;
    /**
     * The QuickResponse
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: QuickResponse
     * @var \StructType\QuickResponse|null
     */
    protected ?\StructType\QuickResponse $QuickResponse = null;
    /**
     * Constructor method for HotelSuperShopperRsp
     * @uses HotelSuperShopperRsp::setVendorLocation()
     * @uses HotelSuperShopperRsp::setCurrencyRateConversion()
     * @uses HotelSuperShopperRsp::setHotelSuperShopperResults()
     * @uses HotelSuperShopperRsp::setQuickResponse()
     * @param \StructType\VendorLocation[] $vendorLocation
     * @param \StructType\CurrencyRateConversion[] $currencyRateConversion
     * @param \StructType\HotelSuperShopperResults[] $hotelSuperShopperResults
     * @param \StructType\QuickResponse $quickResponse
     */
    public function __construct(?array $vendorLocation = null, ?array $currencyRateConversion = null, ?array $hotelSuperShopperResults = null, ?\StructType\QuickResponse $quickResponse = null)
    {
        $this
            ->setVendorLocation($vendorLocation)
            ->setCurrencyRateConversion($currencyRateConversion)
            ->setHotelSuperShopperResults($hotelSuperShopperResults)
            ->setQuickResponse($quickResponse);
    }
    /**
     * Get VendorLocation value
     * @return \StructType\VendorLocation[]
     */
    public function getVendorLocation(): ?array
    {
        return $this->VendorLocation;
    }
    /**
     * This method is responsible for validating the values passed to the setVendorLocation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVendorLocation method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVendorLocationForArrayConstraintsFromSetVendorLocation(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $hotelSuperShopperRspVendorLocationItem) {
            // validation for constraint: itemType
            if (!$hotelSuperShopperRspVendorLocationItem instanceof \StructType\VendorLocation) {
                $invalidValues[] = is_object($hotelSuperShopperRspVendorLocationItem) ? get_class($hotelSuperShopperRspVendorLocationItem) : sprintf('%s(%s)', gettype($hotelSuperShopperRspVendorLocationItem), var_export($hotelSuperShopperRspVendorLocationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The VendorLocation property can only contain items of type \StructType\VendorLocation, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set VendorLocation value
     * @throws InvalidArgumentException
     * @param \StructType\VendorLocation[] $vendorLocation
     * @return \StructType\HotelSuperShopperRsp
     */
    public function setVendorLocation(?array $vendorLocation = null): self
    {
        // validation for constraint: array
        if ('' !== ($vendorLocationArrayErrorMessage = self::validateVendorLocationForArrayConstraintsFromSetVendorLocation($vendorLocation))) {
            throw new InvalidArgumentException($vendorLocationArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($vendorLocation) && count($vendorLocation) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($vendorLocation)), __LINE__);
        }
        $this->VendorLocation = $vendorLocation;
        
        return $this;
    }
    /**
     * Add item to VendorLocation value
     * @throws InvalidArgumentException
     * @param \StructType\VendorLocation $item
     * @return \StructType\HotelSuperShopperRsp
     */
    public function addToVendorLocation(\StructType\VendorLocation $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\VendorLocation) {
            throw new InvalidArgumentException(sprintf('The VendorLocation property can only contain items of type \StructType\VendorLocation, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->VendorLocation) && count($this->VendorLocation) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->VendorLocation)), __LINE__);
        }
        $this->VendorLocation[] = $item;
        
        return $this;
    }
    /**
     * Get CurrencyRateConversion value
     * @return \StructType\CurrencyRateConversion[]
     */
    public function getCurrencyRateConversion(): ?array
    {
        return $this->CurrencyRateConversion;
    }
    /**
     * This method is responsible for validating the values passed to the setCurrencyRateConversion method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCurrencyRateConversion method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCurrencyRateConversionForArrayConstraintsFromSetCurrencyRateConversion(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $hotelSuperShopperRspCurrencyRateConversionItem) {
            // validation for constraint: itemType
            if (!$hotelSuperShopperRspCurrencyRateConversionItem instanceof \StructType\CurrencyRateConversion) {
                $invalidValues[] = is_object($hotelSuperShopperRspCurrencyRateConversionItem) ? get_class($hotelSuperShopperRspCurrencyRateConversionItem) : sprintf('%s(%s)', gettype($hotelSuperShopperRspCurrencyRateConversionItem), var_export($hotelSuperShopperRspCurrencyRateConversionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CurrencyRateConversion property can only contain items of type \StructType\CurrencyRateConversion, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CurrencyRateConversion value
     * @throws InvalidArgumentException
     * @param \StructType\CurrencyRateConversion[] $currencyRateConversion
     * @return \StructType\HotelSuperShopperRsp
     */
    public function setCurrencyRateConversion(?array $currencyRateConversion = null): self
    {
        // validation for constraint: array
        if ('' !== ($currencyRateConversionArrayErrorMessage = self::validateCurrencyRateConversionForArrayConstraintsFromSetCurrencyRateConversion($currencyRateConversion))) {
            throw new InvalidArgumentException($currencyRateConversionArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($currencyRateConversion) && count($currencyRateConversion) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($currencyRateConversion)), __LINE__);
        }
        $this->CurrencyRateConversion = $currencyRateConversion;
        
        return $this;
    }
    /**
     * Add item to CurrencyRateConversion value
     * @throws InvalidArgumentException
     * @param \StructType\CurrencyRateConversion $item
     * @return \StructType\HotelSuperShopperRsp
     */
    public function addToCurrencyRateConversion(\StructType\CurrencyRateConversion $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\CurrencyRateConversion) {
            throw new InvalidArgumentException(sprintf('The CurrencyRateConversion property can only contain items of type \StructType\CurrencyRateConversion, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->CurrencyRateConversion) && count($this->CurrencyRateConversion) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->CurrencyRateConversion)), __LINE__);
        }
        $this->CurrencyRateConversion[] = $item;
        
        return $this;
    }
    /**
     * Get HotelSuperShopperResults value
     * @return \StructType\HotelSuperShopperResults[]
     */
    public function getHotelSuperShopperResults(): ?array
    {
        return $this->HotelSuperShopperResults;
    }
    /**
     * This method is responsible for validating the values passed to the setHotelSuperShopperResults method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHotelSuperShopperResults method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHotelSuperShopperResultsForArrayConstraintsFromSetHotelSuperShopperResults(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $hotelSuperShopperRspHotelSuperShopperResultsItem) {
            // validation for constraint: itemType
            if (!$hotelSuperShopperRspHotelSuperShopperResultsItem instanceof \StructType\HotelSuperShopperResults) {
                $invalidValues[] = is_object($hotelSuperShopperRspHotelSuperShopperResultsItem) ? get_class($hotelSuperShopperRspHotelSuperShopperResultsItem) : sprintf('%s(%s)', gettype($hotelSuperShopperRspHotelSuperShopperResultsItem), var_export($hotelSuperShopperRspHotelSuperShopperResultsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The HotelSuperShopperResults property can only contain items of type \StructType\HotelSuperShopperResults, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set HotelSuperShopperResults value
     * @throws InvalidArgumentException
     * @param \StructType\HotelSuperShopperResults[] $hotelSuperShopperResults
     * @return \StructType\HotelSuperShopperRsp
     */
    public function setHotelSuperShopperResults(?array $hotelSuperShopperResults = null): self
    {
        // validation for constraint: array
        if ('' !== ($hotelSuperShopperResultsArrayErrorMessage = self::validateHotelSuperShopperResultsForArrayConstraintsFromSetHotelSuperShopperResults($hotelSuperShopperResults))) {
            throw new InvalidArgumentException($hotelSuperShopperResultsArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($hotelSuperShopperResults) && count($hotelSuperShopperResults) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($hotelSuperShopperResults)), __LINE__);
        }
        $this->HotelSuperShopperResults = $hotelSuperShopperResults;
        
        return $this;
    }
    /**
     * Add item to HotelSuperShopperResults value
     * @throws InvalidArgumentException
     * @param \StructType\HotelSuperShopperResults $item
     * @return \StructType\HotelSuperShopperRsp
     */
    public function addToHotelSuperShopperResults(\StructType\HotelSuperShopperResults $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\HotelSuperShopperResults) {
            throw new InvalidArgumentException(sprintf('The HotelSuperShopperResults property can only contain items of type \StructType\HotelSuperShopperResults, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->HotelSuperShopperResults) && count($this->HotelSuperShopperResults) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->HotelSuperShopperResults)), __LINE__);
        }
        $this->HotelSuperShopperResults[] = $item;
        
        return $this;
    }
    /**
     * Get QuickResponse value
     * @return \StructType\QuickResponse|null
     */
    public function getQuickResponse(): ?\StructType\QuickResponse
    {
        return $this->QuickResponse;
    }
    /**
     * Set QuickResponse value
     * @param \StructType\QuickResponse $quickResponse
     * @return \StructType\HotelSuperShopperRsp
     */
    public function setQuickResponse(?\StructType\QuickResponse $quickResponse = null): self
    {
        $this->QuickResponse = $quickResponse;
        
        return $this;
    }
}
