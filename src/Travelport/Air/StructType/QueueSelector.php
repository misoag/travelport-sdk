<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for QueueSelector StructType
 * Meta information extracted from the WSDL
 * - documentation: Identifies the Queue with Queue Number , Category and Date Range.
 * @subpackage Structs
 */
class QueueSelector extends AbstractStructBase
{
    /**
     * The Queue
     * Meta information extracted from the WSDL
     * - documentation: Queue Number . Possible values are 01, AA , A1 etc.
     * - type: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $Queue = null;
    /**
     * The Category
     * Meta information extracted from the WSDL
     * - documentation: If using for Sabre is mandatory and is Prefatory Instruction Code value of 0-999. | Either Alpha or Numeric Number is allowed. | Queue Category Number. 2 Character Alpha or Numeric Number.
     * - type: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $Category = null;
    /**
     * The DateRange
     * Meta information extracted from the WSDL
     * - documentation: Date range number where the PNR should be queued. Possible values are 1,2,1-4 etc.
     * - type: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $DateRange = null;
    /**
     * Constructor method for QueueSelector
     * @uses QueueSelector::setQueue()
     * @uses QueueSelector::setCategory()
     * @uses QueueSelector::setDateRange()
     * @param string $queue
     * @param string $category
     * @param string $dateRange
     */
    public function __construct(?string $queue = null, ?string $category = null, ?string $dateRange = null)
    {
        $this
            ->setQueue($queue)
            ->setCategory($category)
            ->setDateRange($dateRange);
    }
    /**
     * Get Queue value
     * @return string|null
     */
    public function getQueue(): ?string
    {
        return $this->Queue;
    }
    /**
     * Set Queue value
     * @param string $queue
     * @return \Travelport\Air\StructType\QueueSelector
     */
    public function setQueue(?string $queue = null): self
    {
        $this->Queue = $queue;
        
        return $this;
    }
    /**
     * Get Category value
     * @return string|null
     */
    public function getCategory(): ?string
    {
        return $this->Category;
    }
    /**
     * Set Category value
     * @param string $category
     * @return \Travelport\Air\StructType\QueueSelector
     */
    public function setCategory(?string $category = null): self
    {
        $this->Category = $category;
        
        return $this;
    }
    /**
     * Get DateRange value
     * @return string|null
     */
    public function getDateRange(): ?string
    {
        return $this->DateRange;
    }
    /**
     * Set DateRange value
     * @param string $dateRange
     * @return \Travelport\Air\StructType\QueueSelector
     */
    public function setDateRange(?string $dateRange = null): self
    {
        $this->DateRange = $dateRange;
        
        return $this;
    }
}
