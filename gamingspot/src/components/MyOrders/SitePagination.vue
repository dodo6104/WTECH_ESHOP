<template>
  <div class="pagination">
    <button v-for="page in totalPages" :key="page" @click="changePage(page)" :class="{ active: selectedPage === page }">{{ page }}</button>
    
    <div class="ellipsis">
      <label>...</label>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    startPage: {
      type: Number,
      required: false,
      default: 1
    },
    totalPages: {
      type: Number,
      required: true
    }
  },
  data() {
    return {
      selectedPage: this.startPage
    }
  },
  methods: {
    changePage(page) {
      this.selectedPage = page;
      this.$emit('page-changed', page); // Emit 'page-changed' event
    }
  }
};
</script>



<style scoped>

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

.ellipsis{
  margin-left: 5px;
  display: flex;
  flex-direction: row;
  align-items: flex-end;
}

</style>