package Java;

class Main
{
    public static void main(String[] args) {
        System.out.println("Hola Mundo");

        Account account = new Account("Rodrigo Salazar", "rod123");

        UberX uberx = new UberX("MXA1549", account, "Mazda", "3");

        uberx.setPassenger(4); 
        uberx.printDataCar();

        // Account account2 = new Account("Sandra Elisa", "snd123");
        // Car car2 = new Car("MXA6589", account2);
        // car2.passenger = 4;
        // car2.printDataCar();
        
    }
}