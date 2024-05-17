<template>
    <div>
        <button :class="buttonClass" @click="followUser" v-text="buttonText"></button>

    </div>
</template>

<script>
export default {
    props: ['userId', 'follows', 'username'],

    mounted() {
        console.log('Component mounted.')
    },

    data: function () {
        return {
            status: this.follows,
            username: this.username,

        }
    },


    methods: {
        followUser() {
            axios.post('/follow/' + this.userId).then(response => {
                this.status = !this.status;
                console.log(response.data)

                axios.get('/follow/' + this.userId + '/counts').then(response2 => {
                    // Aktualizujemy zawartość divów
                    console.log(response2.data)
                    document.querySelector('.followers-count').textContent = response2.data.followers;
                    document.querySelector('.following-count').textContent = response2.data.following;
                });

                // this.$emit('buttonClickedEvent', 'signal');
                // console.log('Event emitted')
            }).catch(errors => {
                if (errors.response.status === 401) {
                    window.location = '/login';
                }
            })
        }
    },

    computed: {
        buttonText() {
            return this.status ? 'Unfollow' : 'Follow';
        },
        buttonClass() {
            if (this.username === window.Laravel.specialUsers['Roksanka']) {
                return this.status ? 'btn btn-outline-danger ms-4' : 'btn btn-outline-success ms-4';
            } else {
                return this.status ? 'btn btn-danger ms-4' : 'btn btn-primary ms-4';
            }
        }
    }
}


</script>
