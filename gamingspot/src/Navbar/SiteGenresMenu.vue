<template>
  <div class="GenresMenu">
    <div class="GenresData">
      <label v-for="genre in genres" :key="genre">
        <input type="checkbox" :value="genre" @change="updateSelectedGenres" :checked="selectedGenres.includes(genre)">
        {{ genre }}
      </label>
    </div>
    <button type="button" @click="searchGames" class="SearchButtonGenres">Search</button>
  </div>
</template>

<script>
export default {
name: "SiteGenresMenu",
data() {
  return {
    genres: ["Adventure", "Action", "Strategy", "Stealth game", "Fighting", "RPG", "Racing", "Simulation", "Survival horror", "Multiplayer", "Adventure game", "Platformer", "Sports", "Rhythm", "Survivor game", "Shooter", "Puzzle", "Sandbox", "MMORPG", "FPS"],
    selectedGenres: []
  };
},
methods: {
  updateSelectedGenres(event) {
    const value = event.target.value;
    if (event.target.checked) {
      this.selectedGenres.push(value);
    } else {
      this.selectedGenres = this.selectedGenres.filter(genre => genre !== value);
    }
  },
  searchGames() {
    console.log('Selected genres:', this.selectedGenres);
    this.$router.push('/gameview');
  }
}
}
</script>

<style>
.GenresMenu {
  position: absolute;
  display: grid;
  border-radius: 5px;
  background-color: white;
  z-index: 5;
}

.GenresData {
  display: grid;
  grid-template-columns: auto auto auto auto; 
  background-color: white;
}

.GenresMenu label {
  font-size: 20px;
  border: 1px solid black;
  margin: 20px 25px 10px 25px;
  padding: 10px 5px 10px 5px;
}
.SearchButtonGenres {
  background-color: #000;
  color: #fff; 
  border: none;
  border-radius: 20px; 
  padding: 10px 30px;
  font-size: 24px;
  cursor: pointer; 
  margin: 0% 35% 4% 35%; 
}
</style>
