<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirSearchAsynchModifiers StructType
 * Meta information extracted from the WSDL
 * - documentation: Controls and switches for the Air Search request for Asynch Request
 * @subpackage Structs
 */
class AirSearchAsynchModifiers extends AbstractStructBase
{
    /**
     * The InitialAsynchResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\InitialAsynchResult|null
     */
    public ?\Travelport\Air\StructType\InitialAsynchResult $InitialAsynchResult = null;
    /**
     * Constructor method for AirSearchAsynchModifiers
     * @uses AirSearchAsynchModifiers::setInitialAsynchResult()
     * @param \Travelport\Air\StructType\InitialAsynchResult $initialAsynchResult
     */
    public function __construct(?\Travelport\Air\StructType\InitialAsynchResult $initialAsynchResult = null)
    {
        $this
            ->setInitialAsynchResult($initialAsynchResult);
    }
    /**
     * Get InitialAsynchResult value
     * @return \Travelport\Air\StructType\InitialAsynchResult|null
     */
    public function getInitialAsynchResult(): ?\Travelport\Air\StructType\InitialAsynchResult
    {
        return $this->InitialAsynchResult;
    }
    /**
     * Set InitialAsynchResult value
     * @param \Travelport\Air\StructType\InitialAsynchResult $initialAsynchResult
     * @return \Travelport\Air\StructType\AirSearchAsynchModifiers
     */
    public function setInitialAsynchResult(?\Travelport\Air\StructType\InitialAsynchResult $initialAsynchResult = null): self
    {
        $this->InitialAsynchResult = $initialAsynchResult;
        
        return $this;
    }
}
