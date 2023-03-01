<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareRemark StructType
 * @subpackage Structs
 */
class FareRemark extends AbstractStructBase
{
    /**
     * The Text
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var string[]
     */
    public ?array $Text = null;
    /**
     * The URL
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: URL
     * @var \Travelport\Air\StructType\URL[]
     */
    public ?array $URL = null;
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
     * The Name
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $Name = null;
    /**
     * Constructor method for FareRemark
     * @uses FareRemark::setText()
     * @uses FareRemark::setURL()
     * @uses FareRemark::setKey()
     * @uses FareRemark::setName()
     * @param string[] $text
     * @param \Travelport\Air\StructType\URL[] $uRL
     * @param string $key
     * @param string $name
     */
    public function __construct(?array $text = null, ?array $uRL = null, ?string $key = null, ?string $name = null)
    {
        $this
            ->setText($text)
            ->setURL($uRL)
            ->setKey($key)
            ->setName($name);
    }
    /**
     * Get Text value
     * @return string[]
     */
    public function getText(): ?array
    {
        return $this->Text;
    }
    /**
     * Set Text value
     * @param string[] $text
     * @return \Travelport\Air\StructType\FareRemark
     */
    public function setText(?array $text = null): self
    {
        $this->Text = $text;
        
        return $this;
    }
    /**
     * Add item to Text value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\Air\StructType\FareRemark
     */
    public function addToText(string $item): self
    {
        $this->Text[] = $item;
        
        return $this;
    }
    /**
     * Get URL value
     * @return \Travelport\Air\StructType\URL[]
     */
    public function getURL(): ?array
    {
        return $this->URL;
    }
    /**
     * Set URL value
     * @param \Travelport\Air\StructType\URL[] $uRL
     * @return \Travelport\Air\StructType\FareRemark
     */
    public function setURL(?array $uRL = null): self
    {
        $this->URL = $uRL;
        
        return $this;
    }
    /**
     * Add item to URL value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\URL $item
     * @return \Travelport\Air\StructType\FareRemark
     */
    public function addToURL(\Travelport\Air\StructType\URL $item): self
    {
        $this->URL[] = $item;
        
        return $this;
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
     * @return \Travelport\Air\StructType\FareRemark
     */
    public function setKey(?string $key = null): self
    {
        $this->Key = $key;
        
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
     * @return \Travelport\Air\StructType\FareRemark
     */
    public function setName(?string $name = null): self
    {
        $this->Name = $name;
        
        return $this;
    }
}
