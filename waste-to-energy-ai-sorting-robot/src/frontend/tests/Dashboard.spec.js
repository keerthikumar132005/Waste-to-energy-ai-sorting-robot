import { mount } from "@vue/test-utils";
import Dashboard from "../components/Dashboard.vue";
import EnergyStats from "../components/EnergyStats.vue";
import WasteMetrics from "../components/WasteMetrics.vue";

describe("Dashboard.vue", () => {
  it("renders the EnergyStats component", () => {
    const wrapper = mount(Dashboard);
    const energyStats = wrapper.findComponent(EnergyStats);
    expect(energyStats.exists()).toBe(true);
  });

  it("renders the WasteMetrics component", () => {
    const wrapper = mount(Dashboard);
    const wasteMetrics = wrapper.findComponent(WasteMetrics);
    expect(wasteMetrics.exists()).toBe(true);
  });
});
