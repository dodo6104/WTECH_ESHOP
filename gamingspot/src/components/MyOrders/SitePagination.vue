<template>
    <div class="pagination">
      <button v-for="page in totalPages" :key="page" @click="changePage(page)" :class="{ active: currentPage === page }">{{ page }}</button>
      <label>...</label>
    </div>
  </template>
  
  <script>
  export default {
    props: {
      currentPage: {
        type: Number,
        required: true
      },
      totalPages: {
        type: Number,
        required: true
      }
    },
    methods: {
      changePage(page) {
        this.$emit('page-changed', page);
      }
    }
  };
  </script>
  
  <style scoped>

  label {
    position: absolute;
    margin-top: 1px;
    font-size: 27px;

    margin-left: 270px;
  }
  .pagination {
    display: flex;
    justify-content: center;
    margin-top: 20px;
  }
  
  .pagination button {
    margin: 0 5px;
    padding: 5px 10px;
    border: 1px solid #ccc;
    background-color: #fff;
    cursor: pointer;
  }
  
  .pagination button.active {
    background-color: #007bff;
    color: #fff;
  }
  </style>