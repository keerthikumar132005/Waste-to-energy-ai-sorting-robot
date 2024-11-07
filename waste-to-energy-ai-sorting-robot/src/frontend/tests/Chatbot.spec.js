import { mount } from "@vue/test-utils";
import Chatbot from "../components/Chatbot.vue";
import axios from "axios";

jest.mock("axios");

describe("Chatbot.vue", () => {
  it("displays user input in the chat window", async () => {
    const wrapper = mount(Chatbot);
    const input = wrapper.find("input");

    // Simulate user typing and pressing enter
    await input.setValue("What is the energy output today?");
    await wrapper.find("button").trigger("click");

    // Check that the user message is added to the messages array
    expect(wrapper.text()).toContain("What is the energy output today?");
  });

  it("displays bot response after sending a message", async () => {
    const wrapper = mount(Chatbot);

    // Mock API response
    axios.post.mockResolvedValue({
      data: { response: "The energy output today is 5 kWh." },
    });

    // Send message and wait for response
    await wrapper.setData({ userInput: "What is the energy output today?" });
    await wrapper.find("button").trigger("click");

    // Check that the bot's response is displayed
    await wrapper.vm.$nextTick(); // Wait for the DOM to update
    expect(wrapper.text()).toContain("The energy output today is 5 kWh.");
  });
});
