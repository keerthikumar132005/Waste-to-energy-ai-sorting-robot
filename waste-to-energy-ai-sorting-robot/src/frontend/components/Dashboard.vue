<template>
  <div class="dashboard">
    <h2>Dashboard</h2>
    <EnergyStats />
    <WasteMetrics />
  </div>
</template>

<script>
import EnergyStats from "./EnergyStats.vue";
import WasteMetrics from "./WasteMetrics.vue";

export default {
  components: {
    EnergyStats,
    WasteMetrics,
  },
};
</script>

<style scoped>
.dashboard {
  padding: 20px;
}
</style>
