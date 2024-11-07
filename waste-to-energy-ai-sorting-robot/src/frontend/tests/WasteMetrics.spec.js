import { mount } from "@vue/test-utils";
import WasteMetrics from "../components/WasteMetrics.vue";
import axios from "axios";

jest.mock("axios");

describe("WasteMetrics.vue", () => {
  it("fetches and displays total waste processed, recyclable waste, and organic waste", async () => {
    // Mock API response
    axios.get.mockResolvedValue({
      data: {
        totalWaste: 100,
        recyclableWaste: 60,
        organicWaste: 40,
      },
    });

    const wrapper = mount(WasteMetrics);

    // Wait for data fetching
    await wrapper.vm.$nextTick();

    expect(wrapper.text()).toContain("Total Waste Processed: 100 kg");
    expect(wrapper.text()).toContain("Recyclable Waste: 60 kg");
    expect(wrapper.text()).toContain("Organic Waste: 40 kg");
  });
});
