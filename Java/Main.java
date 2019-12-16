package Java;

class Main
{
    public static void main(String[] args) {
        System.out.println("Hola Mundo");

        Account account = new Account("Rodrigo Salazar", "rod123");

        Car car = new Car("MXA1549", account);

        car.passenger = 4;
        car.printDataCar();

        Account account2 = new Account("Sandra Elisa", "snd123");

        Car car2 = new Car("MXA6589", account2);
        car2.passenger = 4;
        car2.printDataCar();
        
    }
}