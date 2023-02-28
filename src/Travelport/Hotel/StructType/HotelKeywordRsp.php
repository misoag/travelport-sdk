<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelKeywordRsp StructType
 * Meta information extracted from the WSDL
 * - documentation: Response showing keyword details of a given hotel chain or property
 * @subpackage Structs
 */
class HotelKeywordRsp extends BaseRsp
{
    /**
     * The MarketingInformation
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: common:MarketingInformation
     * @var \Travelport\Hotel\StructType\MarketingInformation|null
     */
    protected ?\Travelport\Hotel\StructType\MarketingInformation $MarketingInformation = null;
    /**
     * The Keyword
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:Keyword
     * @var \Travelport\Hotel\StructType\Keyword[]
     */
    protected ?array $Keyword = null;
    /**
     * Constructor method for HotelKeywordRsp
     * @uses HotelKeywordRsp::setMarketingInformation()
     * @uses HotelKeywordRsp::setKeyword()
     * @param \Travelport\Hotel\StructType\MarketingInformation $marketingInformation
     * @param \Travelport\Hotel\StructType\Keyword[] $keyword
     */
    public function __construct(?\Travelport\Hotel\StructType\MarketingInformation $marketingInformation = null, ?array $keyword = null)
    {
        $this
            ->setMarketingInformation($marketingInformation)
            ->setKeyword($keyword);
    }
    /**
     * Get MarketingInformation value
     * @return \Travelport\Hotel\StructType\MarketingInformation|null
     */
    public function getMarketingInformation(): ?\Travelport\Hotel\StructType\MarketingInformation
    {
        return $this->MarketingInformation;
    }
    /**
     * Set MarketingInformation value
     * @param \Travelport\Hotel\StructType\MarketingInformation $marketingInformation
     * @return \Travelport\Hotel\StructType\HotelKeywordRsp
     */
    public function setMarketingInformation(?\Travelport\Hotel\StructType\MarketingInformation $marketingInformation = null): self
    {
        $this->MarketingInformation = $marketingInformation;
        
        return $this;
    }
    /**
     * Get Keyword value
     * @return \Travelport\Hotel\StructType\Keyword[]
     */
    public function getKeyword(): ?array
    {
        return $this->Keyword;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setKeyword method
     * This method is willingly generated in order to preserve the one-line inline validation within the setKeyword method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateKeywordForArrayConstraintFromSetKeyword(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $hotelKeywordRspKeywordItem) {
            // validation for constraint: itemType
            if (!$hotelKeywordRspKeywordItem instanceof \Travelport\Hotel\StructType\Keyword) {
                $invalidValues[] = is_object($hotelKeywordRspKeywordItem) ? get_class($hotelKeywordRspKeywordItem) : sprintf('%s(%s)', gettype($hotelKeywordRspKeywordItem), var_export($hotelKeywordRspKeywordItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Keyword property can only contain items of type \Travelport\Hotel\StructType\Keyword, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Keyword value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\Keyword[] $keyword
     * @return \Travelport\Hotel\StructType\HotelKeywordRsp
     */
    public function setKeyword(?array $keyword = null): self
    {
        // validation for constraint: array
        if ('' !== ($keywordArrayErrorMessage = self::validateKeywordForArrayConstraintFromSetKeyword($keyword))) {
            throw new InvalidArgumentException($keywordArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($keyword) && count($keyword) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($keyword)), __LINE__);
        }
        $this->Keyword = $keyword;
        
        return $this;
    }
    /**
     * Add item to Keyword value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\Keyword $item
     * @return \Travelport\Hotel\StructType\HotelKeywordRsp
     */
    public function addToKeyword(\Travelport\Hotel\StructType\Keyword $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Hotel\StructType\Keyword) {
            throw new InvalidArgumentException(sprintf('The Keyword property can only contain items of type \Travelport\Hotel\StructType\Keyword, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Keyword) && count($this->Keyword) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Keyword)), __LINE__);
        }
        $this->Keyword[] = $item;
        
        return $this;
    }
}
