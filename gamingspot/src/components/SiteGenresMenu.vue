<template>
    <div class="GenresMenu">
      <div class="GenresData">
        <label><input type="checkbox" value="Adventure">Adventure</label>
        <label><input type="checkbox" value="Action">Action</label>
        <label><input type="checkbox" value="Strategy">Strategy</label>
        <label><input type="checkbox" value="Stealth game">Stealth game</label>
        <label><input type="checkbox" value="Strategy games">Strategy games</label>
        <label><input type="checkbox" value="Fighting">Fighting</label>
        <label><input type="checkbox" value="RPG">RPG</label>
        <label><input type="checkbox" value="Racing">Racing</label>
        <label><input type="checkbox" value="Simulation">Simulation</label>
        <label><input type="checkbox" value="Survival horror">Survival horror</label>
        <label><input type="checkbox" value="Multiplayer">Multiplayer</label>
        <label><input type="checkbox" value="Adventure game">Adventure game</label>
        <label><input type="checkbox" value="Platformer">Platformer</label>
        <label><input type="checkbox" value="Sports">Sports</label>
        <label><input type="checkbox" value="Rhythm">Rhythm</label>
        <label><input type="checkbox" value="Survivor game">Survivor game</label>
        <label><input type="checkbox" value="Shooter">Shooter</label>
        <label><input type="checkbox" value="Puzzle">Puzzle</label>
        <label><input type="checkbox" value="Sandbox">Sandbox</label>
        <label><input type="checkbox" value="MMORPG">MMORPG</label>
        <label><input type="checkbox" value="FPS">FPS</label>
      </div>
      <button type="submit" class="SearchButton">Search</button>
    </div>
</template>
<script>

export default {
  name: "SiteGenresMenu",
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
