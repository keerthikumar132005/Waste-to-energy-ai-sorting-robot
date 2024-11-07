import { mount } from "@vue/test-utils";
import EnergyStats from "../components/EnergyStats.vue";
import axios from "axios";

jest.mock("axios");

describe("EnergyStats.vue", () => {
  it("fetches and displays total energy generated and current output", async () => {
    // Mock API response
    axios.get.mockResolvedValue({
      data: {
        totalEnergy: 150,
        currentOutput: 5,
      },
    });

    const wrapper = mount(EnergyStats);

    // Wait for data fetching
    await wrapper.vm.$nextTick();

    expect(wrapper.text()).toContain("Total Energy Generated: 150 kWh");
    expect(wrapper.text()).toContain("Current Output: 5 kW");
  });
});
