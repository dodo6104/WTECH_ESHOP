<template>
  <div class="PlatformMenu">
    <div class="AllSections">
      <section v-for="section in platforms" :key="section.name">
        <h2>{{ section.name }}</h2>
        <div class="OptionsForPlatforms">
          <label v-for="platform in section.options" :key="platform.value"
                 :class="{'platform-selected': selectedPlatforms.includes(platform.value), 'platform-not-selected': !selectedPlatforms.includes(platform.value)}"
                 @click="togglePlatformSelection(platform.value)">
            {{ platform.label }}
          </label>
        </div>
      </section>
    </div>
    <button type="button" @click="searchGames" class="SearchButtonPlatform">Search</button>
  </div>
</template>

<script>
export default {
  name: "SitePlatformMenu",
  data() {
    return {
      platforms: [
        { name: 'PC', options: [{ label: 'Steam', value: 'steam' }, { label: 'Origin', value: 'origin' }, { label: 'GOG', value: 'gog' }, { label: 'Epic Games', value: 'epicgames' }, { label: 'Battle.net', value: 'battlenet' }] },
        { name: 'Playstation', options: [{ label: 'Playstation 5', value: 'ps5' }, { label: 'Playstation 4', value: 'ps4' }] },
        { name: 'Xbox', options: [{ label: 'Xbox ONE', value: 'xboxone' }, { label: 'Xbox Series X', value: 'xboxseriesx' }, { label: 'Xbox Series S', value: 'xboxseriess' }] },
        { name: 'Nintendo', options: [{ label: 'Nintendo Switch', value: 'nintendoswitch' }] }
      ],
      selectedPlatforms: [],
    };
  },
  methods: {
    togglePlatformSelection(platform) {
      const index = this.selectedPlatforms.indexOf(platform);
      if (index > -1) {
        this.selectedPlatforms.splice(index, 1);
      } else {
        this.selectedPlatforms.push(platform);
      }
    },
    searchGames() {
      this.$router.push('/gameView');
    }
  }
}
</script>

<style>
.PlatformMenu {
  position: absolute;
  display: grid;
  border-radius: 0px 0px 20px 20px;
  background-color: #003366dc;
  z-index: 5;
}

.AllSections {
  display: grid;
  grid-template-columns: auto auto auto auto;
}

.PlatformMenu section {
  display: flex;
  flex-direction: column;
  margin-left: 25px;
  margin-right: 25px;
  align-items: center;
}

.OptionsForPlatforms {
  display: flex;
  flex-direction: column;
  
}

.PlatformMenu h2 {
  font-size: 25px;
  color: white;
}

.PlatformMenu label {
  display: flex;
  font-size: 20px;
  margin-bottom: 10px;
  padding: 10px 5px;
  cursor: pointer;
  transition: background-color 0.3s, color 0.3s;
  width: 150px;
  height: 25px;
  border-radius: 20px; 
  justify-content: center;
}

.platform-selected {
  background-color: #4CAF50;
  color: white;
}

.platform-not-selected {
  background-color: #f4f4f4;
  color: black;
}


.SearchButtonPlatform {
  background-color: #000;
  color: #fff; 
  border: none;
  border-radius: 20px; 
  padding: 10px 30px;
  font-size: 24px;
  cursor: pointer; 
  margin: 4% 35% 4% 35%; 
}

@media (max-width: 1200px) {
  .AllSections {
    grid-template-columns: auto autoauto; 
  }
}

@media (max-width: 1052px) {
  .AllSections {
    grid-template-columns: auto auto; 
  }
}

@media (max-width: 470px) {
  .AllSections {
    grid-template-columns: none; 
  }
  .SearchButtonPlatform {
    padding: 10px;
    margin: 0% 4% 4% 4%; 
  } 
}
</style>
