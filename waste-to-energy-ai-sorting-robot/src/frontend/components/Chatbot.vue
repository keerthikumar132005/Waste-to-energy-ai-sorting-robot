<template>
  <div class="chatbot">
    <h2>Chatbot Assistant</h2>
    <div class="chat-window">
      <div v-for="(msg, index) in messages" :key="index" :class="msg.type">
        {{ msg.text }}
      </div>
    </div>
    <input
      type="text"
      v-model="userInput"
      placeholder="Type your question..."
      @keyup.enter="sendMessage"
    />
    <button @click="sendMessage">Send</button>
  </div>
</template>

<script>
import axios from "axios";

export default {
  data() {
    return {
      messages: [],
      userInput: "",
    };
  },
  methods: {
    async sendMessage() {
      if (this.userInput.trim() === "") return;

      // Add user's message to chat
      this.messages.push({ text: this.userInput, type: "user" });

      try {
        // Send the message to the backend API
        const response = await axios.post("/chat/respond", {
          query: this.userInput,
        });

        // Add bot's response to chat
        this.messages.push({ text: response.data.response, type: "bot" });
      } catch (error) {
        console.error("Error in chatbot response:", error);
      }

      // Clear user input
      this.userInput = "";
    },
  },
};
</script>

<style scoped>
.chatbot {
  border: 1px solid #ccc;
  padding: 16px;
  width: 300px;
}
.chat-window {
  height: 200px;
  overflow-y: auto;
  border-bottom: 1px solid #ccc;
  padding: 8px;
}
.user {
  text-align: right;
  color: #007bff;
}
.bot {
  text-align: left;
  color: #333;
}
input {
  width: calc(100% - 50px);
  padding: 8px;
}
button {
  padding: 8px;
  margin-left: 4px;
}
</style>
