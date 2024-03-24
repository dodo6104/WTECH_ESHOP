<template>
    <h1 class="adminh1">Admin Panel</h1>
    <div class="TopSection">
        <button class="AddButton" @click.stop="editproduct"> Add product</button>
    </div>
    <MySection :products="data" sectionName=""/>
</template>
  
<script>
import MySection from '../components/AdminPanel/SectionAdminPanel.vue';
import SiteProduct from '../components/AdminPanel/SiteAdminProduct.vue';

export default {
name: 'SiteAdmin',
methods: {
editproduct() {
    this.$router.push({ path: '/addedit' });
},

},
components: {
    MySection
  },
data() {
return {
    data: [
    SiteProduct,
    SiteProduct,
    SiteProduct,
    SiteProduct,
    ],
};
},
}
</script>

<style>
.adminh1 {
    width: 100%;
    text-align: center;
    font-size: 60px;
}

.TopSection {
    display: grid;
    margin-top: 30px;
    width: 100%;
    justify-content: center;
    align-content: center;
}

.AddButton {
    font-size: 30px;
    padding: 20px 40px 20px 40px;
    background-color: #a1c900;
    border-radius: 20px;
    width: 250px;
    cursor: pointer;
    }
.AddButton:hover {
    background-color: rgb(205, 239, 68);
}

</style>
  