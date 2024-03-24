<template>
  <div class="GenresMenu">
    <div class="GenresData">
      <label class="GenresButton" v-for="genre in genres" :key="genre"
            :class="{'genre-selected': selectedGenres.includes(genre), 'genre-not-selected': !selectedGenres.includes(genre)}"
            @click="toggleGenreSelection(genre)">
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
  toggleGenreSelection(genre) {
    const index = this.selectedGenres.indexOf(genre);
    if (index > -1) {
      this.selectedGenres.splice(index, 1);
    } else {
      this.selectedGenres.push(genre);
    }
  },
  searchGames() {
    console.log('Selected genres:', this.selectedGenres);
    this.$router.push('/gameview');
  },
}
}
</script>

<style>
.GenresMenu {
  position: absolute;
  display: grid;
  border-radius: 0px 0px 20px 20px;
  background-color: #003366dc;
  z-index: 5;
}

.GenresData {
  display: grid;
  grid-template-columns: auto auto auto auto; 
}

.GenresMenu label {
  font-size: 20px;
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
  margin: 4% 35% 4% 35%; 
}

.GenresButton {
  display: flex;
  width: 150px;
  height: 25px;
  justify-content: center;
  align-items: center
}

.genre-selected {
  background-color: #4CAF50;
  color: white;
  border-radius: 20px;
}

.genre-not-selected {
  background-color: #f4f4f4; 
  color: black;
  border-radius: 20px;
}

@media (max-width: 1091px) {
  .GenresData {
    grid-template-columns: auto auto auto; 
  }
}

@media (max-width: 782px) {
  .GenresData {
    grid-template-columns: auto auto; 
  }
}

@media (max-width: 520px) {
  .GenresData {
    grid-template-columns: none ; 
  }
  
  .SearchButtonGenres {
    padding: 10px;
    margin: 0% 4% 4% 4%; 
  } 
}

</style>
