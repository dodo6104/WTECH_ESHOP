<template>
    <div>
      <h1>Nezávislé štáty</h1>
      <ul>
        <li v-for="country in countries" :key="country">{{ country }}</li>
      </ul>
    </div>
  </template>
  
  <script>
  import { ref, onMounted } from 'vue';
  import axios from 'axios';
  
  export default {
    setup() {
      const countries = ref([]);
  
      // Funkcia na získanie názvov nezávislých štátov
      const fetchCountries = async () => {
        try {
          const response = await axios.get('https://restcountries.com/v3.1/independent?status=true');
          countries.value = response.data.map(country => country.name.common);
        } catch (error) {
          console.error("Chyba pri získavaní dát o krajinách:", error);
        }
      };
  
      // Načítanie dát pri montovaní komponentu
      onMounted(fetchCountries);
  
      return {
        countries,
      };
    },
  };
  </script>