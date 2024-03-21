
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
  height: 70px;
  width: 300px;
  display: inline-block;
  padding: 10px 20px;
  /* margin-top: 20px; */
  font-size: 30px;
  font-weight: bold;
  text-align: center;
  text-decoration: none;
  color: #fff;
  background-color: #ff0000;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.button:hover {
  background-color: #fe6100;
}

.button:active {
  background-color: #b35f00;
  transform: translateY(1px);
}

</style>