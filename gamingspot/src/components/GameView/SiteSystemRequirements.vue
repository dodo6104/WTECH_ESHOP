<template>
    <div class="RequirementsContainer">
        <div class="requirements">
            <h2>Minimum System Requirements</h2>
            <ul>
                <li><label>RAM:</label> 8GB</li>
                <li><label>Processor:</label> Intel Core i5 or better</li>
                <li><label>Graphics Card:</label> NVIDIA GTX 660 or better</li>
                <li><label>Operating System:</label> Windows 10, 64-bit</li>
                <li><label>Hard Drive:</label> 250GB SSD</li>
            </ul>
        </div>
    </div>
</template>
    
<script>
    
export default {
name: 'SiteSystemRequirements',
}
</script>
    
<style>
.RequirementsContainer {
    display: flex;
    justify-content: center;
    width: 350px;
    height: 360px;
}

.requirements {
    border: 0px;
}

.requirements h2 {
    color: #333;
    font-size: 24px;
    margin: 0px;
}

.requirements ul {
    list-style-type: none;
    padding: 0;
    font-size: 20px;
}

.requirements ul li {
    margin-bottom: 10px;
}

.requirements label {
    font-weight: bold;
}
</style>