<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for QueuePlace StructType
 * Meta information extracted from the WSDL
 * - documentation: Identifies the Queue Information to be selected for placing the UR | Allow queue placement of a PNR at the time of booking to be used for Providers 1G,1V and 1P.
 * @subpackage Structs
 */
class QueuePlace extends AbstractStructBase
{
    /**
     * The PseudoCityCode
     * Meta information extracted from the WSDL
     * - documentation: Pseudo City Code | 2 to 10 Letter Pseudo City Code
     * - base: xs:string
     * - maxLength: 10
     * - maxOccurs: 1
     * - minLength: 2
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $PseudoCityCode = null;
    /**
     * The QueueSelector
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: QueueSelector
     * @var \Travelport\Air\StructType\QueueSelector[]
     */
    public ?array $QueueSelector = null;
    /**
     * Constructor method for QueuePlace
     * @uses QueuePlace::setPseudoCityCode()
     * @uses QueuePlace::setQueueSelector()
     * @param string $pseudoCityCode
     * @param \Travelport\Air\StructType\QueueSelector[] $queueSelector
     */
    public function __construct(?string $pseudoCityCode = null, ?array $queueSelector = null)
    {
        $this
            ->setPseudoCityCode($pseudoCityCode)
            ->setQueueSelector($queueSelector);
    }
    /**
     * Get PseudoCityCode value
     * @return string|null
     */
    public function getPseudoCityCode(): ?string
    {
        return $this->PseudoCityCode;
    }
    /**
     * Set PseudoCityCode value
     * @param string $pseudoCityCode
     * @return \Travelport\Air\StructType\QueuePlace
     */
    public function setPseudoCityCode(?string $pseudoCityCode = null): self
    {
        $this->PseudoCityCode = $pseudoCityCode;
        
        return $this;
    }
    /**
     * Get QueueSelector value
     * @return \Travelport\Air\StructType\QueueSelector[]
     */
    public function getQueueSelector(): ?array
    {
        return $this->QueueSelector;
    }
    /**
     * Set QueueSelector value
     * @param \Travelport\Air\StructType\QueueSelector[] $queueSelector
     * @return \Travelport\Air\StructType\QueuePlace
     */
    public function setQueueSelector(?array $queueSelector = null): self
    {
        $this->QueueSelector = $queueSelector;
        
        return $this;
    }
    /**
     * Add item to QueueSelector value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\QueueSelector $item
     * @return \Travelport\Air\StructType\QueuePlace
     */
    public function addToQueueSelector(\Travelport\Air\StructType\QueueSelector $item): self
    {
        $this->QueueSelector[] = $item;
        
        return $this;
    }
}
