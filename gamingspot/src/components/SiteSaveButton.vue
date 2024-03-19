
<template>

    <div>
        <Button class="button" @click="handleClick">{{ text }}</Button>
    </div>

</template>


<script>


export default{
    name: "SaveButton",
    props: {
      text: {
        type: String,
        required: false,
        default: ""
      },
      onClick: {
        type: Function,
        required: false
      }
    },

    methods: {
      handleClick(){
        if(this.onClick){
          this.onClick();
        }
      }
    }
}

</script>

<style scoped>
.button {
  width: 200px;
  height: 41px;
  display: inline-block;
  padding: 10px 20px;
  /* margin-top: 20px; */
  font-size: 16px;
  font-weight: bold;
  text-align: center;
  text-decoration: none;
  color: #fff;
  background-color: #007bff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.button:hover {
  background-color: #0056b3;
}

.button:active {
  background-color: #0056b3;
  transform: translateY(1px);
}

</style>