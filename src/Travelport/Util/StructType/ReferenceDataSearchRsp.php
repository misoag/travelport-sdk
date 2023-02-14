<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReferenceDataSearchRsp StructType
 * Meta information extracted from the WSDL
 * - documentation: Response the sought reference data item
 * @subpackage Structs
 */
class ReferenceDataSearchRsp extends BaseRsp
{
    /**
     * The Airport
     * Meta information extracted from the WSDL
     * - choice: Airport | Carrier | City | Country | Currency | Equipment | PassengerType | State | SsrType
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\Airport[]
     */
    protected ?array $Airport = null;
    /**
     * The Carrier
     * Meta information extracted from the WSDL
     * - choice: Airport | Carrier | City | Country | Currency | Equipment | PassengerType | State | SsrType
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\Carrier[]
     */
    protected ?array $Carrier = null;
    /**
     * The City
     * Meta information extracted from the WSDL
     * - choice: Airport | Carrier | City | Country | Currency | Equipment | PassengerType | State | SsrType
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\City[]
     */
    protected ?array $City = null;
    /**
     * The Country
     * Meta information extracted from the WSDL
     * - choice: Airport | Carrier | City | Country | Currency | Equipment | PassengerType | State | SsrType
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\Country[]
     */
    protected ?array $Country = null;
    /**
     * The Currency
     * Meta information extracted from the WSDL
     * - choice: Airport | Carrier | City | Country | Currency | Equipment | PassengerType | State | SsrType
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\Currency[]
     */
    protected ?array $Currency = null;
    /**
     * The Equipment
     * Meta information extracted from the WSDL
     * - choice: Airport | Carrier | City | Country | Currency | Equipment | PassengerType | State | SsrType
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\Equipment[]
     */
    protected ?array $Equipment = null;
    /**
     * The PassengerType
     * Meta information extracted from the WSDL
     * - choice: Airport | Carrier | City | Country | Currency | Equipment | PassengerType | State | SsrType
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\PassengerType[]
     */
    protected ?array $PassengerType = null;
    /**
     * The State
     * Meta information extracted from the WSDL
     * - choice: Airport | Carrier | City | Country | Currency | Equipment | PassengerType | State | SsrType
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\State[]
     */
    protected ?array $State = null;
    /**
     * The SsrType
     * Meta information extracted from the WSDL
     * - choice: Airport | Carrier | City | Country | Currency | Equipment | PassengerType | State | SsrType
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\SsrType[]
     */
    protected ?array $SsrType = null;
    /**
     * Constructor method for ReferenceDataSearchRsp
     * @uses ReferenceDataSearchRsp::setAirport()
     * @uses ReferenceDataSearchRsp::setCarrier()
     * @uses ReferenceDataSearchRsp::setCity()
     * @uses ReferenceDataSearchRsp::setCountry()
     * @uses ReferenceDataSearchRsp::setCurrency()
     * @uses ReferenceDataSearchRsp::setEquipment()
     * @uses ReferenceDataSearchRsp::setPassengerType()
     * @uses ReferenceDataSearchRsp::setState()
     * @uses ReferenceDataSearchRsp::setSsrType()
     * @param \Travelport\Util\StructType\Airport[] $airport
     * @param \Travelport\Util\StructType\Carrier[] $carrier
     * @param \Travelport\Util\StructType\City[] $city
     * @param \Travelport\Util\StructType\Country[] $country
     * @param \Travelport\Util\StructType\Currency[] $currency
     * @param \Travelport\Util\StructType\Equipment[] $equipment
     * @param \Travelport\Util\StructType\PassengerType[] $passengerType
     * @param \Travelport\Util\StructType\State[] $state
     * @param \Travelport\Util\StructType\SsrType[] $ssrType
     */
    public function __construct(?array $airport = null, ?array $carrier = null, ?array $city = null, ?array $country = null, ?array $currency = null, ?array $equipment = null, ?array $passengerType = null, ?array $state = null, ?array $ssrType = null)
    {
        $this
            ->setAirport($airport)
            ->setCarrier($carrier)
            ->setCity($city)
            ->setCountry($country)
            ->setCurrency($currency)
            ->setEquipment($equipment)
            ->setPassengerType($passengerType)
            ->setState($state)
            ->setSsrType($ssrType);
    }
    /**
     * Get Airport value
     * @return \Travelport\Util\StructType\Airport[]
     */
    public function getAirport(): ?array
    {
        return isset($this->Airport) ? $this->Airport : null;
    }
    /**
     * This method is responsible for validating the values passed to the setAirport method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirport method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAirportForArrayConstraintsFromSetAirport(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $referenceDataSearchRspAirportItem) {
            // validation for constraint: itemType
            if (!$referenceDataSearchRspAirportItem instanceof \Travelport\Util\StructType\Airport) {
                $invalidValues[] = is_object($referenceDataSearchRspAirportItem) ? get_class($referenceDataSearchRspAirportItem) : sprintf('%s(%s)', gettype($referenceDataSearchRspAirportItem), var_export($referenceDataSearchRspAirportItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Airport property can only contain items of type \Travelport\Util\StructType\Airport, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setAirport method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirport method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateAirportForChoiceConstraintsFromSetAirport($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Carrier',
            'City',
            'Country',
            'Currency',
            'Equipment',
            'PassengerType',
            'State',
            'SsrType',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property Airport can\'t be set as the property %s is already set. Only one property must be set among these properties: Airport, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set Airport value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\Airport[] $airport
     * @return \Travelport\Util\StructType\ReferenceDataSearchRsp
     */
    public function setAirport(?array $airport = null): self
    {
        // validation for constraint: array
        if ('' !== ($airportArrayErrorMessage = self::validateAirportForArrayConstraintsFromSetAirport($airport))) {
            throw new InvalidArgumentException($airportArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(Airport, Carrier, City, Country, Currency, Equipment, PassengerType, State, SsrType)
        if ('' !== ($airportChoiceErrorMessage = self::validateAirportForChoiceConstraintsFromSetAirport($airport))) {
            throw new InvalidArgumentException($airportChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($airport) && count($airport) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($airport)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($airport) && count($airport) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($airport)), __LINE__);
        }
        if (is_null($airport) || (is_array($airport) && empty($airport))) {
            unset($this->Airport);
        } else {
            $this->Airport = $airport;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value passed to the addToAirport method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToAirport method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintsFromAddToAirport($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Carrier',
            'City',
            'Country',
            'Currency',
            'Equipment',
            'PassengerType',
            'State',
            'SsrType',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property Airport can\'t be set as the property %s is already set. Only one property must be set among these properties: Airport, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to Airport value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\Airport $item
     * @return \Travelport\Util\StructType\ReferenceDataSearchRsp
     */
    public function addToAirport(\Travelport\Util\StructType\Airport $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\Airport) {
            throw new InvalidArgumentException(sprintf('The Airport property can only contain items of type \Travelport\Util\StructType\Airport, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(Airport, Carrier, City, Country, Currency, Equipment, PassengerType, State, SsrType)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintsFromAddToAirport($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->Airport) && count($this->Airport) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->Airport)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Airport) && count($this->Airport) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Airport)), __LINE__);
        }
        $this->Airport[] = $item;
        
        return $this;
    }
    /**
     * Get Carrier value
     * @return \Travelport\Util\StructType\Carrier[]
     */
    public function getCarrier(): ?array
    {
        return isset($this->Carrier) ? $this->Carrier : null;
    }
    /**
     * This method is responsible for validating the values passed to the setCarrier method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCarrier method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCarrierForArrayConstraintsFromSetCarrier(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $referenceDataSearchRspCarrierItem) {
            // validation for constraint: itemType
            if (!$referenceDataSearchRspCarrierItem instanceof \Travelport\Util\StructType\Carrier) {
                $invalidValues[] = is_object($referenceDataSearchRspCarrierItem) ? get_class($referenceDataSearchRspCarrierItem) : sprintf('%s(%s)', gettype($referenceDataSearchRspCarrierItem), var_export($referenceDataSearchRspCarrierItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Carrier property can only contain items of type \Travelport\Util\StructType\Carrier, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setCarrier method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCarrier method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateCarrierForChoiceConstraintsFromSetCarrier($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Airport',
            'City',
            'Country',
            'Currency',
            'Equipment',
            'PassengerType',
            'State',
            'SsrType',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property Carrier can\'t be set as the property %s is already set. Only one property must be set among these properties: Carrier, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set Carrier value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\Carrier[] $carrier
     * @return \Travelport\Util\StructType\ReferenceDataSearchRsp
     */
    public function setCarrier(?array $carrier = null): self
    {
        // validation for constraint: array
        if ('' !== ($carrierArrayErrorMessage = self::validateCarrierForArrayConstraintsFromSetCarrier($carrier))) {
            throw new InvalidArgumentException($carrierArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(Airport, Carrier, City, Country, Currency, Equipment, PassengerType, State, SsrType)
        if ('' !== ($carrierChoiceErrorMessage = self::validateCarrierForChoiceConstraintsFromSetCarrier($carrier))) {
            throw new InvalidArgumentException($carrierChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($carrier) && count($carrier) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($carrier)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($carrier) && count($carrier) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($carrier)), __LINE__);
        }
        if (is_null($carrier) || (is_array($carrier) && empty($carrier))) {
            unset($this->Carrier);
        } else {
            $this->Carrier = $carrier;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value passed to the addToCarrier method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToCarrier method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintsFromAddToCarrier($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Airport',
            'City',
            'Country',
            'Currency',
            'Equipment',
            'PassengerType',
            'State',
            'SsrType',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property Carrier can\'t be set as the property %s is already set. Only one property must be set among these properties: Carrier, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to Carrier value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\Carrier $item
     * @return \Travelport\Util\StructType\ReferenceDataSearchRsp
     */
    public function addToCarrier(\Travelport\Util\StructType\Carrier $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\Carrier) {
            throw new InvalidArgumentException(sprintf('The Carrier property can only contain items of type \Travelport\Util\StructType\Carrier, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(Airport, Carrier, City, Country, Currency, Equipment, PassengerType, State, SsrType)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintsFromAddToCarrier($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->Carrier) && count($this->Carrier) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->Carrier)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Carrier) && count($this->Carrier) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Carrier)), __LINE__);
        }
        $this->Carrier[] = $item;
        
        return $this;
    }
    /**
     * Get City value
     * @return \Travelport\Util\StructType\City[]
     */
    public function getCity(): ?array
    {
        return isset($this->City) ? $this->City : null;
    }
    /**
     * This method is responsible for validating the values passed to the setCity method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCity method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCityForArrayConstraintsFromSetCity(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $referenceDataSearchRspCityItem) {
            // validation for constraint: itemType
            if (!$referenceDataSearchRspCityItem instanceof \Travelport\Util\StructType\City) {
                $invalidValues[] = is_object($referenceDataSearchRspCityItem) ? get_class($referenceDataSearchRspCityItem) : sprintf('%s(%s)', gettype($referenceDataSearchRspCityItem), var_export($referenceDataSearchRspCityItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The City property can only contain items of type \Travelport\Util\StructType\City, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setCity method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCity method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateCityForChoiceConstraintsFromSetCity($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Airport',
            'Carrier',
            'Country',
            'Currency',
            'Equipment',
            'PassengerType',
            'State',
            'SsrType',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property City can\'t be set as the property %s is already set. Only one property must be set among these properties: City, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set City value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\City[] $city
     * @return \Travelport\Util\StructType\ReferenceDataSearchRsp
     */
    public function setCity(?array $city = null): self
    {
        // validation for constraint: array
        if ('' !== ($cityArrayErrorMessage = self::validateCityForArrayConstraintsFromSetCity($city))) {
            throw new InvalidArgumentException($cityArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(Airport, Carrier, City, Country, Currency, Equipment, PassengerType, State, SsrType)
        if ('' !== ($cityChoiceErrorMessage = self::validateCityForChoiceConstraintsFromSetCity($city))) {
            throw new InvalidArgumentException($cityChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($city) && count($city) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($city)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($city) && count($city) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($city)), __LINE__);
        }
        if (is_null($city) || (is_array($city) && empty($city))) {
            unset($this->City);
        } else {
            $this->City = $city;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value passed to the addToCity method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToCity method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintsFromAddToCity($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Airport',
            'Carrier',
            'Country',
            'Currency',
            'Equipment',
            'PassengerType',
            'State',
            'SsrType',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property City can\'t be set as the property %s is already set. Only one property must be set among these properties: City, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to City value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\City $item
     * @return \Travelport\Util\StructType\ReferenceDataSearchRsp
     */
    public function addToCity(\Travelport\Util\StructType\City $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\City) {
            throw new InvalidArgumentException(sprintf('The City property can only contain items of type \Travelport\Util\StructType\City, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(Airport, Carrier, City, Country, Currency, Equipment, PassengerType, State, SsrType)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintsFromAddToCity($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->City) && count($this->City) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->City)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->City) && count($this->City) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->City)), __LINE__);
        }
        $this->City[] = $item;
        
        return $this;
    }
    /**
     * Get Country value
     * @return \Travelport\Util\StructType\Country[]
     */
    public function getCountry(): ?array
    {
        return isset($this->Country) ? $this->Country : null;
    }
    /**
     * This method is responsible for validating the values passed to the setCountry method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCountry method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCountryForArrayConstraintsFromSetCountry(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $referenceDataSearchRspCountryItem) {
            // validation for constraint: itemType
            if (!$referenceDataSearchRspCountryItem instanceof \Travelport\Util\StructType\Country) {
                $invalidValues[] = is_object($referenceDataSearchRspCountryItem) ? get_class($referenceDataSearchRspCountryItem) : sprintf('%s(%s)', gettype($referenceDataSearchRspCountryItem), var_export($referenceDataSearchRspCountryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Country property can only contain items of type \Travelport\Util\StructType\Country, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setCountry method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCountry method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateCountryForChoiceConstraintsFromSetCountry($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Airport',
            'Carrier',
            'City',
            'Currency',
            'Equipment',
            'PassengerType',
            'State',
            'SsrType',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property Country can\'t be set as the property %s is already set. Only one property must be set among these properties: Country, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set Country value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\Country[] $country
     * @return \Travelport\Util\StructType\ReferenceDataSearchRsp
     */
    public function setCountry(?array $country = null): self
    {
        // validation for constraint: array
        if ('' !== ($countryArrayErrorMessage = self::validateCountryForArrayConstraintsFromSetCountry($country))) {
            throw new InvalidArgumentException($countryArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(Airport, Carrier, City, Country, Currency, Equipment, PassengerType, State, SsrType)
        if ('' !== ($countryChoiceErrorMessage = self::validateCountryForChoiceConstraintsFromSetCountry($country))) {
            throw new InvalidArgumentException($countryChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($country) && count($country) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($country)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($country) && count($country) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($country)), __LINE__);
        }
        if (is_null($country) || (is_array($country) && empty($country))) {
            unset($this->Country);
        } else {
            $this->Country = $country;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value passed to the addToCountry method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToCountry method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintsFromAddToCountry($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Airport',
            'Carrier',
            'City',
            'Currency',
            'Equipment',
            'PassengerType',
            'State',
            'SsrType',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property Country can\'t be set as the property %s is already set. Only one property must be set among these properties: Country, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to Country value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\Country $item
     * @return \Travelport\Util\StructType\ReferenceDataSearchRsp
     */
    public function addToCountry(\Travelport\Util\StructType\Country $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\Country) {
            throw new InvalidArgumentException(sprintf('The Country property can only contain items of type \Travelport\Util\StructType\Country, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(Airport, Carrier, City, Country, Currency, Equipment, PassengerType, State, SsrType)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintsFromAddToCountry($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->Country) && count($this->Country) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->Country)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Country) && count($this->Country) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Country)), __LINE__);
        }
        $this->Country[] = $item;
        
        return $this;
    }
    /**
     * Get Currency value
     * @return \Travelport\Util\StructType\Currency[]
     */
    public function getCurrency(): ?array
    {
        return isset($this->Currency) ? $this->Currency : null;
    }
    /**
     * This method is responsible for validating the values passed to the setCurrency method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCurrency method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCurrencyForArrayConstraintsFromSetCurrency(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $referenceDataSearchRspCurrencyItem) {
            // validation for constraint: itemType
            if (!$referenceDataSearchRspCurrencyItem instanceof \Travelport\Util\StructType\Currency) {
                $invalidValues[] = is_object($referenceDataSearchRspCurrencyItem) ? get_class($referenceDataSearchRspCurrencyItem) : sprintf('%s(%s)', gettype($referenceDataSearchRspCurrencyItem), var_export($referenceDataSearchRspCurrencyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Currency property can only contain items of type \Travelport\Util\StructType\Currency, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setCurrency method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCurrency method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateCurrencyForChoiceConstraintsFromSetCurrency($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Airport',
            'Carrier',
            'City',
            'Country',
            'Equipment',
            'PassengerType',
            'State',
            'SsrType',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property Currency can\'t be set as the property %s is already set. Only one property must be set among these properties: Currency, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set Currency value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\Currency[] $currency
     * @return \Travelport\Util\StructType\ReferenceDataSearchRsp
     */
    public function setCurrency(?array $currency = null): self
    {
        // validation for constraint: array
        if ('' !== ($currencyArrayErrorMessage = self::validateCurrencyForArrayConstraintsFromSetCurrency($currency))) {
            throw new InvalidArgumentException($currencyArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(Airport, Carrier, City, Country, Currency, Equipment, PassengerType, State, SsrType)
        if ('' !== ($currencyChoiceErrorMessage = self::validateCurrencyForChoiceConstraintsFromSetCurrency($currency))) {
            throw new InvalidArgumentException($currencyChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($currency) && count($currency) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($currency)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($currency) && count($currency) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($currency)), __LINE__);
        }
        if (is_null($currency) || (is_array($currency) && empty($currency))) {
            unset($this->Currency);
        } else {
            $this->Currency = $currency;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value passed to the addToCurrency method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToCurrency method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintsFromAddToCurrency($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Airport',
            'Carrier',
            'City',
            'Country',
            'Equipment',
            'PassengerType',
            'State',
            'SsrType',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property Currency can\'t be set as the property %s is already set. Only one property must be set among these properties: Currency, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to Currency value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\Currency $item
     * @return \Travelport\Util\StructType\ReferenceDataSearchRsp
     */
    public function addToCurrency(\Travelport\Util\StructType\Currency $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\Currency) {
            throw new InvalidArgumentException(sprintf('The Currency property can only contain items of type \Travelport\Util\StructType\Currency, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(Airport, Carrier, City, Country, Currency, Equipment, PassengerType, State, SsrType)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintsFromAddToCurrency($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->Currency) && count($this->Currency) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->Currency)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Currency) && count($this->Currency) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Currency)), __LINE__);
        }
        $this->Currency[] = $item;
        
        return $this;
    }
    /**
     * Get Equipment value
     * @return \Travelport\Util\StructType\Equipment[]
     */
    public function getEquipment(): ?array
    {
        return isset($this->Equipment) ? $this->Equipment : null;
    }
    /**
     * This method is responsible for validating the values passed to the setEquipment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEquipment method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEquipmentForArrayConstraintsFromSetEquipment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $referenceDataSearchRspEquipmentItem) {
            // validation for constraint: itemType
            if (!$referenceDataSearchRspEquipmentItem instanceof \Travelport\Util\StructType\Equipment) {
                $invalidValues[] = is_object($referenceDataSearchRspEquipmentItem) ? get_class($referenceDataSearchRspEquipmentItem) : sprintf('%s(%s)', gettype($referenceDataSearchRspEquipmentItem), var_export($referenceDataSearchRspEquipmentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Equipment property can only contain items of type \Travelport\Util\StructType\Equipment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setEquipment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEquipment method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateEquipmentForChoiceConstraintsFromSetEquipment($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Airport',
            'Carrier',
            'City',
            'Country',
            'Currency',
            'PassengerType',
            'State',
            'SsrType',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property Equipment can\'t be set as the property %s is already set. Only one property must be set among these properties: Equipment, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set Equipment value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\Equipment[] $equipment
     * @return \Travelport\Util\StructType\ReferenceDataSearchRsp
     */
    public function setEquipment(?array $equipment = null): self
    {
        // validation for constraint: array
        if ('' !== ($equipmentArrayErrorMessage = self::validateEquipmentForArrayConstraintsFromSetEquipment($equipment))) {
            throw new InvalidArgumentException($equipmentArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(Airport, Carrier, City, Country, Currency, Equipment, PassengerType, State, SsrType)
        if ('' !== ($equipmentChoiceErrorMessage = self::validateEquipmentForChoiceConstraintsFromSetEquipment($equipment))) {
            throw new InvalidArgumentException($equipmentChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($equipment) && count($equipment) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($equipment)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($equipment) && count($equipment) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($equipment)), __LINE__);
        }
        if (is_null($equipment) || (is_array($equipment) && empty($equipment))) {
            unset($this->Equipment);
        } else {
            $this->Equipment = $equipment;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value passed to the addToEquipment method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToEquipment method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintsFromAddToEquipment($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Airport',
            'Carrier',
            'City',
            'Country',
            'Currency',
            'PassengerType',
            'State',
            'SsrType',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property Equipment can\'t be set as the property %s is already set. Only one property must be set among these properties: Equipment, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to Equipment value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\Equipment $item
     * @return \Travelport\Util\StructType\ReferenceDataSearchRsp
     */
    public function addToEquipment(\Travelport\Util\StructType\Equipment $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\Equipment) {
            throw new InvalidArgumentException(sprintf('The Equipment property can only contain items of type \Travelport\Util\StructType\Equipment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(Airport, Carrier, City, Country, Currency, Equipment, PassengerType, State, SsrType)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintsFromAddToEquipment($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->Equipment) && count($this->Equipment) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->Equipment)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Equipment) && count($this->Equipment) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Equipment)), __LINE__);
        }
        $this->Equipment[] = $item;
        
        return $this;
    }
    /**
     * Get PassengerType value
     * @return \Travelport\Util\StructType\PassengerType[]
     */
    public function getPassengerType(): ?array
    {
        return isset($this->PassengerType) ? $this->PassengerType : null;
    }
    /**
     * This method is responsible for validating the values passed to the setPassengerType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPassengerType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePassengerTypeForArrayConstraintsFromSetPassengerType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $referenceDataSearchRspPassengerTypeItem) {
            // validation for constraint: itemType
            if (!$referenceDataSearchRspPassengerTypeItem instanceof \Travelport\Util\StructType\PassengerType) {
                $invalidValues[] = is_object($referenceDataSearchRspPassengerTypeItem) ? get_class($referenceDataSearchRspPassengerTypeItem) : sprintf('%s(%s)', gettype($referenceDataSearchRspPassengerTypeItem), var_export($referenceDataSearchRspPassengerTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PassengerType property can only contain items of type \Travelport\Util\StructType\PassengerType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setPassengerType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPassengerType method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validatePassengerTypeForChoiceConstraintsFromSetPassengerType($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Airport',
            'Carrier',
            'City',
            'Country',
            'Currency',
            'Equipment',
            'State',
            'SsrType',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property PassengerType can\'t be set as the property %s is already set. Only one property must be set among these properties: PassengerType, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set PassengerType value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\PassengerType[] $passengerType
     * @return \Travelport\Util\StructType\ReferenceDataSearchRsp
     */
    public function setPassengerType(?array $passengerType = null): self
    {
        // validation for constraint: array
        if ('' !== ($passengerTypeArrayErrorMessage = self::validatePassengerTypeForArrayConstraintsFromSetPassengerType($passengerType))) {
            throw new InvalidArgumentException($passengerTypeArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(Airport, Carrier, City, Country, Currency, Equipment, PassengerType, State, SsrType)
        if ('' !== ($passengerTypeChoiceErrorMessage = self::validatePassengerTypeForChoiceConstraintsFromSetPassengerType($passengerType))) {
            throw new InvalidArgumentException($passengerTypeChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($passengerType) && count($passengerType) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($passengerType)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($passengerType) && count($passengerType) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($passengerType)), __LINE__);
        }
        if (is_null($passengerType) || (is_array($passengerType) && empty($passengerType))) {
            unset($this->PassengerType);
        } else {
            $this->PassengerType = $passengerType;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value passed to the addToPassengerType method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToPassengerType method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintsFromAddToPassengerType($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Airport',
            'Carrier',
            'City',
            'Country',
            'Currency',
            'Equipment',
            'State',
            'SsrType',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property PassengerType can\'t be set as the property %s is already set. Only one property must be set among these properties: PassengerType, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to PassengerType value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\PassengerType $item
     * @return \Travelport\Util\StructType\ReferenceDataSearchRsp
     */
    public function addToPassengerType(\Travelport\Util\StructType\PassengerType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\PassengerType) {
            throw new InvalidArgumentException(sprintf('The PassengerType property can only contain items of type \Travelport\Util\StructType\PassengerType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(Airport, Carrier, City, Country, Currency, Equipment, PassengerType, State, SsrType)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintsFromAddToPassengerType($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->PassengerType) && count($this->PassengerType) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->PassengerType)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->PassengerType) && count($this->PassengerType) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->PassengerType)), __LINE__);
        }
        $this->PassengerType[] = $item;
        
        return $this;
    }
    /**
     * Get State value
     * @return \Travelport\Util\StructType\State[]
     */
    public function getState(): ?array
    {
        return isset($this->State) ? $this->State : null;
    }
    /**
     * This method is responsible for validating the values passed to the setState method
     * This method is willingly generated in order to preserve the one-line inline validation within the setState method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateStateForArrayConstraintsFromSetState(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $referenceDataSearchRspStateItem) {
            // validation for constraint: itemType
            if (!$referenceDataSearchRspStateItem instanceof \Travelport\Util\StructType\State) {
                $invalidValues[] = is_object($referenceDataSearchRspStateItem) ? get_class($referenceDataSearchRspStateItem) : sprintf('%s(%s)', gettype($referenceDataSearchRspStateItem), var_export($referenceDataSearchRspStateItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The State property can only contain items of type \Travelport\Util\StructType\State, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setState method
     * This method is willingly generated in order to preserve the one-line inline validation within the setState method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateStateForChoiceConstraintsFromSetState($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Airport',
            'Carrier',
            'City',
            'Country',
            'Currency',
            'Equipment',
            'PassengerType',
            'SsrType',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property State can\'t be set as the property %s is already set. Only one property must be set among these properties: State, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set State value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\State[] $state
     * @return \Travelport\Util\StructType\ReferenceDataSearchRsp
     */
    public function setState(?array $state = null): self
    {
        // validation for constraint: array
        if ('' !== ($stateArrayErrorMessage = self::validateStateForArrayConstraintsFromSetState($state))) {
            throw new InvalidArgumentException($stateArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(Airport, Carrier, City, Country, Currency, Equipment, PassengerType, State, SsrType)
        if ('' !== ($stateChoiceErrorMessage = self::validateStateForChoiceConstraintsFromSetState($state))) {
            throw new InvalidArgumentException($stateChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($state) && count($state) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($state)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($state) && count($state) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($state)), __LINE__);
        }
        if (is_null($state) || (is_array($state) && empty($state))) {
            unset($this->State);
        } else {
            $this->State = $state;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value passed to the addToState method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToState method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintsFromAddToState($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Airport',
            'Carrier',
            'City',
            'Country',
            'Currency',
            'Equipment',
            'PassengerType',
            'SsrType',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property State can\'t be set as the property %s is already set. Only one property must be set among these properties: State, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to State value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\State $item
     * @return \Travelport\Util\StructType\ReferenceDataSearchRsp
     */
    public function addToState(\Travelport\Util\StructType\State $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\State) {
            throw new InvalidArgumentException(sprintf('The State property can only contain items of type \Travelport\Util\StructType\State, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(Airport, Carrier, City, Country, Currency, Equipment, PassengerType, State, SsrType)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintsFromAddToState($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->State) && count($this->State) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->State)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->State) && count($this->State) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->State)), __LINE__);
        }
        $this->State[] = $item;
        
        return $this;
    }
    /**
     * Get SsrType value
     * @return \Travelport\Util\StructType\SsrType[]
     */
    public function getSsrType(): ?array
    {
        return isset($this->SsrType) ? $this->SsrType : null;
    }
    /**
     * This method is responsible for validating the values passed to the setSsrType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSsrType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSsrTypeForArrayConstraintsFromSetSsrType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $referenceDataSearchRspSsrTypeItem) {
            // validation for constraint: itemType
            if (!$referenceDataSearchRspSsrTypeItem instanceof \Travelport\Util\StructType\SsrType) {
                $invalidValues[] = is_object($referenceDataSearchRspSsrTypeItem) ? get_class($referenceDataSearchRspSsrTypeItem) : sprintf('%s(%s)', gettype($referenceDataSearchRspSsrTypeItem), var_export($referenceDataSearchRspSsrTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SsrType property can only contain items of type \Travelport\Util\StructType\SsrType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setSsrType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSsrType method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateSsrTypeForChoiceConstraintsFromSetSsrType($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Airport',
            'Carrier',
            'City',
            'Country',
            'Currency',
            'Equipment',
            'PassengerType',
            'State',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property SsrType can\'t be set as the property %s is already set. Only one property must be set among these properties: SsrType, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set SsrType value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\SsrType[] $ssrType
     * @return \Travelport\Util\StructType\ReferenceDataSearchRsp
     */
    public function setSsrType(?array $ssrType = null): self
    {
        // validation for constraint: array
        if ('' !== ($ssrTypeArrayErrorMessage = self::validateSsrTypeForArrayConstraintsFromSetSsrType($ssrType))) {
            throw new InvalidArgumentException($ssrTypeArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(Airport, Carrier, City, Country, Currency, Equipment, PassengerType, State, SsrType)
        if ('' !== ($ssrTypeChoiceErrorMessage = self::validateSsrTypeForChoiceConstraintsFromSetSsrType($ssrType))) {
            throw new InvalidArgumentException($ssrTypeChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($ssrType) && count($ssrType) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($ssrType)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($ssrType) && count($ssrType) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($ssrType)), __LINE__);
        }
        if (is_null($ssrType) || (is_array($ssrType) && empty($ssrType))) {
            unset($this->SsrType);
        } else {
            $this->SsrType = $ssrType;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value passed to the addToSsrType method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToSsrType method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintsFromAddToSsrType($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Airport',
            'Carrier',
            'City',
            'Country',
            'Currency',
            'Equipment',
            'PassengerType',
            'State',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property SsrType can\'t be set as the property %s is already set. Only one property must be set among these properties: SsrType, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to SsrType value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\SsrType $item
     * @return \Travelport\Util\StructType\ReferenceDataSearchRsp
     */
    public function addToSsrType(\Travelport\Util\StructType\SsrType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\SsrType) {
            throw new InvalidArgumentException(sprintf('The SsrType property can only contain items of type \Travelport\Util\StructType\SsrType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(Airport, Carrier, City, Country, Currency, Equipment, PassengerType, State, SsrType)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintsFromAddToSsrType($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->SsrType) && count($this->SsrType) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->SsrType)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->SsrType) && count($this->SsrType) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->SsrType)), __LINE__);
        }
        $this->SsrType[] = $item;
        
        return $this;
    }
}
