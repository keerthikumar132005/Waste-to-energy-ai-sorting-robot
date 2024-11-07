<template>
  <div class="energy-stats">
    <h3>Energy Statistics</h3>
    <p>Total Energy Generated: {{ totalEnergy }} kWh</p>
    <p>Current Output: {{ currentOutput }} kW</p>
  </div>
</template>

<script>
import axios from "axios";

export default {
  data() {
    return {
      totalEnergy: 0,
      currentOutput: 0,
    };
  },
  async created() {
    try {
      const response = await axios.get("/dashboard/energy-stats");
      this.totalEnergy = response.data.totalEnergy;
      this.currentOutput = response.data.currentOutput;
    } catch (error) {
      console.error("Failed to fetch energy stats:", error);
    }
  },
};
</script>

<style scoped>
.energy-stats {
  border: 1px solid #ddd;
  padding: 16px;
}
</style>
