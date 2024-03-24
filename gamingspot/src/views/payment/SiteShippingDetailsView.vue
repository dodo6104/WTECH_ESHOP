<template>
    <div>

        <div class="main-section">


            <section class="content-section">
                <UnderlinedHeader text="Shipping Details"></UnderlinedHeader>

                <div class="shipping-details">
                    <div class="detail-row">
                        <select class="shipping-options">
                            <option>Type of Shipping</option>
                            <option value="option-1">Local Post Service</option>
                            <option value="option-2">GLS Delivery Service</option>
                            <option value="option-3">DHL Express</option>
                        </select>

                        <select class="country-options" @change="fetchCities">
                            <option disabled selected value="">Country</option>
                            <option value="AT">Austria</option>
                            <option value="AU">Australia</option>
                            <option value="BE">Belgium</option>
                            <option value="CA">Canada</option>
                            <option value="CN">China</option>
                            <option value="CZ">Czech Rebulic</option>
                            <option value="DK">Denmark</option>
                            <option value="FI">Finland</option>
                            <option value="FR">France</option>
                            <option value="DE">Germany</option>
                            <option value="IN">India</option>
                            <option value="IT">Italy</option>
                            <option value="JP">Japan</option>
                            <option value="KR">South Korea</option>
                            <option value="MX">Mexico</option>
                            <option value="NL">Netherlands</option>
                            <option value="NZ">New Zealand</option>
                            <option value="NO">Norway</option>
                            <option value="PT">Portugal</option>
                            <option value="RU">Russia</option>
                            <option value="SA">Saudi Arabia</option>
                            <option value="ZA">South Africa</option>
                            <option value="SK">Slovakia</option>
                            <option value="ES">Spain</option>
                            <option value="SE">Sweden</option>
                            <option value="CH">Switzerland</option>
                            <option value="TR">Turkey</option>
                            <option value="GB">United Kingdom</option>
                            <option value="US">United States</option>
                        </select>
                    </div>

                    <div class="detail-row">
                        <input class="post-code-input" placeholder="Post Code">
                        <select class="city-options">
                            <option disabled selected value="">City</option>
                            <!-- Cities will be populated dynamically -->
                        </select>
                    </div>

                    <div class="detail-row">
                        <input class="address-input" placeholder="Address">
                        <input class="phone-input" type="number" placeholder="Phone">
                    </div>

                    
                </div>

                <div class="control-panel">
                    <button class="submit-button" :onClick="handleGoBackClick">Back</button>
                    <button class="submit-button"  :onClick="toNextSection">Continue</button>
                </div>
            </section>

            </div>
    </div>
</template>

<script>
import router from '@/router';
import UnderlinedHeader from '../../components/general/SiteUnderlinedHeader.vue';
// import CustomButton from '../../components/buttons/SiteSaveButton.vue';
import axios from 'axios';

export default {
    name: "ShippingDetailsView",
    props: {
        max_city_count: {
            type: Number,
            required: false,
            default: 50
        }
    },
    components: {
        UnderlinedHeader
        // CustomButton
    },
    methods: {
        handleGoBackClick() {
            router.push('/cart');
        },
        toNextSection(){
            router.push('/summary');
        },
        async fetchCities(event) {
            const countryCode = event.target.value;
            try {
                const response = await axios.get(`http://api.geonames.org/searchJSON?country=${countryCode}&featureClass=P&maxRows=${this.max_city_count}&username=johndym`);
                const cities = response.data.geonames.map(city => city.name);
                const cityOptions = document.querySelector('.city-options');
                cityOptions.innerHTML = ''; // Clear existing options
                cities.forEach(city => {
                    const option = document.createElement('option');
                    option.value = city;
                    option.textContent = city;
                    cityOptions.appendChild(option);
                });
            } catch (error) {
                console.error("Error fetching cities:", error);
            }
        }
    }
}
</script>

<style src="../../styles/sections/main_section.css"></style>;
<style src="../../styles/sections/content_section.css"></style>;
<style src="../../styles/sections/SiteLowerControlPanel.css"></style>

<style src="../../styles/buttons/SiteSubmitButton.css"></style>;

<style scoped>


.shipping-details{
    /* background-color: green; */
    max-width: 700px;
    width: 70%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}




.submit-button{
    min-width: 200px;
}


.detail-row {
    display: flex;
    flex-direction: row;
    padding: 10px;
    width: 100%;
    gap: 15px;
}

/* Select and input elements */
.shipping-options,
.country-options,
.post-code-input,
.city-options,
.address-input,
.phone-input {
    font-size: 16px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    width: 100%; /* Set width to 100% */
    box-sizing: border-box;
}

/* Option elements */
.shipping-options option {
    font-size: 16px;
}

/* Selected option style */
.shipping-options option:checked {
    background-color: #f0f0f0;
    color: #333;
    font-weight: bold;
}

/* Hover effect */
.shipping-options option:hover {
    background-color: #eaeaea;
}




/* Responsive adjustments */
@media only screen and (max-width: 700px) {
    .detail-row {
        flex-direction: column; /* Change to column layout on smaller screens */
        width: 60%;
    }

    .shipping-details{
        width: 90%;
    }
}


</style>