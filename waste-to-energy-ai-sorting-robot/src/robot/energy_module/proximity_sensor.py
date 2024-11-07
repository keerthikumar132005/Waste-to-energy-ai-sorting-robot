import random

class ProximitySensor:
    def get_distance(self):
        # Simulation: Generate random distance value.
        # Replace this with actual sensor read code.
        distance = random.uniform(5.0, 100.0)
        print(f"Proximity Sensor Distance: {distance} cm")
        return distance

# Usage example:
# proximity_sensor = ProximitySensor()
# distance = proximity_sensor.get_distance()
