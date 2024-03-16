<template>
  <nav class="navbar">
    <!-- Logo or Branding -->
  <button type="button" @click="$router.push('/')">
    <div class="navbar-brand">GamingSpot</div>
  </button>

    <!-- Navigation Links -->
    <div class="navbar-menu"> 
      <button>
      <div class="navbar-item" >Platforms ▽</div>
    </button>
    <button>
      <div class="navbar-item">Genres ▽</div>
    </button>
    </div>

    <!-- Search Bar -->
    <div class="navbar-search">
      <input type="text" placeholder="Search">
      <button type="button">
        <img src="../assets/icons/search.png" alt="User" />
      </button>
    </div>

    <!-- Icons or Buttons -->
    <div class="navbar-icons">
      <button type="button"   @click="$router.push('/login')">
        <img src="../assets/icons/user.png" alt="User" />
      </button>
      <button type="button">
        <img src="../assets/icons/shopping-cart.png" alt="User" />
      </button>
    </div>
  </nav>
</template>

<script>
export default {
  name: 'SiteNavbar',
  
}
</script>

<style src="../styles/SiteNavbar.css"></style>
