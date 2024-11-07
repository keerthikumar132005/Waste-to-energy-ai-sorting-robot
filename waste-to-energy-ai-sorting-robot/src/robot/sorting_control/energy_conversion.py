class EnergyConversion:
    def __init__(self):
        self.energy_generated = 0.0  # kWh

    def process_waste(self, waste_amount):
        conversion_efficiency = 0.75  # 75% efficiency in conversion
        generated_energy = waste_amount * conversion_efficiency
        self.energy_generated += generated_energy
        print(f"Processed {waste_amount} kg of waste. Energy Generated: {generated_energy} kWh")
        return generated_energy

    def get_total_energy_generated(self):
        return self.energy_generated

# Usage example:
# energy_module = EnergyConversion()
# energy_module.process_waste(waste_amount=5.0)
