<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocumentInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Container for the document information summary line.
 * @subpackage Structs
 */
class DocumentInfo extends AbstractStructBase
{
    /**
     * The TicketInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: TicketInfo
     * @var \Travelport\UniversalRecord\StructType\TicketInfo[]
     */
    protected ?array $TicketInfo = null;
    /**
     * The MCOInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\MCOInformation[]
     */
    protected ?array $MCOInfo = null;
    /**
     * The TCRInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: TCRInfo
     * @var \Travelport\UniversalRecord\StructType\TCRInfo[]
     */
    protected ?array $TCRInfo = null;
    /**
     * Constructor method for DocumentInfo
     * @uses DocumentInfo::setTicketInfo()
     * @uses DocumentInfo::setMCOInfo()
     * @uses DocumentInfo::setTCRInfo()
     * @param \Travelport\UniversalRecord\StructType\TicketInfo[] $ticketInfo
     * @param \Travelport\UniversalRecord\StructType\MCOInformation[] $mCOInfo
     * @param \Travelport\UniversalRecord\StructType\TCRInfo[] $tCRInfo
     */
    public function __construct(?array $ticketInfo = null, ?array $mCOInfo = null, ?array $tCRInfo = null)
    {
        $this
            ->setTicketInfo($ticketInfo)
            ->setMCOInfo($mCOInfo)
            ->setTCRInfo($tCRInfo);
    }
    /**
     * Get TicketInfo value
     * @return \Travelport\UniversalRecord\StructType\TicketInfo[]
     */
    public function getTicketInfo(): ?array
    {
        return $this->TicketInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setTicketInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTicketInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTicketInfoForArrayConstraintsFromSetTicketInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $documentInfoTicketInfoItem) {
            // validation for constraint: itemType
            if (!$documentInfoTicketInfoItem instanceof \Travelport\UniversalRecord\StructType\TicketInfo) {
                $invalidValues[] = is_object($documentInfoTicketInfoItem) ? get_class($documentInfoTicketInfoItem) : sprintf('%s(%s)', gettype($documentInfoTicketInfoItem), var_export($documentInfoTicketInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TicketInfo property can only contain items of type \Travelport\UniversalRecord\StructType\TicketInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TicketInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TicketInfo[] $ticketInfo
     * @return \Travelport\UniversalRecord\StructType\DocumentInfo
     */
    public function setTicketInfo(?array $ticketInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($ticketInfoArrayErrorMessage = self::validateTicketInfoForArrayConstraintsFromSetTicketInfo($ticketInfo))) {
            throw new InvalidArgumentException($ticketInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($ticketInfo) && count($ticketInfo) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($ticketInfo)), __LINE__);
        }
        $this->TicketInfo = $ticketInfo;
        
        return $this;
    }
    /**
     * Add item to TicketInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TicketInfo $item
     * @return \Travelport\UniversalRecord\StructType\DocumentInfo
     */
    public function addToTicketInfo(\Travelport\UniversalRecord\StructType\TicketInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\TicketInfo) {
            throw new InvalidArgumentException(sprintf('The TicketInfo property can only contain items of type \Travelport\UniversalRecord\StructType\TicketInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->TicketInfo) && count($this->TicketInfo) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->TicketInfo)), __LINE__);
        }
        $this->TicketInfo[] = $item;
        
        return $this;
    }
    /**
     * Get MCOInfo value
     * @return \Travelport\UniversalRecord\StructType\MCOInformation[]
     */
    public function getMCOInfo(): ?array
    {
        return $this->MCOInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setMCOInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMCOInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMCOInfoForArrayConstraintsFromSetMCOInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $documentInfoMCOInfoItem) {
            // validation for constraint: itemType
            if (!$documentInfoMCOInfoItem instanceof \Travelport\UniversalRecord\StructType\MCOInformation) {
                $invalidValues[] = is_object($documentInfoMCOInfoItem) ? get_class($documentInfoMCOInfoItem) : sprintf('%s(%s)', gettype($documentInfoMCOInfoItem), var_export($documentInfoMCOInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MCOInfo property can only contain items of type \Travelport\UniversalRecord\StructType\MCOInformation, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MCOInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\MCOInformation[] $mCOInfo
     * @return \Travelport\UniversalRecord\StructType\DocumentInfo
     */
    public function setMCOInfo(?array $mCOInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($mCOInfoArrayErrorMessage = self::validateMCOInfoForArrayConstraintsFromSetMCOInfo($mCOInfo))) {
            throw new InvalidArgumentException($mCOInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($mCOInfo) && count($mCOInfo) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($mCOInfo)), __LINE__);
        }
        $this->MCOInfo = $mCOInfo;
        
        return $this;
    }
    /**
     * Add item to MCOInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\MCOInformation $item
     * @return \Travelport\UniversalRecord\StructType\DocumentInfo
     */
    public function addToMCOInfo(\Travelport\UniversalRecord\StructType\MCOInformation $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\MCOInformation) {
            throw new InvalidArgumentException(sprintf('The MCOInfo property can only contain items of type \Travelport\UniversalRecord\StructType\MCOInformation, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->MCOInfo) && count($this->MCOInfo) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->MCOInfo)), __LINE__);
        }
        $this->MCOInfo[] = $item;
        
        return $this;
    }
    /**
     * Get TCRInfo value
     * @return \Travelport\UniversalRecord\StructType\TCRInfo[]
     */
    public function getTCRInfo(): ?array
    {
        return $this->TCRInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setTCRInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTCRInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTCRInfoForArrayConstraintsFromSetTCRInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $documentInfoTCRInfoItem) {
            // validation for constraint: itemType
            if (!$documentInfoTCRInfoItem instanceof \Travelport\UniversalRecord\StructType\TCRInfo) {
                $invalidValues[] = is_object($documentInfoTCRInfoItem) ? get_class($documentInfoTCRInfoItem) : sprintf('%s(%s)', gettype($documentInfoTCRInfoItem), var_export($documentInfoTCRInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TCRInfo property can only contain items of type \Travelport\UniversalRecord\StructType\TCRInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TCRInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TCRInfo[] $tCRInfo
     * @return \Travelport\UniversalRecord\StructType\DocumentInfo
     */
    public function setTCRInfo(?array $tCRInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($tCRInfoArrayErrorMessage = self::validateTCRInfoForArrayConstraintsFromSetTCRInfo($tCRInfo))) {
            throw new InvalidArgumentException($tCRInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($tCRInfo) && count($tCRInfo) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($tCRInfo)), __LINE__);
        }
        $this->TCRInfo = $tCRInfo;
        
        return $this;
    }
    /**
     * Add item to TCRInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TCRInfo $item
     * @return \Travelport\UniversalRecord\StructType\DocumentInfo
     */
    public function addToTCRInfo(\Travelport\UniversalRecord\StructType\TCRInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\TCRInfo) {
            throw new InvalidArgumentException(sprintf('The TCRInfo property can only contain items of type \Travelport\UniversalRecord\StructType\TCRInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->TCRInfo) && count($this->TCRInfo) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->TCRInfo)), __LINE__);
        }
        $this->TCRInfo[] = $item;
        
        return $this;
    }
}
