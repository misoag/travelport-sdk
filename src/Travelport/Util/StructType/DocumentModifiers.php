<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
    protected ?bool $GenerateItineraryInvoice = null;
    /**
     * The GenerateAccountingInterface
     * Meta information extracted from the WSDL
     * - documentation: Generate interface message along with ticket
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $GenerateAccountingInterface = null;
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
     * @return \Travelport\Util\StructType\DocumentModifiers
     */
    public function setGenerateItineraryInvoice(?bool $generateItineraryInvoice = false): self
    {
        // validation for constraint: boolean
        if (!is_null($generateItineraryInvoice) && !is_bool($generateItineraryInvoice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($generateItineraryInvoice, true), gettype($generateItineraryInvoice)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\DocumentModifiers
     */
    public function setGenerateAccountingInterface(?bool $generateAccountingInterface = false): self
    {
        // validation for constraint: boolean
        if (!is_null($generateAccountingInterface) && !is_bool($generateAccountingInterface)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($generateAccountingInterface, true), gettype($generateAccountingInterface)), __LINE__);
        }
        $this->GenerateAccountingInterface = $generateAccountingInterface;
        
        return $this;
    }
}
