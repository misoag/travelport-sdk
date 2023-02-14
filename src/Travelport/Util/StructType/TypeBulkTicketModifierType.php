<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeBulkTicketModifierType StructType
 * Meta information extracted from the WSDL
 * - documentation: Bulk ticketing modifier type.
 * @subpackage Structs
 */
class TypeBulkTicketModifierType extends AbstractStructBase
{
    /**
     * The SuppressOnFareCalc
     * Meta information extracted from the WSDL
     * - documentation: Optional attribute to allow a modifier impact such as Bulk Ticketing to have information suppressed on the Fare Calc when generating supporting documents Check the specific host system which may or may not support this function
     * - use: optional
     * @var bool|null
     */
    protected ?bool $SuppressOnFareCalc = null;
    /**
     * Constructor method for typeBulkTicketModifierType
     * @uses TypeBulkTicketModifierType::setSuppressOnFareCalc()
     * @param bool $suppressOnFareCalc
     */
    public function __construct(?bool $suppressOnFareCalc = null)
    {
        $this
            ->setSuppressOnFareCalc($suppressOnFareCalc);
    }
    /**
     * Get SuppressOnFareCalc value
     * @return bool|null
     */
    public function getSuppressOnFareCalc(): ?bool
    {
        return $this->SuppressOnFareCalc;
    }
    /**
     * Set SuppressOnFareCalc value
     * @param bool $suppressOnFareCalc
     * @return \Travelport\Util\StructType\TypeBulkTicketModifierType
     */
    public function setSuppressOnFareCalc(?bool $suppressOnFareCalc = null): self
    {
        // validation for constraint: boolean
        if (!is_null($suppressOnFareCalc) && !is_bool($suppressOnFareCalc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($suppressOnFareCalc, true), gettype($suppressOnFareCalc)), __LINE__);
        }
        $this->SuppressOnFareCalc = $suppressOnFareCalc;
        
        return $this;
    }
}
