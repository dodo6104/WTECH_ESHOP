<template>
  <div class="PlatformMenu">
      <section>
        <h2>PC</h2>
        <div class="OptionsForPlatforms">
          <label><input type="checkbox" name="pc-platform" value="steam"> Steam</label>
          <label><input type="checkbox" name="pc-platform" value="origin"> Origin</label>
          <label><input type="checkbox" name="pc-platform" value="gog"> GOG</label>
          <label><input type="checkbox" name="pc-platform" value="epicgames"> Epic Games</label>
          <label><input type="checkbox" name="pc-platform" value="battlenet"> Battle.net</label>
        </div>
      </section>

      <section>
        <h2>Playstation</h2>
        <div class="OptionsForPlatforms">
          <label><input type="checkbox" name="playstation-platform" value="ps5"> Playstation 5</label>
          <label><input type="checkbox" name="playstation-platform" value="ps4"> Playstation 4</label>
        </div>
      </section>

      <section>
        <h2>Xbox</h2>
        <div class="OptionsForPlatforms">
          <label><input type="checkbox" name="xbox-platform" value="xboxone"> Xbox ONE</label>
          <label><input type="checkbox" name="xbox-platform" value="xboxseriesx"> Xbox Series X</label>
          <label><input type="checkbox" name="xbox-platform" value="xboxseriess"> Xbox Series S</label>
        </div>
      </section>

      <section>
          <h2>Nintendo</h2>
        <div class="OptionsForPlatforms">
          <label><input type="checkbox" name="nintendo-platform" value="nintendoswitch"> Nintendo Switch</label>
        </div>
      </section>
    </div>
</template>

<script>



export default {
  name: "SitePlatformMenu",
}
</script>

<style>
.PlatformMenu {
  position: absolute;
  display: flex;
  border-radius: 5px;
  background-color: white;
}

.PlatformMenu section {
  display: flex;
  flex-direction: column;
  margin-left: 50px;
  align-items: center;
  
}
.OptionsForPlatforms {
  display: flex;
  flex-direction: column;
}
.PlatformMenu h2 {
  font-size: 25px;
}

.PlatformMenu label {
  font-size: 20px;
  border: 1px solid black;
  margin-bottom: 10px;
  padding: 10px 5px 10px 0px;
  
}

</style>
