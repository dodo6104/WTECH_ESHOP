



<template>
    <section>
        <div>
            <input type="text" id="nickname_entry" :placeholder="placeholder" :class="{ 'valid-nickname': isNicknameValid, 'invalid-nickname': !isNicknameValid }" v-model="email" @input="checkNicknameValidity($event)">
        </div>
    </section>
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

#nickname_entry {
    
    font-size: 20px;
    width: 90%;
    height: 35px;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

</style>