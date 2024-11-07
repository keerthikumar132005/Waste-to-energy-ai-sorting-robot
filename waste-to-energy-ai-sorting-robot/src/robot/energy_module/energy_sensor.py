import random

class EnergySensor:
    def read_energy_output(self):
        # Simulate reading energy output from the module.
        energy_output = random.uniform(0.5, 5.0)  # kW
        print(f"Energy Output: {energy_output} kW")
        return energy_output

# Usage example:
# energy_sensor = EnergySensor()
# output = energy_sensor.read_energy_output()
