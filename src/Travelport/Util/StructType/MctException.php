<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MctException StructType
 * Meta information extracted from the WSDL
 * - documentation: MCT Exception details
 * @subpackage Structs
 */
class MctException extends AbstractStructBase
{
    /**
     * The Time
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $Time;
    /**
     * The ArriveStation
     * Meta information extracted from the WSDL
     * - documentation: Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: required
     * - whiteSpace: collapse
     * @var string
     */
    protected string $ArriveStation;
    /**
     * The Connection
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $Connection;
    /**
     * The DepartStation
     * Meta information extracted from the WSDL
     * - documentation: Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $DepartStation = null;
    /**
     * The ArriveCarrier
     * Meta information extracted from the WSDL
     * - documentation: 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    protected ?string $ArriveCarrier = null;
    /**
     * The DepartCarrier
     * Meta information extracted from the WSDL
     * - documentation: 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    protected ?string $DepartCarrier = null;
    /**
     * The ArriveFlightRangeBegin
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $ArriveFlightRangeBegin = null;
    /**
     * The ArriveFlightRangeEnd
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $ArriveFlightRangeEnd = null;
    /**
     * The DepartFlightRangeBegin
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $DepartFlightRangeBegin = null;
    /**
     * The DepartFlightRangeEnd
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $DepartFlightRangeEnd = null;
    /**
     * The ArriveEquipment
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $ArriveEquipment = null;
    /**
     * The DepartEquipment
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $DepartEquipment = null;
    /**
     * The PreviousStation
     * Meta information extracted from the WSDL
     * - documentation: Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $PreviousStation = null;
    /**
     * The NextStation
     * Meta information extracted from the WSDL
     * - documentation: Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $NextStation = null;
    /**
     * The PreviousCountry
     * Meta information extracted from the WSDL
     * - documentation: 2 Letter Country code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    protected ?string $PreviousCountry = null;
    /**
     * The NextCountry
     * Meta information extracted from the WSDL
     * - documentation: 2 Letter Country code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    protected ?string $NextCountry = null;
    /**
     * The PreviousState
     * Meta information extracted from the WSDL
     * - documentation: Defines the State code.
     * - base: xs:string
     * - maxLength: 6
     * - use: optional
     * @var string|null
     */
    protected ?string $PreviousState = null;
    /**
     * The NextState
     * Meta information extracted from the WSDL
     * - documentation: Defines the State code.
     * - base: xs:string
     * - maxLength: 6
     * - use: optional
     * @var string|null
     */
    protected ?string $NextState = null;
    /**
     * The ArriveTerminal
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $ArriveTerminal = null;
    /**
     * The DepartTerminal
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $DepartTerminal = null;
    /**
     * The EffectiveDate
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $EffectiveDate = null;
    /**
     * The DiscontinueDate
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $DiscontinueDate = null;
    /**
     * Constructor method for MctException
     * @uses MctException::setTime()
     * @uses MctException::setArriveStation()
     * @uses MctException::setConnection()
     * @uses MctException::setDepartStation()
     * @uses MctException::setArriveCarrier()
     * @uses MctException::setDepartCarrier()
     * @uses MctException::setArriveFlightRangeBegin()
     * @uses MctException::setArriveFlightRangeEnd()
     * @uses MctException::setDepartFlightRangeBegin()
     * @uses MctException::setDepartFlightRangeEnd()
     * @uses MctException::setArriveEquipment()
     * @uses MctException::setDepartEquipment()
     * @uses MctException::setPreviousStation()
     * @uses MctException::setNextStation()
     * @uses MctException::setPreviousCountry()
     * @uses MctException::setNextCountry()
     * @uses MctException::setPreviousState()
     * @uses MctException::setNextState()
     * @uses MctException::setArriveTerminal()
     * @uses MctException::setDepartTerminal()
     * @uses MctException::setEffectiveDate()
     * @uses MctException::setDiscontinueDate()
     * @param int $time
     * @param string $arriveStation
     * @param string $connection
     * @param string $departStation
     * @param string $arriveCarrier
     * @param string $departCarrier
     * @param string $arriveFlightRangeBegin
     * @param string $arriveFlightRangeEnd
     * @param string $departFlightRangeBegin
     * @param string $departFlightRangeEnd
     * @param string $arriveEquipment
     * @param string $departEquipment
     * @param string $previousStation
     * @param string $nextStation
     * @param string $previousCountry
     * @param string $nextCountry
     * @param string $previousState
     * @param string $nextState
     * @param string $arriveTerminal
     * @param string $departTerminal
     * @param string $effectiveDate
     * @param string $discontinueDate
     */
    public function __construct(int $time, string $arriveStation, string $connection, ?string $departStation = null, ?string $arriveCarrier = null, ?string $departCarrier = null, ?string $arriveFlightRangeBegin = null, ?string $arriveFlightRangeEnd = null, ?string $departFlightRangeBegin = null, ?string $departFlightRangeEnd = null, ?string $arriveEquipment = null, ?string $departEquipment = null, ?string $previousStation = null, ?string $nextStation = null, ?string $previousCountry = null, ?string $nextCountry = null, ?string $previousState = null, ?string $nextState = null, ?string $arriveTerminal = null, ?string $departTerminal = null, ?string $effectiveDate = null, ?string $discontinueDate = null)
    {
        $this
            ->setTime($time)
            ->setArriveStation($arriveStation)
            ->setConnection($connection)
            ->setDepartStation($departStation)
            ->setArriveCarrier($arriveCarrier)
            ->setDepartCarrier($departCarrier)
            ->setArriveFlightRangeBegin($arriveFlightRangeBegin)
            ->setArriveFlightRangeEnd($arriveFlightRangeEnd)
            ->setDepartFlightRangeBegin($departFlightRangeBegin)
            ->setDepartFlightRangeEnd($departFlightRangeEnd)
            ->setArriveEquipment($arriveEquipment)
            ->setDepartEquipment($departEquipment)
            ->setPreviousStation($previousStation)
            ->setNextStation($nextStation)
            ->setPreviousCountry($previousCountry)
            ->setNextCountry($nextCountry)
            ->setPreviousState($previousState)
            ->setNextState($nextState)
            ->setArriveTerminal($arriveTerminal)
            ->setDepartTerminal($departTerminal)
            ->setEffectiveDate($effectiveDate)
            ->setDiscontinueDate($discontinueDate);
    }
    /**
     * Get Time value
     * @return int
     */
    public function getTime(): int
    {
        return $this->Time;
    }
    /**
     * Set Time value
     * @param int $time
     * @return \Travelport\Util\StructType\MctException
     */
    public function setTime(int $time): self
    {
        // validation for constraint: int
        if (!is_null($time) && !(is_int($time) || ctype_digit($time))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($time, true), gettype($time)), __LINE__);
        }
        $this->Time = $time;
        
        return $this;
    }
    /**
     * Get ArriveStation value
     * @return string
     */
    public function getArriveStation(): string
    {
        return $this->ArriveStation;
    }
    /**
     * Set ArriveStation value
     * @param string $arriveStation
     * @return \Travelport\Util\StructType\MctException
     */
    public function setArriveStation(string $arriveStation): self
    {
        // validation for constraint: string
        if (!is_null($arriveStation) && !is_string($arriveStation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arriveStation, true), gettype($arriveStation)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($arriveStation) && mb_strlen((string) $arriveStation) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $arriveStation)), __LINE__);
        }
        $this->ArriveStation = $arriveStation;
        
        return $this;
    }
    /**
     * Get Connection value
     * @return string
     */
    public function getConnection(): string
    {
        return $this->Connection;
    }
    /**
     * Set Connection value
     * @uses \Travelport\Util\EnumType\TypeMctConnection::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeMctConnection::getValidValues()
     * @throws InvalidArgumentException
     * @param string $connection
     * @return \Travelport\Util\StructType\MctException
     */
    public function setConnection(string $connection): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeMctConnection::valueIsValid($connection)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeMctConnection', is_array($connection) ? implode(', ', $connection) : var_export($connection, true), implode(', ', \Travelport\Util\EnumType\TypeMctConnection::getValidValues())), __LINE__);
        }
        $this->Connection = $connection;
        
        return $this;
    }
    /**
     * Get DepartStation value
     * @return string|null
     */
    public function getDepartStation(): ?string
    {
        return $this->DepartStation;
    }
    /**
     * Set DepartStation value
     * @param string $departStation
     * @return \Travelport\Util\StructType\MctException
     */
    public function setDepartStation(?string $departStation = null): self
    {
        // validation for constraint: string
        if (!is_null($departStation) && !is_string($departStation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departStation, true), gettype($departStation)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($departStation) && mb_strlen((string) $departStation) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $departStation)), __LINE__);
        }
        $this->DepartStation = $departStation;
        
        return $this;
    }
    /**
     * Get ArriveCarrier value
     * @return string|null
     */
    public function getArriveCarrier(): ?string
    {
        return $this->ArriveCarrier;
    }
    /**
     * Set ArriveCarrier value
     * @param string $arriveCarrier
     * @return \Travelport\Util\StructType\MctException
     */
    public function setArriveCarrier(?string $arriveCarrier = null): self
    {
        // validation for constraint: string
        if (!is_null($arriveCarrier) && !is_string($arriveCarrier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arriveCarrier, true), gettype($arriveCarrier)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($arriveCarrier) && mb_strlen((string) $arriveCarrier) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $arriveCarrier)), __LINE__);
        }
        $this->ArriveCarrier = $arriveCarrier;
        
        return $this;
    }
    /**
     * Get DepartCarrier value
     * @return string|null
     */
    public function getDepartCarrier(): ?string
    {
        return $this->DepartCarrier;
    }
    /**
     * Set DepartCarrier value
     * @param string $departCarrier
     * @return \Travelport\Util\StructType\MctException
     */
    public function setDepartCarrier(?string $departCarrier = null): self
    {
        // validation for constraint: string
        if (!is_null($departCarrier) && !is_string($departCarrier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departCarrier, true), gettype($departCarrier)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($departCarrier) && mb_strlen((string) $departCarrier) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $departCarrier)), __LINE__);
        }
        $this->DepartCarrier = $departCarrier;
        
        return $this;
    }
    /**
     * Get ArriveFlightRangeBegin value
     * @return string|null
     */
    public function getArriveFlightRangeBegin(): ?string
    {
        return $this->ArriveFlightRangeBegin;
    }
    /**
     * Set ArriveFlightRangeBegin value
     * @param string $arriveFlightRangeBegin
     * @return \Travelport\Util\StructType\MctException
     */
    public function setArriveFlightRangeBegin(?string $arriveFlightRangeBegin = null): self
    {
        // validation for constraint: string
        if (!is_null($arriveFlightRangeBegin) && !is_string($arriveFlightRangeBegin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arriveFlightRangeBegin, true), gettype($arriveFlightRangeBegin)), __LINE__);
        }
        $this->ArriveFlightRangeBegin = $arriveFlightRangeBegin;
        
        return $this;
    }
    /**
     * Get ArriveFlightRangeEnd value
     * @return string|null
     */
    public function getArriveFlightRangeEnd(): ?string
    {
        return $this->ArriveFlightRangeEnd;
    }
    /**
     * Set ArriveFlightRangeEnd value
     * @param string $arriveFlightRangeEnd
     * @return \Travelport\Util\StructType\MctException
     */
    public function setArriveFlightRangeEnd(?string $arriveFlightRangeEnd = null): self
    {
        // validation for constraint: string
        if (!is_null($arriveFlightRangeEnd) && !is_string($arriveFlightRangeEnd)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arriveFlightRangeEnd, true), gettype($arriveFlightRangeEnd)), __LINE__);
        }
        $this->ArriveFlightRangeEnd = $arriveFlightRangeEnd;
        
        return $this;
    }
    /**
     * Get DepartFlightRangeBegin value
     * @return string|null
     */
    public function getDepartFlightRangeBegin(): ?string
    {
        return $this->DepartFlightRangeBegin;
    }
    /**
     * Set DepartFlightRangeBegin value
     * @param string $departFlightRangeBegin
     * @return \Travelport\Util\StructType\MctException
     */
    public function setDepartFlightRangeBegin(?string $departFlightRangeBegin = null): self
    {
        // validation for constraint: string
        if (!is_null($departFlightRangeBegin) && !is_string($departFlightRangeBegin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departFlightRangeBegin, true), gettype($departFlightRangeBegin)), __LINE__);
        }
        $this->DepartFlightRangeBegin = $departFlightRangeBegin;
        
        return $this;
    }
    /**
     * Get DepartFlightRangeEnd value
     * @return string|null
     */
    public function getDepartFlightRangeEnd(): ?string
    {
        return $this->DepartFlightRangeEnd;
    }
    /**
     * Set DepartFlightRangeEnd value
     * @param string $departFlightRangeEnd
     * @return \Travelport\Util\StructType\MctException
     */
    public function setDepartFlightRangeEnd(?string $departFlightRangeEnd = null): self
    {
        // validation for constraint: string
        if (!is_null($departFlightRangeEnd) && !is_string($departFlightRangeEnd)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departFlightRangeEnd, true), gettype($departFlightRangeEnd)), __LINE__);
        }
        $this->DepartFlightRangeEnd = $departFlightRangeEnd;
        
        return $this;
    }
    /**
     * Get ArriveEquipment value
     * @return string|null
     */
    public function getArriveEquipment(): ?string
    {
        return $this->ArriveEquipment;
    }
    /**
     * Set ArriveEquipment value
     * @param string $arriveEquipment
     * @return \Travelport\Util\StructType\MctException
     */
    public function setArriveEquipment(?string $arriveEquipment = null): self
    {
        // validation for constraint: string
        if (!is_null($arriveEquipment) && !is_string($arriveEquipment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arriveEquipment, true), gettype($arriveEquipment)), __LINE__);
        }
        $this->ArriveEquipment = $arriveEquipment;
        
        return $this;
    }
    /**
     * Get DepartEquipment value
     * @return string|null
     */
    public function getDepartEquipment(): ?string
    {
        return $this->DepartEquipment;
    }
    /**
     * Set DepartEquipment value
     * @param string $departEquipment
     * @return \Travelport\Util\StructType\MctException
     */
    public function setDepartEquipment(?string $departEquipment = null): self
    {
        // validation for constraint: string
        if (!is_null($departEquipment) && !is_string($departEquipment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departEquipment, true), gettype($departEquipment)), __LINE__);
        }
        $this->DepartEquipment = $departEquipment;
        
        return $this;
    }
    /**
     * Get PreviousStation value
     * @return string|null
     */
    public function getPreviousStation(): ?string
    {
        return $this->PreviousStation;
    }
    /**
     * Set PreviousStation value
     * @param string $previousStation
     * @return \Travelport\Util\StructType\MctException
     */
    public function setPreviousStation(?string $previousStation = null): self
    {
        // validation for constraint: string
        if (!is_null($previousStation) && !is_string($previousStation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($previousStation, true), gettype($previousStation)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($previousStation) && mb_strlen((string) $previousStation) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $previousStation)), __LINE__);
        }
        $this->PreviousStation = $previousStation;
        
        return $this;
    }
    /**
     * Get NextStation value
     * @return string|null
     */
    public function getNextStation(): ?string
    {
        return $this->NextStation;
    }
    /**
     * Set NextStation value
     * @param string $nextStation
     * @return \Travelport\Util\StructType\MctException
     */
    public function setNextStation(?string $nextStation = null): self
    {
        // validation for constraint: string
        if (!is_null($nextStation) && !is_string($nextStation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nextStation, true), gettype($nextStation)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($nextStation) && mb_strlen((string) $nextStation) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $nextStation)), __LINE__);
        }
        $this->NextStation = $nextStation;
        
        return $this;
    }
    /**
     * Get PreviousCountry value
     * @return string|null
     */
    public function getPreviousCountry(): ?string
    {
        return $this->PreviousCountry;
    }
    /**
     * Set PreviousCountry value
     * @param string $previousCountry
     * @return \Travelport\Util\StructType\MctException
     */
    public function setPreviousCountry(?string $previousCountry = null): self
    {
        // validation for constraint: string
        if (!is_null($previousCountry) && !is_string($previousCountry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($previousCountry, true), gettype($previousCountry)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($previousCountry) && mb_strlen((string) $previousCountry) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $previousCountry)), __LINE__);
        }
        $this->PreviousCountry = $previousCountry;
        
        return $this;
    }
    /**
     * Get NextCountry value
     * @return string|null
     */
    public function getNextCountry(): ?string
    {
        return $this->NextCountry;
    }
    /**
     * Set NextCountry value
     * @param string $nextCountry
     * @return \Travelport\Util\StructType\MctException
     */
    public function setNextCountry(?string $nextCountry = null): self
    {
        // validation for constraint: string
        if (!is_null($nextCountry) && !is_string($nextCountry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nextCountry, true), gettype($nextCountry)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($nextCountry) && mb_strlen((string) $nextCountry) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $nextCountry)), __LINE__);
        }
        $this->NextCountry = $nextCountry;
        
        return $this;
    }
    /**
     * Get PreviousState value
     * @return string|null
     */
    public function getPreviousState(): ?string
    {
        return $this->PreviousState;
    }
    /**
     * Set PreviousState value
     * @param string $previousState
     * @return \Travelport\Util\StructType\MctException
     */
    public function setPreviousState(?string $previousState = null): self
    {
        // validation for constraint: string
        if (!is_null($previousState) && !is_string($previousState)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($previousState, true), gettype($previousState)), __LINE__);
        }
        // validation for constraint: maxLength(6)
        if (!is_null($previousState) && mb_strlen((string) $previousState) > 6) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 6', mb_strlen((string) $previousState)), __LINE__);
        }
        $this->PreviousState = $previousState;
        
        return $this;
    }
    /**
     * Get NextState value
     * @return string|null
     */
    public function getNextState(): ?string
    {
        return $this->NextState;
    }
    /**
     * Set NextState value
     * @param string $nextState
     * @return \Travelport\Util\StructType\MctException
     */
    public function setNextState(?string $nextState = null): self
    {
        // validation for constraint: string
        if (!is_null($nextState) && !is_string($nextState)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nextState, true), gettype($nextState)), __LINE__);
        }
        // validation for constraint: maxLength(6)
        if (!is_null($nextState) && mb_strlen((string) $nextState) > 6) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 6', mb_strlen((string) $nextState)), __LINE__);
        }
        $this->NextState = $nextState;
        
        return $this;
    }
    /**
     * Get ArriveTerminal value
     * @return string|null
     */
    public function getArriveTerminal(): ?string
    {
        return $this->ArriveTerminal;
    }
    /**
     * Set ArriveTerminal value
     * @param string $arriveTerminal
     * @return \Travelport\Util\StructType\MctException
     */
    public function setArriveTerminal(?string $arriveTerminal = null): self
    {
        // validation for constraint: string
        if (!is_null($arriveTerminal) && !is_string($arriveTerminal)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arriveTerminal, true), gettype($arriveTerminal)), __LINE__);
        }
        $this->ArriveTerminal = $arriveTerminal;
        
        return $this;
    }
    /**
     * Get DepartTerminal value
     * @return string|null
     */
    public function getDepartTerminal(): ?string
    {
        return $this->DepartTerminal;
    }
    /**
     * Set DepartTerminal value
     * @param string $departTerminal
     * @return \Travelport\Util\StructType\MctException
     */
    public function setDepartTerminal(?string $departTerminal = null): self
    {
        // validation for constraint: string
        if (!is_null($departTerminal) && !is_string($departTerminal)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departTerminal, true), gettype($departTerminal)), __LINE__);
        }
        $this->DepartTerminal = $departTerminal;
        
        return $this;
    }
    /**
     * Get EffectiveDate value
     * @return string|null
     */
    public function getEffectiveDate(): ?string
    {
        return $this->EffectiveDate;
    }
    /**
     * Set EffectiveDate value
     * @param string $effectiveDate
     * @return \Travelport\Util\StructType\MctException
     */
    public function setEffectiveDate(?string $effectiveDate = null): self
    {
        // validation for constraint: string
        if (!is_null($effectiveDate) && !is_string($effectiveDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($effectiveDate, true), gettype($effectiveDate)), __LINE__);
        }
        $this->EffectiveDate = $effectiveDate;
        
        return $this;
    }
    /**
     * Get DiscontinueDate value
     * @return string|null
     */
    public function getDiscontinueDate(): ?string
    {
        return $this->DiscontinueDate;
    }
    /**
     * Set DiscontinueDate value
     * @param string $discontinueDate
     * @return \Travelport\Util\StructType\MctException
     */
    public function setDiscontinueDate(?string $discontinueDate = null): self
    {
        // validation for constraint: string
        if (!is_null($discontinueDate) && !is_string($discontinueDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($discontinueDate, true), gettype($discontinueDate)), __LINE__);
        }
        $this->DiscontinueDate = $discontinueDate;
        
        return $this;
    }
}
