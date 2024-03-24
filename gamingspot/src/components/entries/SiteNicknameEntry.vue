<template>
    <div class="wrapper">
        <input type="text" class="nickname_entry" :placeholder="placeholder">
    </div>
</template>

<script>

    export default{
        name: "NicknameEntry",
        props: {
            placeholder: {
                type: String
            }
        },
        data() {
            return {
                isNicknameValid: false
            }
        },
        methods: {
            checkNicknameValidity(){
                this.isNicknameValid = !this.isNicknameValid;
            }
        }
    }

</script>

<style scoped>


.wrapper{
    width: 100%;
    display: flex;
    flex-direction: row;
}

.nickname_entry {
    display: flex;
    font-size: 17px;
    width: 100%;
    height: 35px;
    padding: 10px;
    margin-bottom: 10px; 
    border: 1px solid #ccc;
    border-radius: 5px;
}

</style>