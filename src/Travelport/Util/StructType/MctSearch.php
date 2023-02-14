<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MctSearch StructType
 * Meta information extracted from the WSDL
 * - documentation: Search the MCT data for exceptions
 * @subpackage Structs
 */
class MctSearch extends AbstractStructBase
{
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
     * The Connection
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $Connection = null;
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
     * The ArriveFlight
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $ArriveFlight = null;
    /**
     * The DepartFlight
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $DepartFlight = null;
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
     * The TravelDate
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $TravelDate = null;
    /**
     * Constructor method for MctSearch
     * @uses MctSearch::setArriveStation()
     * @uses MctSearch::setDepartStation()
     * @uses MctSearch::setConnection()
     * @uses MctSearch::setArriveCarrier()
     * @uses MctSearch::setDepartCarrier()
     * @uses MctSearch::setArriveFlight()
     * @uses MctSearch::setDepartFlight()
     * @uses MctSearch::setPreviousStation()
     * @uses MctSearch::setNextStation()
     * @uses MctSearch::setPreviousCountry()
     * @uses MctSearch::setNextCountry()
     * @uses MctSearch::setPreviousState()
     * @uses MctSearch::setNextState()
     * @uses MctSearch::setTravelDate()
     * @param string $arriveStation
     * @param string $departStation
     * @param string $connection
     * @param string $arriveCarrier
     * @param string $departCarrier
     * @param string $arriveFlight
     * @param string $departFlight
     * @param string $previousStation
     * @param string $nextStation
     * @param string $previousCountry
     * @param string $nextCountry
     * @param string $previousState
     * @param string $nextState
     * @param string $travelDate
     */
    public function __construct(string $arriveStation, ?string $departStation = null, ?string $connection = null, ?string $arriveCarrier = null, ?string $departCarrier = null, ?string $arriveFlight = null, ?string $departFlight = null, ?string $previousStation = null, ?string $nextStation = null, ?string $previousCountry = null, ?string $nextCountry = null, ?string $previousState = null, ?string $nextState = null, ?string $travelDate = null)
    {
        $this
            ->setArriveStation($arriveStation)
            ->setDepartStation($departStation)
            ->setConnection($connection)
            ->setArriveCarrier($arriveCarrier)
            ->setDepartCarrier($departCarrier)
            ->setArriveFlight($arriveFlight)
            ->setDepartFlight($departFlight)
            ->setPreviousStation($previousStation)
            ->setNextStation($nextStation)
            ->setPreviousCountry($previousCountry)
            ->setNextCountry($nextCountry)
            ->setPreviousState($previousState)
            ->setNextState($nextState)
            ->setTravelDate($travelDate);
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
     * @return \Travelport\Util\StructType\MctSearch
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
     * @return \Travelport\Util\StructType\MctSearch
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
     * Get Connection value
     * @return string|null
     */
    public function getConnection(): ?string
    {
        return $this->Connection;
    }
    /**
     * Set Connection value
     * @uses \Travelport\Util\EnumType\TypeMctConnection::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeMctConnection::getValidValues()
     * @throws InvalidArgumentException
     * @param string $connection
     * @return \Travelport\Util\StructType\MctSearch
     */
    public function setConnection(?string $connection = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeMctConnection::valueIsValid($connection)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeMctConnection', is_array($connection) ? implode(', ', $connection) : var_export($connection, true), implode(', ', \Travelport\Util\EnumType\TypeMctConnection::getValidValues())), __LINE__);
        }
        $this->Connection = $connection;
        
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
     * @return \Travelport\Util\StructType\MctSearch
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
     * @return \Travelport\Util\StructType\MctSearch
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
     * Get ArriveFlight value
     * @return string|null
     */
    public function getArriveFlight(): ?string
    {
        return $this->ArriveFlight;
    }
    /**
     * Set ArriveFlight value
     * @param string $arriveFlight
     * @return \Travelport\Util\StructType\MctSearch
     */
    public function setArriveFlight(?string $arriveFlight = null): self
    {
        // validation for constraint: string
        if (!is_null($arriveFlight) && !is_string($arriveFlight)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arriveFlight, true), gettype($arriveFlight)), __LINE__);
        }
        $this->ArriveFlight = $arriveFlight;
        
        return $this;
    }
    /**
     * Get DepartFlight value
     * @return string|null
     */
    public function getDepartFlight(): ?string
    {
        return $this->DepartFlight;
    }
    /**
     * Set DepartFlight value
     * @param string $departFlight
     * @return \Travelport\Util\StructType\MctSearch
     */
    public function setDepartFlight(?string $departFlight = null): self
    {
        // validation for constraint: string
        if (!is_null($departFlight) && !is_string($departFlight)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departFlight, true), gettype($departFlight)), __LINE__);
        }
        $this->DepartFlight = $departFlight;
        
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
     * @return \Travelport\Util\StructType\MctSearch
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
     * @return \Travelport\Util\StructType\MctSearch
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
     * @return \Travelport\Util\StructType\MctSearch
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
     * @return \Travelport\Util\StructType\MctSearch
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
     * @return \Travelport\Util\StructType\MctSearch
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
     * @return \Travelport\Util\StructType\MctSearch
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
     * Get TravelDate value
     * @return string|null
     */
    public function getTravelDate(): ?string
    {
        return $this->TravelDate;
    }
    /**
     * Set TravelDate value
     * @param string $travelDate
     * @return \Travelport\Util\StructType\MctSearch
     */
    public function setTravelDate(?string $travelDate = null): self
    {
        // validation for constraint: string
        if (!is_null($travelDate) && !is_string($travelDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelDate, true), gettype($travelDate)), __LINE__);
        }
        $this->TravelDate = $travelDate;
        
        return $this;
    }
}
