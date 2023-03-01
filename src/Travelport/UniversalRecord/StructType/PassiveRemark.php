<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PassiveRemark StructType
 * @subpackage Structs
 */
class PassiveRemark extends AbstractStructBase
{
    /**
     * The PassiveSegmentRef
     * Meta information extracted from the WSDL
     * - documentation: The Passive Segment key that this remark refers to. | Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $PassiveSegmentRef;
    /**
     * The Text
     * @var string|null
     */
    public ?string $Text = null;
    /**
     * The Type
     * @var string|null
     */
    public ?string $Type = null;
    /**
     * Constructor method for PassiveRemark
     * @uses PassiveRemark::setPassiveSegmentRef()
     * @uses PassiveRemark::setText()
     * @uses PassiveRemark::setType()
     * @param string $passiveSegmentRef
     * @param string $text
     * @param string $type
     */
    public function __construct(string $passiveSegmentRef, ?string $text = null, ?string $type = null)
    {
        $this
            ->setPassiveSegmentRef($passiveSegmentRef)
            ->setText($text)
            ->setType($type);
    }
    /**
     * Get PassiveSegmentRef value
     * @return string
     */
    public function getPassiveSegmentRef(): string
    {
        return $this->PassiveSegmentRef;
    }
    /**
     * Set PassiveSegmentRef value
     * @param string $passiveSegmentRef
     * @return \Travelport\UniversalRecord\StructType\PassiveRemark
     */
    public function setPassiveSegmentRef(string $passiveSegmentRef): self
    {
        $this->PassiveSegmentRef = $passiveSegmentRef;
        
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
     * @return \Travelport\UniversalRecord\StructType\PassiveRemark
     */
    public function setText(?string $text = null): self
    {
        $this->Text = $text;
        
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
     * @return \Travelport\UniversalRecord\StructType\PassiveRemark
     */
    public function setType(?string $type = null): self
    {
        $this->Type = $type;
        
        return $this;
    }
}
