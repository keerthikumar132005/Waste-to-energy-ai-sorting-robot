class SortingMechanism:
    def __init__(self):
        self.status = "Idle"

    def activate_sorting(self, waste_type):
        if waste_type == 0:
            print("Directing to recyclable bin.")
        elif waste_type == 1:
            print("Directing to organic waste for energy conversion.")
        else:
            print("Waste type not recognized. Sending to general waste.")
        self.status = "Sorting"

    def reset(self):
        self.status = "Idle"
        print("Sorting mechanism reset.")

# Usage example:
# sorting_mechanism = SortingMechanism()
# sorting_mechanism.activate_sorting(waste_type=0)
