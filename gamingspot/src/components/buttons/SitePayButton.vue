
<template>

    <div>
        <Button class="pay-button" @click="handleClick">{{ text }}</Button>
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
.pay-button {
  height: 70px;
  width: 300px;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 10px 20px;
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

.pay-button:hover {
  background-color: #fe6100;
}

.pay-button:active {
  background-color: #b35f00;
  transform: translateY(1px);
}

</style>