<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocumentModifiers StructType
 * @subpackage Structs
 */
class DocumentModifiers extends AbstractStructBase
{
    /**
     * The GenerateItineraryInvoice
     * Meta information extracted from the WSDL
     * - documentation: Generate itinerary/invoice documents along with ticket
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $GenerateItineraryInvoice = null;
    /**
     * The GenerateAccountingInterface
     * Meta information extracted from the WSDL
     * - documentation: Generate interface message along with ticket
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $GenerateAccountingInterface = null;
    /**
     * Constructor method for DocumentModifiers
     * @uses DocumentModifiers::setGenerateItineraryInvoice()
     * @uses DocumentModifiers::setGenerateAccountingInterface()
     * @param bool $generateItineraryInvoice
     * @param bool $generateAccountingInterface
     */
    public function __construct(?bool $generateItineraryInvoice = false, ?bool $generateAccountingInterface = false)
    {
        $this
            ->setGenerateItineraryInvoice($generateItineraryInvoice)
            ->setGenerateAccountingInterface($generateAccountingInterface);
    }
    /**
     * Get GenerateItineraryInvoice value
     * @return bool|null
     */
    public function getGenerateItineraryInvoice(): ?bool
    {
        return $this->GenerateItineraryInvoice;
    }
    /**
     * Set GenerateItineraryInvoice value
     * @param bool $generateItineraryInvoice
     * @return \Travelport\UniversalRecord\StructType\DocumentModifiers
     */
    public function setGenerateItineraryInvoice(?bool $generateItineraryInvoice = false): self
    {
        $this->GenerateItineraryInvoice = $generateItineraryInvoice;
        
        return $this;
    }
    /**
     * Get GenerateAccountingInterface value
     * @return bool|null
     */
    public function getGenerateAccountingInterface(): ?bool
    {
        return $this->GenerateAccountingInterface;
    }
    /**
     * Set GenerateAccountingInterface value
     * @param bool $generateAccountingInterface
     * @return \Travelport\UniversalRecord\StructType\DocumentModifiers
     */
    public function setGenerateAccountingInterface(?bool $generateAccountingInterface = false): self
    {
        $this->GenerateAccountingInterface = $generateAccountingInterface;
        
        return $this;
    }
}
