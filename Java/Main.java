package Java;

class Main
{
    public static void main(String[] args) {
        System.out.println("Hola Mundo");

        Car car = new Car();

        car.license = "MXA1549";
        car.driver = "Rodrigo Salazar";
        car.passenger = 4;
        car.printDataCar();

        Car car2 = new Car();

        car2.license = "MXA1549";
        car2.driver = "Rodrigo Salazar";
        car2.passenger = 4;
        car2.printDataCar();
        
    }
}