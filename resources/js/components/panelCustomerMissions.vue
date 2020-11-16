<template>
    <panel class="flex justify-around">
        <div class="text-center">
            <h3 class="text-6xl text-primary">{{ customer.missions.length }}</h3>
            <h5 class="text-default text-2xl">Mission{{ customer.missions.length > 1 ? 's' : '' }}</h5>
        </div>
        <div class="text-center">
            <h3 class="text-6xl text-primary">{{ customer.missions.reduce((acc, val) => acc += +val.amount, 0) }}</h3>
            <h5 class="text-default text-2xl">Au total</h5>
        </div>
    </panel>
</template>

<script>
import axios from 'axios';

export default {
    name: "panelCustomerMissions",
    props: ['customerid'],
    data() {
        return ({
            customer: {
                missions:[]
            }
        })
    },
    mounted() {
        axios.get('/api/customers/' + this.customerid)
            .then(res => {
                console.log({data: res.data})
                this.customer = res.data;
            })
            .catch(err => console.log(err))
    }
}
</script>
