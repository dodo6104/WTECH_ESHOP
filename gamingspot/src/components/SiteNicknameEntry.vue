

<template>
    <section>
        <div>
            <input type="text" id="nickname_entry" placeholder="Nickname" :class="{ 'valid-nickname': isNicknameValid, 'invalid-nickname': !isNicknameValid }" v-model="email" @input="checkNicknameValidity($event)">
        </div>
    </section>
</template>

<script>

    export default{
        name: "NicknameEntry",
        
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
#nickname_entry {
    width: 92%;
    height: 35px;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

</style>