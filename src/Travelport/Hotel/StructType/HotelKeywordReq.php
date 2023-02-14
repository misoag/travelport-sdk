<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelKeywordReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Request to retrieve the hotel keyword details of a hotel chain or property
 * @subpackage Structs
 */
class HotelKeywordReq extends BaseReq
{
    /**
     * The HotelChain
     * Meta information extracted from the WSDL
     * - documentation: 2 Letter Hotel Chain Code
     * - base: xs:string
     * - length: 2
     * - use: required
     * @var string
     */
    protected string $HotelChain;
    /**
     * The Keyword
     * Meta information extracted from the WSDL
     * - maxOccurs: 15
     * - minOccurs: 0
     * - ref: common:Keyword
     * @var \Travelport\Hotel\StructType\Keyword[]
     */
    protected ?array $Keyword = null;
    /**
     * The PermittedProviders
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:PermittedProviders
     * @var \Travelport\Hotel\StructType\PermittedProviders|null
     */
    protected ?\Travelport\Hotel\StructType\PermittedProviders $PermittedProviders = null;
    /**
     * The HotelCode
     * Meta information extracted from the WSDL
     * - documentation: Unique hotel identifier for the channel
     * - base: xs:string
     * - maxLength: 32
     * - use: optional
     * @var string|null
     */
    protected ?string $HotelCode = null;
    /**
     * The CheckinDate
     * Meta information extracted from the WSDL
     * - documentation: Date without time zones YYYY-MM-DD
     * - base: xs:date
     * - pattern: [^:Z].*
     * - use: optional
     * @var string|null
     */
    protected ?string $CheckinDate = null;
    /**
     * The ReturnKeywordList
     * Meta information extracted from the WSDL
     * - documentation: When true, a list of keyword names should be returned. If false then list of keyword details should be returned
     * @var bool|null
     */
    protected ?bool $ReturnKeywordList = null;
    /**
     * Constructor method for HotelKeywordReq
     * @uses HotelKeywordReq::setHotelChain()
     * @uses HotelKeywordReq::setKeyword()
     * @uses HotelKeywordReq::setPermittedProviders()
     * @uses HotelKeywordReq::setHotelCode()
     * @uses HotelKeywordReq::setCheckinDate()
     * @uses HotelKeywordReq::setReturnKeywordList()
     * @param string $hotelChain
     * @param \Travelport\Hotel\StructType\Keyword[] $keyword
     * @param \Travelport\Hotel\StructType\PermittedProviders $permittedProviders
     * @param string $hotelCode
     * @param string $checkinDate
     * @param bool $returnKeywordList
     */
    public function __construct(string $hotelChain, ?array $keyword = null, ?\Travelport\Hotel\StructType\PermittedProviders $permittedProviders = null, ?string $hotelCode = null, ?string $checkinDate = null, ?bool $returnKeywordList = null)
    {
        $this
            ->setHotelChain($hotelChain)
            ->setKeyword($keyword)
            ->setPermittedProviders($permittedProviders)
            ->setHotelCode($hotelCode)
            ->setCheckinDate($checkinDate)
            ->setReturnKeywordList($returnKeywordList);
    }
    /**
     * Get HotelChain value
     * @return string
     */
    public function getHotelChain(): string
    {
        return $this->HotelChain;
    }
    /**
     * Set HotelChain value
     * @param string $hotelChain
     * @return \Travelport\Hotel\StructType\HotelKeywordReq
     */
    public function setHotelChain(string $hotelChain): self
    {
        // validation for constraint: string
        if (!is_null($hotelChain) && !is_string($hotelChain)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hotelChain, true), gettype($hotelChain)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($hotelChain) && mb_strlen((string) $hotelChain) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $hotelChain)), __LINE__);
        }
        $this->HotelChain = $hotelChain;
        
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
     * This method is responsible for validating the values passed to the setKeyword method
     * This method is willingly generated in order to preserve the one-line inline validation within the setKeyword method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateKeywordForArrayConstraintsFromSetKeyword(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $hotelKeywordReqKeywordItem) {
            // validation for constraint: itemType
            if (!$hotelKeywordReqKeywordItem instanceof \Travelport\Hotel\StructType\Keyword) {
                $invalidValues[] = is_object($hotelKeywordReqKeywordItem) ? get_class($hotelKeywordReqKeywordItem) : sprintf('%s(%s)', gettype($hotelKeywordReqKeywordItem), var_export($hotelKeywordReqKeywordItem, true));
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
     * @return \Travelport\Hotel\StructType\HotelKeywordReq
     */
    public function setKeyword(?array $keyword = null): self
    {
        // validation for constraint: array
        if ('' !== ($keywordArrayErrorMessage = self::validateKeywordForArrayConstraintsFromSetKeyword($keyword))) {
            throw new InvalidArgumentException($keywordArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(15)
        if (is_array($keyword) && count($keyword) > 15) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 15', count($keyword)), __LINE__);
        }
        $this->Keyword = $keyword;
        
        return $this;
    }
    /**
     * Add item to Keyword value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\Keyword $item
     * @return \Travelport\Hotel\StructType\HotelKeywordReq
     */
    public function addToKeyword(\Travelport\Hotel\StructType\Keyword $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Hotel\StructType\Keyword) {
            throw new InvalidArgumentException(sprintf('The Keyword property can only contain items of type \Travelport\Hotel\StructType\Keyword, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(15)
        if (is_array($this->Keyword) && count($this->Keyword) >= 15) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 15', count($this->Keyword)), __LINE__);
        }
        $this->Keyword[] = $item;
        
        return $this;
    }
    /**
     * Get PermittedProviders value
     * @return \Travelport\Hotel\StructType\PermittedProviders|null
     */
    public function getPermittedProviders(): ?\Travelport\Hotel\StructType\PermittedProviders
    {
        return $this->PermittedProviders;
    }
    /**
     * Set PermittedProviders value
     * @param \Travelport\Hotel\StructType\PermittedProviders $permittedProviders
     * @return \Travelport\Hotel\StructType\HotelKeywordReq
     */
    public function setPermittedProviders(?\Travelport\Hotel\StructType\PermittedProviders $permittedProviders = null): self
    {
        $this->PermittedProviders = $permittedProviders;
        
        return $this;
    }
    /**
     * Get HotelCode value
     * @return string|null
     */
    public function getHotelCode(): ?string
    {
        return $this->HotelCode;
    }
    /**
     * Set HotelCode value
     * @param string $hotelCode
     * @return \Travelport\Hotel\StructType\HotelKeywordReq
     */
    public function setHotelCode(?string $hotelCode = null): self
    {
        // validation for constraint: string
        if (!is_null($hotelCode) && !is_string($hotelCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hotelCode, true), gettype($hotelCode)), __LINE__);
        }
        // validation for constraint: maxLength(32)
        if (!is_null($hotelCode) && mb_strlen((string) $hotelCode) > 32) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 32', mb_strlen((string) $hotelCode)), __LINE__);
        }
        $this->HotelCode = $hotelCode;
        
        return $this;
    }
    /**
     * Get CheckinDate value
     * @return string|null
     */
    public function getCheckinDate(): ?string
    {
        return $this->CheckinDate;
    }
    /**
     * Set CheckinDate value
     * @param string $checkinDate
     * @return \Travelport\Hotel\StructType\HotelKeywordReq
     */
    public function setCheckinDate(?string $checkinDate = null): self
    {
        // validation for constraint: string
        if (!is_null($checkinDate) && !is_string($checkinDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($checkinDate, true), gettype($checkinDate)), __LINE__);
        }
        // validation for constraint: pattern([^:Z].*)
        if (!is_null($checkinDate) && !preg_match('/[^:Z].*/', $checkinDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[^:Z].*/', var_export($checkinDate, true)), __LINE__);
        }
        $this->CheckinDate = $checkinDate;
        
        return $this;
    }
    /**
     * Get ReturnKeywordList value
     * @return bool|null
     */
    public function getReturnKeywordList(): ?bool
    {
        return $this->ReturnKeywordList;
    }
    /**
     * Set ReturnKeywordList value
     * @param bool $returnKeywordList
     * @return \Travelport\Hotel\StructType\HotelKeywordReq
     */
    public function setReturnKeywordList(?bool $returnKeywordList = null): self
    {
        // validation for constraint: boolean
        if (!is_null($returnKeywordList) && !is_bool($returnKeywordList)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($returnKeywordList, true), gettype($returnKeywordList)), __LINE__);
        }
        $this->ReturnKeywordList = $returnKeywordList;
        
        return $this;
    }
}
