from car import Car

if __name__ == "__main__":
    print("Hola Mundo")
    car = Car()
    car.license = "LMF0456"
    car.driver = "Juan Perez"
    car.passenger = 4

    print(vars(car))

    car2 = Car()
    car2.license = "SAR2345"
    car2.driver = "Carlos Perez"
    car2.passenger = 4

    print(vars(car2))