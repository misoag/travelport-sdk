<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Embargo StructType
 * Meta information extracted from the WSDL
 * - documentation: Embargo details. Provider: 1G, 1V, 1P
 * @subpackage Structs
 */
class Embargo extends AbstractStructBase
{
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $Key = null;
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
     * The SegmentRef
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $SegmentRef = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 30
     * - use: optional
     * @var string|null
     */
    public ?string $Name = null;
    /**
     * The Text
     * Meta information extracted from the WSDL
     * - documentation: Brief description of the embargo. Provider: 1G, 1V, 1P
     * - use: optional
     * @var string|null
     */
    public ?string $Text = null;
    /**
     * The SecondaryType
     * Meta information extracted from the WSDL
     * - documentation: The secondary type of the optional service on which the embargo applies. Provider: 1G, 1V, 1P
     * - use: optional
     * @var string|null
     */
    public ?string $SecondaryType = null;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - documentation: The type of optional service on which the embargo applies. Provider: 1G, 1V, 1P | An identifier that labels this Merchandising Service (Baggage, Nomiles,GroundTransportation etc)
     * - base: xs:string
     * - maxLength: 128
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $Type = null;
    /**
     * The Url
     * Meta information extracted from the WSDL
     * - documentation: Website of the operating carrier. Provider: 1G, 1V, 1P
     * - use: optional
     * @var string|null
     */
    public ?string $Url = null;
    /**
     * The ServiceSubCode
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 3
     * - use: optional
     * @var string|null
     */
    public ?string $ServiceSubCode = null;
    /**
     * Constructor method for Embargo
     * @uses Embargo::setKey()
     * @uses Embargo::setCarrier()
     * @uses Embargo::setSegmentRef()
     * @uses Embargo::setName()
     * @uses Embargo::setText()
     * @uses Embargo::setSecondaryType()
     * @uses Embargo::setType()
     * @uses Embargo::setUrl()
     * @uses Embargo::setServiceSubCode()
     * @param string $key
     * @param string $carrier
     * @param string $segmentRef
     * @param string $name
     * @param string $text
     * @param string $secondaryType
     * @param string $type
     * @param string $url
     * @param string $serviceSubCode
     */
    public function __construct(?string $key = null, ?string $carrier = null, ?string $segmentRef = null, ?string $name = null, ?string $text = null, ?string $secondaryType = null, ?string $type = null, ?string $url = null, ?string $serviceSubCode = null)
    {
        $this
            ->setKey($key)
            ->setCarrier($carrier)
            ->setSegmentRef($segmentRef)
            ->setName($name)
            ->setText($text)
            ->setSecondaryType($secondaryType)
            ->setType($type)
            ->setUrl($url)
            ->setServiceSubCode($serviceSubCode);
    }
    /**
     * Get Key value
     * @return string|null
     */
    public function getKey(): ?string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Travelport\UniversalRecord\StructType\Embargo
     */
    public function setKey(?string $key = null): self
    {
        $this->Key = $key;
        
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
     * @return \Travelport\UniversalRecord\StructType\Embargo
     */
    public function setCarrier(?string $carrier = null): self
    {
        $this->Carrier = $carrier;
        
        return $this;
    }
    /**
     * Get SegmentRef value
     * @return string|null
     */
    public function getSegmentRef(): ?string
    {
        return $this->SegmentRef;
    }
    /**
     * Set SegmentRef value
     * @param string $segmentRef
     * @return \Travelport\UniversalRecord\StructType\Embargo
     */
    public function setSegmentRef(?string $segmentRef = null): self
    {
        $this->SegmentRef = $segmentRef;
        
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Travelport\UniversalRecord\StructType\Embargo
     */
    public function setName(?string $name = null): self
    {
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Get Text value
     * @return string|null
     */
    public function getText(): ?string
    {
        return $this->Text;
    }
    /**
     * Set Text value
     * @param string $text
     * @return \Travelport\UniversalRecord\StructType\Embargo
     */
    public function setText(?string $text = null): self
    {
        $this->Text = $text;
        
        return $this;
    }
    /**
     * Get SecondaryType value
     * @return string|null
     */
    public function getSecondaryType(): ?string
    {
        return $this->SecondaryType;
    }
    /**
     * Set SecondaryType value
     * @param string $secondaryType
     * @return \Travelport\UniversalRecord\StructType\Embargo
     */
    public function setSecondaryType(?string $secondaryType = null): self
    {
        $this->SecondaryType = $secondaryType;
        
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Travelport\UniversalRecord\StructType\Embargo
     */
    public function setType(?string $type = null): self
    {
        $this->Type = $type;
        
        return $this;
    }
    /**
     * Get Url value
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->Url;
    }
    /**
     * Set Url value
     * @param string $url
     * @return \Travelport\UniversalRecord\StructType\Embargo
     */
    public function setUrl(?string $url = null): self
    {
        $this->Url = $url;
        
        return $this;
    }
    /**
     * Get ServiceSubCode value
     * @return string|null
     */
    public function getServiceSubCode(): ?string
    {
        return $this->ServiceSubCode;
    }
    /**
     * Set ServiceSubCode value
     * @param string $serviceSubCode
     * @return \Travelport\UniversalRecord\StructType\Embargo
     */
    public function setServiceSubCode(?string $serviceSubCode = null): self
    {
        $this->ServiceSubCode = $serviceSubCode;
        
        return $this;
    }
}
