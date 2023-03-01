<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseBaggageAllowanceInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Text information as published by carrier. | Contains the text and URL information as published by carrier. | This contains common elements that are used for Baggage Allowance info, carry-on allowance info and embargo Info. Supported
 * providers are 1V/1G/1P
 * @subpackage Structs
 */
class BaseBaggageAllowanceInfo extends AbstractStructBase
{
    /**
     * The URLInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: URLInfo
     * @var \Travelport\UniversalRecord\StructType\URLInfo[]
     */
    public ?array $URLInfo = null;
    /**
     * The TextInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: TextInfo
     * @var \Travelport\UniversalRecord\StructType\TextInfo[]
     */
    public ?array $TextInfo = null;
    /**
     * The Origin
     * Meta information extracted from the WSDL
     * - documentation: Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $Origin = null;
    /**
     * The Destination
     * Meta information extracted from the WSDL
     * - documentation: Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $Destination = null;
    /**
     * The Carrier
     * Meta information extracted from the WSDL
     * - documentation: 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    public ?string $Carrier = null;
    /**
     * Constructor method for BaseBaggageAllowanceInfo
     * @uses BaseBaggageAllowanceInfo::setURLInfo()
     * @uses BaseBaggageAllowanceInfo::setTextInfo()
     * @uses BaseBaggageAllowanceInfo::setOrigin()
     * @uses BaseBaggageAllowanceInfo::setDestination()
     * @uses BaseBaggageAllowanceInfo::setCarrier()
     * @param \Travelport\UniversalRecord\StructType\URLInfo[] $uRLInfo
     * @param \Travelport\UniversalRecord\StructType\TextInfo[] $textInfo
     * @param string $origin
     * @param string $destination
     * @param string $carrier
     */
    public function __construct(?array $uRLInfo = null, ?array $textInfo = null, ?string $origin = null, ?string $destination = null, ?string $carrier = null)
    {
        $this
            ->setURLInfo($uRLInfo)
            ->setTextInfo($textInfo)
            ->setOrigin($origin)
            ->setDestination($destination)
            ->setCarrier($carrier);
    }
    /**
     * Get URLInfo value
     * @return \Travelport\UniversalRecord\StructType\URLInfo[]
     */
    public function getURLInfo(): ?array
    {
        return $this->URLInfo;
    }
    /**
     * Set URLInfo value
     * @param \Travelport\UniversalRecord\StructType\URLInfo[] $uRLInfo
     * @return \Travelport\UniversalRecord\StructType\BaseBaggageAllowanceInfo
     */
    public function setURLInfo(?array $uRLInfo = null): self
    {
        $this->URLInfo = $uRLInfo;
        
        return $this;
    }
    /**
     * Add item to URLInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\URLInfo $item
     * @return \Travelport\UniversalRecord\StructType\BaseBaggageAllowanceInfo
     */
    public function addToURLInfo(\Travelport\UniversalRecord\StructType\URLInfo $item): self
    {
        $this->URLInfo[] = $item;
        
        return $this;
    }
    /**
     * Get TextInfo value
     * @return \Travelport\UniversalRecord\StructType\TextInfo[]
     */
    public function getTextInfo(): ?array
    {
        return $this->TextInfo;
    }
    /**
     * Set TextInfo value
     * @param \Travelport\UniversalRecord\StructType\TextInfo[] $textInfo
     * @return \Travelport\UniversalRecord\StructType\BaseBaggageAllowanceInfo
     */
    public function setTextInfo(?array $textInfo = null): self
    {
        $this->TextInfo = $textInfo;
        
        return $this;
    }
    /**
     * Add item to TextInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TextInfo $item
     * @return \Travelport\UniversalRecord\StructType\BaseBaggageAllowanceInfo
     */
    public function addToTextInfo(\Travelport\UniversalRecord\StructType\TextInfo $item): self
    {
        $this->TextInfo[] = $item;
        
        return $this;
    }
    /**
     * Get Origin value
     * @return string|null
     */
    public function getOrigin(): ?string
    {
        return $this->Origin;
    }
    /**
     * Set Origin value
     * @param string $origin
     * @return \Travelport\UniversalRecord\StructType\BaseBaggageAllowanceInfo
     */
    public function setOrigin(?string $origin = null): self
    {
        $this->Origin = $origin;
        
        return $this;
    }
    /**
     * Get Destination value
     * @return string|null
     */
    public function getDestination(): ?string
    {
        return $this->Destination;
    }
    /**
     * Set Destination value
     * @param string $destination
     * @return \Travelport\UniversalRecord\StructType\BaseBaggageAllowanceInfo
     */
    public function setDestination(?string $destination = null): self
    {
        $this->Destination = $destination;
        
        return $this;
    }
    /**
     * Get Carrier value
     * @return string|null
     */
    public function getCarrier(): ?string
    {
        return $this->Carrier;
    }
    /**
     * Set Carrier value
     * @param string $carrier
     * @return \Travelport\UniversalRecord\StructType\BaseBaggageAllowanceInfo
     */
    public function setCarrier(?string $carrier = null): self
    {
        $this->Carrier = $carrier;
        
        return $this;
    }
}
