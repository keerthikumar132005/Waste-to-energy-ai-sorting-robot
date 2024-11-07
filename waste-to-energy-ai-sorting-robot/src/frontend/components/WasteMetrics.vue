<template>
  <div class="waste-metrics">
    <h3>Waste Metrics</h3>
    <p>Total Waste Processed: {{ totalWaste }} kg</p>
    <p>Recyclable Waste: {{ recyclableWaste }} kg</p>
    <p>Organic Waste: {{ organicWaste }} kg</p>
  </div>
</template>

<script>
import axios from "axios";

export default {
  data() {
    return {
      totalWaste: 0,
      recyclableWaste: 0,
      organicWaste: 0,
    };
  },
  async created() {
    try {
      const response = await axios.get("/dashboard/waste-metrics");
      this.totalWaste = response.data.totalWaste;
      this.recyclableWaste = response.data.recyclableWaste;
      this.organicWaste = response.data.organicWaste;
    } catch (error) {
      console.error("Failed to fetch waste metrics:", error);
    }
  },
};
</script>

<style scoped>
.waste-metrics {
  border: 1px solid #ddd;
  padding: 16px;
  margin-top: 16px;
}
</style>
