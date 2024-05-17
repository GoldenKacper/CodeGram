<script>
import followButton from './FollowButton.vue';
export default {
    // Tutaj umieść logikę dla komponentu
    // data() {
    //     return {
    //         message: 'Witaj w moim komponencie Vue!'
    //     }
    // },
    components: {
        followButton
    },
    methods: {
        handleEvent(data) {
            console.log('Zdarzenie zostało wywołane z danymi:', data);
            // Tutaj możesz wywołać skrypt z innego komponentu
        }
    }
}
</script>

<template>
    <div>
        <!-- Tutaj umieść kod HTML dla komponentu -->
        <div class="d-flex">
            <follow-button @buttonClickedEvent="handleEvent"></follow-button>
            <!--            <div class="pe-5"><strong>{{ $user->posts->count() }}</strong> posts</div>-->
            <!--            <div class="pe-5"><strong>{{ $user->profile->followers->count() }}</strong> followers</div>-->
            <!--            <div class="pe-5"><strong>{{ $user->following->count() }}</strong> following</div>-->
        </div>
    </div>
</template>

<style scoped>

</style>
