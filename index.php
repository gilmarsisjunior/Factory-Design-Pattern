<?php 
interface Vehicles{
    public function drive();
    public function stop();
}
interface VehiclesFactory{
    public function getVehicle($vehicleName);
}
class Car implements Vehicles
{
    private $vehicleName;

    public function __construct($vehicleName)
    {
        $this->vehicleName = $vehicleName;
    }
    public function drive()
    {
        echo 'The CAR is driving '.$this->vehicleName;
    }
    public function stop()
    {
        echo 'The CAR stops '.$this->vehicleName;
    }
}
class AirPlane implements Vehicles{
    private $vehicleName;
    public function __construct($vehicleName){
        $this->vehicleName = $vehicleName;
    }
    public function drive()
    {
        echo 'The AirPlane is driving '.$this->vehicleName;
    }
    public function stop()
    {
        echo 'The AirPlane stops '.$this->vehicleName;
    }
}
class carFactory implements vehiclesFactory{

    public function getVehicle($vehicleName){
        return new Car($vehicleName);
    }
}
class AirPlaneFactory implements vehiclesFactory{
    public function getVehicle($vehicleName){
        return new AirPlane($vehicleName);
    }
}
const BREAK_RULE = '<br/>';



$carFactory = new CarFactory();
$Honda = $carFactory->getVehicle('Honda');
$Honda->drive();
echo BREAK_RULE;
$Honda->stop();
echo BREAK_RULE;

$airPlaneFactory = new AirPlaneFactory();
$b777 = $airPlaneFactory->getVehicle('Boeing 777-800');
$b777->drive();
echo BREAK_RULE;
$b777->stop();
?>




