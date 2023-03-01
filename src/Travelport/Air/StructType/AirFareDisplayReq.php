<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirFareDisplayReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Request to display a tariff for based on origin, destination, and other options
 * @subpackage Structs
 */
class AirFareDisplayReq extends BaseReq
{
    /**
     * The Origin
     * Meta information extracted from the WSDL
     * - documentation: Provider: 1G,1V,1P. | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: required
     * - whiteSpace: collapse
     * @var string
     */
    public string $Origin;
    /**
     * The Destination
     * Meta information extracted from the WSDL
     * - documentation: Provider: 1G,1V,1P. | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: required
     * - whiteSpace: collapse
     * @var string
     */
    public string $Destination;
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: Provider: 1G,1V,1P. | 5 Character Provider Code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 2
     * - use: required
     * @var string
     */
    public string $ProviderCode;
    /**
     * The FareType
     * Meta information extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * - ref: FareType
     * @var \Travelport\Air\StructType\FareType[]
     */
    public ?array $FareType = null;
    /**
     * The PassengerType
     * Meta information extracted from the WSDL
     * - documentation: Provider: 1G,1V,1P.
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\TypePassengerType[]
     */
    public ?array $PassengerType = null;
    /**
     * The BookingCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * - ref: BookingCode
     * @var \Travelport\Air\StructType\BookingCode[]
     */
    public ?array $BookingCode = null;
    /**
     * The IncludeAddlBookingCodeInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: IncludeAddlBookingCodeInfo
     * @var \Travelport\Air\StructType\IncludeAddlBookingCodeInfo|null
     */
    public ?\Travelport\Air\StructType\IncludeAddlBookingCodeInfo $IncludeAddlBookingCodeInfo = null;
    /**
     * The FareBasis
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: FareBasis
     * @var \Travelport\Air\StructType\FareBasis|null
     */
    public ?\Travelport\Air\StructType\FareBasis $FareBasis = null;
    /**
     * The Carrier
     * Meta information extracted from the WSDL
     * - maxOccurs: 10
     * - minOccurs: 0
     * - ref: common:Carrier
     * @var \Travelport\Air\StructType\Carrier[]
     */
    public ?array $Carrier = null;
    /**
     * The AccountCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * - ref: common:AccountCode
     * @var \Travelport\Air\StructType\AccountCode[]
     */
    public ?array $AccountCode = null;
    /**
     * The ContractCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: ContractCode
     * @var \Travelport\Air\StructType\ContractCode|null
     */
    public ?\Travelport\Air\StructType\ContractCode $ContractCode = null;
    /**
     * The AirFareDisplayModifiers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: AirFareDisplayModifiers
     * @var \Travelport\Air\StructType\AirFareDisplayModifiers|null
     */
    public ?\Travelport\Air\StructType\AirFareDisplayModifiers $AirFareDisplayModifiers = null;
    /**
     * The PointOfSale
     * Meta information extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * - ref: common:PointOfSale
     * @var \Travelport\Air\StructType\PointOfSale[]
     */
    public ?array $PointOfSale = null;
    /**
     * The AirFareDisplayRuleKey
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: AirFareDisplayRuleKey
     * @var \Travelport\Air\StructType\AirFareDisplayRuleKey|null
     */
    public ?\Travelport\Air\StructType\AirFareDisplayRuleKey $AirFareDisplayRuleKey = null;
    /**
     * The IncludeMileRouteInformation
     * Meta information extracted from the WSDL
     * - documentation: Provider: 1G,1V,1P-Used to request Mile/Route Information in follow on (Mile, Route, Both)
     * @var string|null
     */
    public ?string $IncludeMileRouteInformation = null;
    /**
     * The UnSaleableFaresOnly
     * Meta information extracted from the WSDL
     * - documentation: Provider: 1G,1V,1P-Used to request unsaleable fares only also known as place of sale fares.
     * - use: optional
     * @var bool|null
     */
    public ?bool $UnSaleableFaresOnly = null;
    /**
     * The ChannelId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 4
     * - minLength: 2
     * - use: optional
     * @var string|null
     */
    public ?string $ChannelId = null;
    /**
     * The NSCC
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 3
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $NSCC = null;
    /**
     * The ReturnMM
     * Meta information extracted from the WSDL
     * - documentation: If this attribute is set to true, Fare Control Manager processing will be invoked.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $ReturnMM = null;
    /**
     * Constructor method for AirFareDisplayReq
     * @uses AirFareDisplayReq::setOrigin()
     * @uses AirFareDisplayReq::setDestination()
     * @uses AirFareDisplayReq::setProviderCode()
     * @uses AirFareDisplayReq::setFareType()
     * @uses AirFareDisplayReq::setPassengerType()
     * @uses AirFareDisplayReq::setBookingCode()
     * @uses AirFareDisplayReq::setIncludeAddlBookingCodeInfo()
     * @uses AirFareDisplayReq::setFareBasis()
     * @uses AirFareDisplayReq::setCarrier()
     * @uses AirFareDisplayReq::setAccountCode()
     * @uses AirFareDisplayReq::setContractCode()
     * @uses AirFareDisplayReq::setAirFareDisplayModifiers()
     * @uses AirFareDisplayReq::setPointOfSale()
     * @uses AirFareDisplayReq::setAirFareDisplayRuleKey()
     * @uses AirFareDisplayReq::setIncludeMileRouteInformation()
     * @uses AirFareDisplayReq::setUnSaleableFaresOnly()
     * @uses AirFareDisplayReq::setChannelId()
     * @uses AirFareDisplayReq::setNSCC()
     * @uses AirFareDisplayReq::setReturnMM()
     * @param string $origin
     * @param string $destination
     * @param string $providerCode
     * @param \Travelport\Air\StructType\FareType[] $fareType
     * @param \Travelport\Air\StructType\TypePassengerType[] $passengerType
     * @param \Travelport\Air\StructType\BookingCode[] $bookingCode
     * @param \Travelport\Air\StructType\IncludeAddlBookingCodeInfo $includeAddlBookingCodeInfo
     * @param \Travelport\Air\StructType\FareBasis $fareBasis
     * @param \Travelport\Air\StructType\Carrier[] $carrier
     * @param \Travelport\Air\StructType\AccountCode[] $accountCode
     * @param \Travelport\Air\StructType\ContractCode $contractCode
     * @param \Travelport\Air\StructType\AirFareDisplayModifiers $airFareDisplayModifiers
     * @param \Travelport\Air\StructType\PointOfSale[] $pointOfSale
     * @param \Travelport\Air\StructType\AirFareDisplayRuleKey $airFareDisplayRuleKey
     * @param string $includeMileRouteInformation
     * @param bool $unSaleableFaresOnly
     * @param string $channelId
     * @param string $nSCC
     * @param bool $returnMM
     */
    public function __construct(string $origin, string $destination, string $providerCode, ?array $fareType = null, ?array $passengerType = null, ?array $bookingCode = null, ?\Travelport\Air\StructType\IncludeAddlBookingCodeInfo $includeAddlBookingCodeInfo = null, ?\Travelport\Air\StructType\FareBasis $fareBasis = null, ?array $carrier = null, ?array $accountCode = null, ?\Travelport\Air\StructType\ContractCode $contractCode = null, ?\Travelport\Air\StructType\AirFareDisplayModifiers $airFareDisplayModifiers = null, ?array $pointOfSale = null, ?\Travelport\Air\StructType\AirFareDisplayRuleKey $airFareDisplayRuleKey = null, ?string $includeMileRouteInformation = null, ?bool $unSaleableFaresOnly = null, ?string $channelId = null, ?string $nSCC = null, ?bool $returnMM = false)
    {
        $this
            ->setOrigin($origin)
            ->setDestination($destination)
            ->setProviderCode($providerCode)
            ->setFareType($fareType)
            ->setPassengerType($passengerType)
            ->setBookingCode($bookingCode)
            ->setIncludeAddlBookingCodeInfo($includeAddlBookingCodeInfo)
            ->setFareBasis($fareBasis)
            ->setCarrier($carrier)
            ->setAccountCode($accountCode)
            ->setContractCode($contractCode)
            ->setAirFareDisplayModifiers($airFareDisplayModifiers)
            ->setPointOfSale($pointOfSale)
            ->setAirFareDisplayRuleKey($airFareDisplayRuleKey)
            ->setIncludeMileRouteInformation($includeMileRouteInformation)
            ->setUnSaleableFaresOnly($unSaleableFaresOnly)
            ->setChannelId($channelId)
            ->setNSCC($nSCC)
            ->setReturnMM($returnMM);
    }
    /**
     * Get Origin value
     * @return string
     */
    public function getOrigin(): string
    {
        return $this->Origin;
    }
    /**
     * Set Origin value
     * @param string $origin
     * @return \Travelport\Air\StructType\AirFareDisplayReq
     */
    public function setOrigin(string $origin): self
    {
        $this->Origin = $origin;
        
        return $this;
    }
    /**
     * Get Destination value
     * @return string
     */
    public function getDestination(): string
    {
        return $this->Destination;
    }
    /**
     * Set Destination value
     * @param string $destination
     * @return \Travelport\Air\StructType\AirFareDisplayReq
     */
    public function setDestination(string $destination): self
    {
        $this->Destination = $destination;
        
        return $this;
    }
    /**
     * Get ProviderCode value
     * @return string
     */
    public function getProviderCode(): string
    {
        return $this->ProviderCode;
    }
    /**
     * Set ProviderCode value
     * @param string $providerCode
     * @return \Travelport\Air\StructType\AirFareDisplayReq
     */
    public function setProviderCode(string $providerCode): self
    {
        $this->ProviderCode = $providerCode;
        
        return $this;
    }
    /**
     * Get FareType value
     * @return \Travelport\Air\StructType\FareType[]
     */
    public function getFareType(): ?array
    {
        return $this->FareType;
    }
    /**
     * Set FareType value
     * @param \Travelport\Air\StructType\FareType[] $fareType
     * @return \Travelport\Air\StructType\AirFareDisplayReq
     */
    public function setFareType(?array $fareType = null): self
    {
        $this->FareType = $fareType;
        
        return $this;
    }
    /**
     * Add item to FareType value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\FareType $item
     * @return \Travelport\Air\StructType\AirFareDisplayReq
     */
    public function addToFareType(\Travelport\Air\StructType\FareType $item): self
    {
        $this->FareType[] = $item;
        
        return $this;
    }
    /**
     * Get PassengerType value
     * @return \Travelport\Air\StructType\TypePassengerType[]
     */
    public function getPassengerType(): ?array
    {
        return $this->PassengerType;
    }
    /**
     * Set PassengerType value
     * @param \Travelport\Air\StructType\TypePassengerType[] $passengerType
     * @return \Travelport\Air\StructType\AirFareDisplayReq
     */
    public function setPassengerType(?array $passengerType = null): self
    {
        $this->PassengerType = $passengerType;
        
        return $this;
    }
    /**
     * Add item to PassengerType value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\TypePassengerType $item
     * @return \Travelport\Air\StructType\AirFareDisplayReq
     */
    public function addToPassengerType(\Travelport\Air\StructType\TypePassengerType $item): self
    {
        $this->PassengerType[] = $item;
        
        return $this;
    }
    /**
     * Get BookingCode value
     * @return \Travelport\Air\StructType\BookingCode[]
     */
    public function getBookingCode(): ?array
    {
        return $this->BookingCode;
    }
    /**
     * Set BookingCode value
     * @param \Travelport\Air\StructType\BookingCode[] $bookingCode
     * @return \Travelport\Air\StructType\AirFareDisplayReq
     */
    public function setBookingCode(?array $bookingCode = null): self
    {
        $this->BookingCode = $bookingCode;
        
        return $this;
    }
    /**
     * Add item to BookingCode value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\BookingCode $item
     * @return \Travelport\Air\StructType\AirFareDisplayReq
     */
    public function addToBookingCode(\Travelport\Air\StructType\BookingCode $item): self
    {
        $this->BookingCode[] = $item;
        
        return $this;
    }
    /**
     * Get IncludeAddlBookingCodeInfo value
     * @return \Travelport\Air\StructType\IncludeAddlBookingCodeInfo|null
     */
    public function getIncludeAddlBookingCodeInfo(): ?\Travelport\Air\StructType\IncludeAddlBookingCodeInfo
    {
        return $this->IncludeAddlBookingCodeInfo;
    }
    /**
     * Set IncludeAddlBookingCodeInfo value
     * @param \Travelport\Air\StructType\IncludeAddlBookingCodeInfo $includeAddlBookingCodeInfo
     * @return \Travelport\Air\StructType\AirFareDisplayReq
     */
    public function setIncludeAddlBookingCodeInfo(?\Travelport\Air\StructType\IncludeAddlBookingCodeInfo $includeAddlBookingCodeInfo = null): self
    {
        $this->IncludeAddlBookingCodeInfo = $includeAddlBookingCodeInfo;
        
        return $this;
    }
    /**
     * Get FareBasis value
     * @return \Travelport\Air\StructType\FareBasis|null
     */
    public function getFareBasis(): ?\Travelport\Air\StructType\FareBasis
    {
        return $this->FareBasis;
    }
    /**
     * Set FareBasis value
     * @param \Travelport\Air\StructType\FareBasis $fareBasis
     * @return \Travelport\Air\StructType\AirFareDisplayReq
     */
    public function setFareBasis(?\Travelport\Air\StructType\FareBasis $fareBasis = null): self
    {
        $this->FareBasis = $fareBasis;
        
        return $this;
    }
    /**
     * Get Carrier value
     * @return \Travelport\Air\StructType\Carrier[]
     */
    public function getCarrier(): ?array
    {
        return $this->Carrier;
    }
    /**
     * Set Carrier value
     * @param \Travelport\Air\StructType\Carrier[] $carrier
     * @return \Travelport\Air\StructType\AirFareDisplayReq
     */
    public function setCarrier(?array $carrier = null): self
    {
        $this->Carrier = $carrier;
        
        return $this;
    }
    /**
     * Add item to Carrier value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\Carrier $item
     * @return \Travelport\Air\StructType\AirFareDisplayReq
     */
    public function addToCarrier(\Travelport\Air\StructType\Carrier $item): self
    {
        $this->Carrier[] = $item;
        
        return $this;
    }
    /**
     * Get AccountCode value
     * @return \Travelport\Air\StructType\AccountCode[]
     */
    public function getAccountCode(): ?array
    {
        return $this->AccountCode;
    }
    /**
     * Set AccountCode value
     * @param \Travelport\Air\StructType\AccountCode[] $accountCode
     * @return \Travelport\Air\StructType\AirFareDisplayReq
     */
    public function setAccountCode(?array $accountCode = null): self
    {
        $this->AccountCode = $accountCode;
        
        return $this;
    }
    /**
     * Add item to AccountCode value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\AccountCode $item
     * @return \Travelport\Air\StructType\AirFareDisplayReq
     */
    public function addToAccountCode(\Travelport\Air\StructType\AccountCode $item): self
    {
        $this->AccountCode[] = $item;
        
        return $this;
    }
    /**
     * Get ContractCode value
     * @return \Travelport\Air\StructType\ContractCode|null
     */
    public function getContractCode(): ?\Travelport\Air\StructType\ContractCode
    {
        return $this->ContractCode;
    }
    /**
     * Set ContractCode value
     * @param \Travelport\Air\StructType\ContractCode $contractCode
     * @return \Travelport\Air\StructType\AirFareDisplayReq
     */
    public function setContractCode(?\Travelport\Air\StructType\ContractCode $contractCode = null): self
    {
        $this->ContractCode = $contractCode;
        
        return $this;
    }
    /**
     * Get AirFareDisplayModifiers value
     * @return \Travelport\Air\StructType\AirFareDisplayModifiers|null
     */
    public function getAirFareDisplayModifiers(): ?\Travelport\Air\StructType\AirFareDisplayModifiers
    {
        return $this->AirFareDisplayModifiers;
    }
    /**
     * Set AirFareDisplayModifiers value
     * @param \Travelport\Air\StructType\AirFareDisplayModifiers $airFareDisplayModifiers
     * @return \Travelport\Air\StructType\AirFareDisplayReq
     */
    public function setAirFareDisplayModifiers(?\Travelport\Air\StructType\AirFareDisplayModifiers $airFareDisplayModifiers = null): self
    {
        $this->AirFareDisplayModifiers = $airFareDisplayModifiers;
        
        return $this;
    }
    /**
     * Get PointOfSale value
     * @return \Travelport\Air\StructType\PointOfSale[]
     */
    public function getPointOfSale(): ?array
    {
        return $this->PointOfSale;
    }
    /**
     * Set PointOfSale value
     * @param \Travelport\Air\StructType\PointOfSale[] $pointOfSale
     * @return \Travelport\Air\StructType\AirFareDisplayReq
     */
    public function setPointOfSale(?array $pointOfSale = null): self
    {
        $this->PointOfSale = $pointOfSale;
        
        return $this;
    }
    /**
     * Add item to PointOfSale value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\PointOfSale $item
     * @return \Travelport\Air\StructType\AirFareDisplayReq
     */
    public function addToPointOfSale(\Travelport\Air\StructType\PointOfSale $item): self
    {
        $this->PointOfSale[] = $item;
        
        return $this;
    }
    /**
     * Get AirFareDisplayRuleKey value
     * @return \Travelport\Air\StructType\AirFareDisplayRuleKey|null
     */
    public function getAirFareDisplayRuleKey(): ?\Travelport\Air\StructType\AirFareDisplayRuleKey
    {
        return $this->AirFareDisplayRuleKey;
    }
    /**
     * Set AirFareDisplayRuleKey value
     * @param \Travelport\Air\StructType\AirFareDisplayRuleKey $airFareDisplayRuleKey
     * @return \Travelport\Air\StructType\AirFareDisplayReq
     */
    public function setAirFareDisplayRuleKey(?\Travelport\Air\StructType\AirFareDisplayRuleKey $airFareDisplayRuleKey = null): self
    {
        $this->AirFareDisplayRuleKey = $airFareDisplayRuleKey;
        
        return $this;
    }
    /**
     * Get IncludeMileRouteInformation value
     * @return string|null
     */
    public function getIncludeMileRouteInformation(): ?string
    {
        return $this->IncludeMileRouteInformation;
    }
    /**
     * Set IncludeMileRouteInformation value
     * @param string $includeMileRouteInformation
     * @return \Travelport\Air\StructType\AirFareDisplayReq
     */
    public function setIncludeMileRouteInformation(?string $includeMileRouteInformation = null): self
    {
        $this->IncludeMileRouteInformation = $includeMileRouteInformation;
        
        return $this;
    }
    /**
     * Get UnSaleableFaresOnly value
     * @return bool|null
     */
    public function getUnSaleableFaresOnly(): ?bool
    {
        return $this->UnSaleableFaresOnly;
    }
    /**
     * Set UnSaleableFaresOnly value
     * @param bool $unSaleableFaresOnly
     * @return \Travelport\Air\StructType\AirFareDisplayReq
     */
    public function setUnSaleableFaresOnly(?bool $unSaleableFaresOnly = null): self
    {
        $this->UnSaleableFaresOnly = $unSaleableFaresOnly;
        
        return $this;
    }
    /**
     * Get ChannelId value
     * @return string|null
     */
    public function getChannelId(): ?string
    {
        return $this->ChannelId;
    }
    /**
     * Set ChannelId value
     * @param string $channelId
     * @return \Travelport\Air\StructType\AirFareDisplayReq
     */
    public function setChannelId(?string $channelId = null): self
    {
        $this->ChannelId = $channelId;
        
        return $this;
    }
    /**
     * Get NSCC value
     * @return string|null
     */
    public function getNSCC(): ?string
    {
        return $this->NSCC;
    }
    /**
     * Set NSCC value
     * @param string $nSCC
     * @return \Travelport\Air\StructType\AirFareDisplayReq
     */
    public function setNSCC(?string $nSCC = null): self
    {
        $this->NSCC = $nSCC;
        
        return $this;
    }
    /**
     * Get ReturnMM value
     * @return bool|null
     */
    public function getReturnMM(): ?bool
    {
        return $this->ReturnMM;
    }
    /**
     * Set ReturnMM value
     * @param bool $returnMM
     * @return \Travelport\Air\StructType\AirFareDisplayReq
     */
    public function setReturnMM(?bool $returnMM = false): self
    {
        $this->ReturnMM = $returnMM;
        
        return $this;
    }
}
