<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PCC StructType
 * Meta information extracted from the WSDL
 * - documentation: Specify pseudo City
 * @subpackage Structs
 */
class PCC extends AbstractStructBase
{
    /**
     * The OverridePCC
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:OverridePCC
     * @var \Travelport\Util\StructType\OverridePCC|null
     */
    protected ?\Travelport\Util\StructType\OverridePCC $OverridePCC = null;
    /**
     * The PointOfSale
     * Meta information extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * - ref: common:PointOfSale
     * @var \Travelport\Util\StructType\PointOfSale[]
     */
    protected ?array $PointOfSale = null;
    /**
     * The TicketAgency
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: TicketAgency
     * @var \Travelport\Util\StructType\TicketAgency|null
     */
    protected ?\Travelport\Util\StructType\TicketAgency $TicketAgency = null;
    /**
     * Constructor method for PCC
     * @uses PCC::setOverridePCC()
     * @uses PCC::setPointOfSale()
     * @uses PCC::setTicketAgency()
     * @param \Travelport\Util\StructType\OverridePCC $overridePCC
     * @param \Travelport\Util\StructType\PointOfSale[] $pointOfSale
     * @param \Travelport\Util\StructType\TicketAgency $ticketAgency
     */
    public function __construct(?\Travelport\Util\StructType\OverridePCC $overridePCC = null, ?array $pointOfSale = null, ?\Travelport\Util\StructType\TicketAgency $ticketAgency = null)
    {
        $this
            ->setOverridePCC($overridePCC)
            ->setPointOfSale($pointOfSale)
            ->setTicketAgency($ticketAgency);
    }
    /**
     * Get OverridePCC value
     * @return \Travelport\Util\StructType\OverridePCC|null
     */
    public function getOverridePCC(): ?\Travelport\Util\StructType\OverridePCC
    {
        return $this->OverridePCC;
    }
    /**
     * Set OverridePCC value
     * @param \Travelport\Util\StructType\OverridePCC $overridePCC
     * @return \Travelport\Util\StructType\PCC
     */
    public function setOverridePCC(?\Travelport\Util\StructType\OverridePCC $overridePCC = null): self
    {
        $this->OverridePCC = $overridePCC;
        
        return $this;
    }
    /**
     * Get PointOfSale value
     * @return \Travelport\Util\StructType\PointOfSale[]
     */
    public function getPointOfSale(): ?array
    {
        return $this->PointOfSale;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPointOfSale method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPointOfSale method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePointOfSaleForArrayConstraintFromSetPointOfSale(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $pCCPointOfSaleItem) {
            // validation for constraint: itemType
            if (!$pCCPointOfSaleItem instanceof \Travelport\Util\StructType\PointOfSale) {
                $invalidValues[] = is_object($pCCPointOfSaleItem) ? get_class($pCCPointOfSaleItem) : sprintf('%s(%s)', gettype($pCCPointOfSaleItem), var_export($pCCPointOfSaleItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PointOfSale property can only contain items of type \Travelport\Util\StructType\PointOfSale, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PointOfSale value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\PointOfSale[] $pointOfSale
     * @return \Travelport\Util\StructType\PCC
     */
    public function setPointOfSale(?array $pointOfSale = null): self
    {
        // validation for constraint: array
        if ('' !== ($pointOfSaleArrayErrorMessage = self::validatePointOfSaleForArrayConstraintFromSetPointOfSale($pointOfSale))) {
            throw new InvalidArgumentException($pointOfSaleArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(5)
        if (is_array($pointOfSale) && count($pointOfSale) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 5', count($pointOfSale)), __LINE__);
        }
        $this->PointOfSale = $pointOfSale;
        
        return $this;
    }
    /**
     * Add item to PointOfSale value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\PointOfSale $item
     * @return \Travelport\Util\StructType\PCC
     */
    public function addToPointOfSale(\Travelport\Util\StructType\PointOfSale $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\PointOfSale) {
            throw new InvalidArgumentException(sprintf('The PointOfSale property can only contain items of type \Travelport\Util\StructType\PointOfSale, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(5)
        if (is_array($this->PointOfSale) && count($this->PointOfSale) >= 5) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 5', count($this->PointOfSale)), __LINE__);
        }
        $this->PointOfSale[] = $item;
        
        return $this;
    }
    /**
     * Get TicketAgency value
     * @return \Travelport\Util\StructType\TicketAgency|null
     */
    public function getTicketAgency(): ?\Travelport\Util\StructType\TicketAgency
    {
        return $this->TicketAgency;
    }
    /**
     * Set TicketAgency value
     * @param \Travelport\Util\StructType\TicketAgency $ticketAgency
     * @return \Travelport\Util\StructType\PCC
     */
    public function setTicketAgency(?\Travelport\Util\StructType\TicketAgency $ticketAgency = null): self
    {
        $this->TicketAgency = $ticketAgency;
        
        return $this;
    }
}
