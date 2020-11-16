<template>
    <panel class="flex flex-col justify-around">
        <div>
            <h3 class="text-6xl text-primary">{{ missions.quotes.length }}</h3>
            <h5 class="text-default text-2xl">Devis envoyé</h5>
        </div>
        <div>
            <h3 class="text-6xl text-primary">{{ missions.bills.length }}</h3>
            <h5 class="text-default text-2xl">{{
                    missions.bills.map(x => x.status === "paid").length > 1 ? 'Factures envoyées' : "Facture envoyé"
                }}</h5>
        </div>
        <div>
            <h3 class="text-6xl text-primary">{{ missions.bills.filter(x => x.status === "paid").length }}</h3>
            <h5 class="text-default text-2xl">
                {{ missions.bills.map(x => x.status === "paid").length > 1 ? 'Factures payées' : "Facture payée" }}</h5>
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
            missions: {
                quotes: [],
                bills: [],
            }
        })
    },
    mounted() {
        axios.get('/api/customers/' + this.customerid + '/missions')
            .then(res => {
                this.missions = res.data;
            })
            .catch(err => console.log(err))
    },
}
</script>
