from car import Car
from account import Account

if __name__ == "__main__":
    print("Hola Mundo")
    
    car = Car("AMS123", Account("Andres Herrera", "IDE12345"))
    print(vars(car))
    print(vars(car.driver))