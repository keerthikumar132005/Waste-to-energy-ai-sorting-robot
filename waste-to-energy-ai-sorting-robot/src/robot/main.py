from ai_model.model import WasteClassifier
from sensors.camera_sensor import CameraSensor
from sensors.proximity_sensor import ProximitySensor
from sensors.energy_sensor import EnergySensor
from sorting_control.sorting_mechanism import SortingMechanism
from energy_module.energy_conversion import EnergyConversion

# Initialize modules
classifier = WasteClassifier("path_to_model.h5")
camera = CameraSensor()
proximity_sensor = ProximitySensor()
energy_sensor = EnergySensor()
sorting_mechanism = SortingMechanism()
energy_module = EnergyConversion()

# Step 1: Capture image if object is detected nearby
if proximity_sensor.get_distance() < 20.0:
    image_path = camera.capture_image()
    
    # Step 2: Classify captured image
    waste_type, confidence = classifier.classify_waste(image_path)
    print(f"Detected waste type: {waste_type} with confidence {confidence}")

    # Step 3: Sort based on classification
    sorting_mechanism.activate_sorting(waste_type)
    
    # Step 4: If organic, process for energy
    if waste_type == 1:  # Assuming 1 = organic
        energy_module.process_waste(waste_amount=5.0)  # Example waste amount in kg
    
    # Reset sorting mechanism
    sorting_mechanism.reset()

# Step 5: Check current energy output
energy_sensor.read_energy_output()
print(f"Total Energy Generated: {energy_module.get_total_energy_generated()} kWh")
