<script setup>
import { ref } from 'vue';
import ProfileCard from '../ProfileCard.vue';
</script>
<template>
    <div class="bg-white dark:bg-zinc-900 p-6">
        <h2 class="text-3xl font-bold text-center dark:text-white mb-6">PENDIRI KOMJAK</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
            <ProfileCard v-for="(profile, index) in profiles" :key="index" :profile="profile" />
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            profiles: [
                {
                    name: 'Yohanas Harianto',
                    title: 'Best Boady Builder',
                    image: 'https://placehold.co/400x200',
                    socials: [
                        { name: 'Facebook', icon: 'https://placehold.co/20x20', link: '#' },
                        { name: 'Twitter', icon: 'https://placehold.co/20x20', link: '#' },
                        { name: 'LinkedIn', icon: 'https://placehold.co/20x20', link: '#' },
                        { name: 'Pinterest', icon: 'https://placehold.co/20x20', link: '#' },
                    ],
                },
                {
                    name: 'Thomas Awigra',
                    title: 'Best Boady Builder',
                    image: 'https://placehold.co/400x200',
                    socials: [
                        { name: 'Facebook', icon: 'https://placehold.co/20x20', link: '#' },
                        { name: 'Twitter', icon: 'https://placehold.co/20x20', link: '#' },
                        { name: 'LinkedIn', icon: 'https://placehold.co/20x20', link: '#' },
                        { name: 'Pinterest', icon: 'https://placehold.co/20x20', link: '#' },
                    ],
                },
                {
                    name: ' Felix',
                    title: 'Best Boady Builder',
                    image: 'https://placehold.co/400x200',
                    socials: [
                        { name: 'Facebook', icon: 'https://placehold.co/20x20', link: '#' },
                        { name: 'Twitter', icon: 'https://placehold.co/20x20', link: '#' },
                        { name: 'LinkedIn', icon: 'https://placehold.co/20x20', link: '#' },
                        { name: 'Pinterest', icon: 'https://placehold.co/20x20', link: '#' },
                    ],
                },
                {
                    name: 'Frans ',
                    title: 'Best Boady Builder',
                    image: 'https://placehold.co/400x200',
                    socials: [
                        { name: 'Facebook', icon: 'https://placehold.co/20x20', link: '#' },
                        { name: 'Twitter', icon: 'https://placehold.co/20x20', link: '#' },
                        { name: 'LinkedIn', icon: 'https://placehold.co/20x20', link: '#' },
                        { name: 'Pinterest', icon: 'https://placehold.co/20x20', link: '#' },
                    ],
                },
                {
                    name: 'Mike',
                    title: 'Best Boady Builder',
                    image: 'https://placehold.co/400x200',
                    socials: [
                        { name: 'Facebook', icon: 'https://placehold.co/20x20', link: '#' },
                        { name: 'Twitter', icon: 'https://placehold.co/20x20', link: '#' },
                        { name: 'LinkedIn', icon: 'https://placehold.co/20x20', link: '#' },
                        { name: 'Pinterest', icon: 'https://placehold.co/20x20', link: '#' },
                    ],
                },
                
            ]
        }
    },
}
</script>