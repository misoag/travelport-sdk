<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Embargo StructType
 * Meta information extracted from the WSDL
 * - documentation: Embargo details. Provider: 1G, 1V, 1P, 1J
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
    protected ?string $Key = null;
    /**
     * The Carrier
     * Meta information extracted from the WSDL
     * - documentation: 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    protected ?string $Carrier = null;
    /**
     * The SegmentRef
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $SegmentRef = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 30
     * - use: optional
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The Text
     * Meta information extracted from the WSDL
     * - documentation: Brief description of the embargo. Provider: 1G, 1V, 1P, 1J
     * - use: optional
     * @var string|null
     */
    protected ?string $Text = null;
    /**
     * The SecondaryType
     * Meta information extracted from the WSDL
     * - documentation: The secondary type of the optional service on which the embargo applies. Provider: 1G, 1V, 1P, 1J
     * - use: optional
     * @var string|null
     */
    protected ?string $SecondaryType = null;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - documentation: The type of optional service on which the embargo applies. Provider: 1G, 1V, 1P, 1J | An identifier that labels this Merchandising Service (Baggage, Nomiles,GroundTransportation etc)
     * - base: xs:string
     * - maxLength: 128
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $Type = null;
    /**
     * The Url
     * Meta information extracted from the WSDL
     * - documentation: Website of the operating carrier. Provider: 1G, 1V, 1P, 1J
     * - use: optional
     * @var string|null
     */
    protected ?string $Url = null;
    /**
     * The ServiceSubCode
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 3
     * - use: optional
     * @var string|null
     */
    protected ?string $ServiceSubCode = null;
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
     * @return \Travelport\Util\StructType\Embargo
     */
    public function setKey(?string $key = null): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\Embargo
     */
    public function setCarrier(?string $carrier = null): self
    {
        // validation for constraint: string
        if (!is_null($carrier) && !is_string($carrier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($carrier, true), gettype($carrier)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($carrier) && mb_strlen((string) $carrier) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $carrier)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\Embargo
     */
    public function setSegmentRef(?string $segmentRef = null): self
    {
        // validation for constraint: string
        if (!is_null($segmentRef) && !is_string($segmentRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($segmentRef, true), gettype($segmentRef)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\Embargo
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        // validation for constraint: maxLength(30)
        if (!is_null($name) && mb_strlen((string) $name) > 30) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 30', mb_strlen((string) $name)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\Embargo
     */
    public function setText(?string $text = null): self
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($text, true), gettype($text)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\Embargo
     */
    public function setSecondaryType(?string $secondaryType = null): self
    {
        // validation for constraint: string
        if (!is_null($secondaryType) && !is_string($secondaryType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($secondaryType, true), gettype($secondaryType)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\Embargo
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        // validation for constraint: maxLength(128)
        if (!is_null($type) && mb_strlen((string) $type) > 128) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 128', mb_strlen((string) $type)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($type) && mb_strlen((string) $type) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $type)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\Embargo
     */
    public function setUrl(?string $url = null): self
    {
        // validation for constraint: string
        if (!is_null($url) && !is_string($url)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($url, true), gettype($url)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\Embargo
     */
    public function setServiceSubCode(?string $serviceSubCode = null): self
    {
        // validation for constraint: string
        if (!is_null($serviceSubCode) && !is_string($serviceSubCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceSubCode, true), gettype($serviceSubCode)), __LINE__);
        }
        // validation for constraint: maxLength(3)
        if (!is_null($serviceSubCode) && mb_strlen((string) $serviceSubCode) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 3', mb_strlen((string) $serviceSubCode)), __LINE__);
        }
        $this->ServiceSubCode = $serviceSubCode;
        
        return $this;
    }
}
