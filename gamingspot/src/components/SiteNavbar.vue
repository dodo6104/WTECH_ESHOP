<template>
  <nav class="navbar">
    <!-- Logo or Branding -->
    <div class="navbar-brand">GamingSpot</div>

    <!-- Navigation Links -->
    <div class="navbar-menu">
      <div class="navbar-item">Platforms ▼</div>
      <div class="navbar-item">Genres ▼</div>
    </div>

    <!-- Search Bar -->
    <div class="navbar-search">
      <input type="text" placeholder="Search">
      <button type="submit">🔍</button>
    </div>

    <!-- Icons or Buttons -->
    <div class="navbar-icons">
      <button type="button">👤</button>
      <button type="button">🛒</button>
    </div>
  </nav>
</template>

<script>
export default {
  name: 'SiteNavbar',
  // JavaScript code can be added here if needed
}
</script>

<!-- Styles -->
<style scoped>
.navbar {
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.navbar-brand {
  font-size: 1.5em;
}

.navbar-menu {
  display: flex;
}

.navbar-item {
  margin-right: 20px; /* Or your desired spacing */
}

.navbar-search {
  display: flex;
}

.navbar-search input {
  margin-right: 10px; /* Or your desired spacing */
}

.navbar-icons button {
  margin-left: 10px; /* Or your desired spacing */
}
</style>
