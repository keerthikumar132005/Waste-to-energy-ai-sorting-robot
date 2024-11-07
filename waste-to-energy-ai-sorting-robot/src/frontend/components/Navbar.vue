<template>
  <nav class="navbar">
    <img src="../assets/logo.png" alt="Logo" class="logo" />
    <a href="#/dashboard">Dashboard</a>
    <a href="#/chatbot">Chatbot</a>
  </nav>
</template>

<style scoped>
.navbar {
  display: flex;
  align-items: center;
  padding: 16px;
  background-color: #333;
  color: #fff;
}
.logo {
  width: 40px;
  margin-right: 16px;
}
a {
  margin-right: 16px;
  color: #fff;
  text-decoration: none;
}
a:hover {
  text-decoration: underline;
}
</style>
