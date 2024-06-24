<template>
    <div class="w-full">
        <!-- Tabs Header -->
        <!-- <nav>
            <div
                class="flex flex-1 scroll-smooth scroll-off-screen items-center justify-center bg-gray-100 dark:bg-gray-900  sm:items-stretch">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center">
                    <li class="me-2" v-for="(tab, index) in tabs" :key="index">
                        <button @click="activeTab = index" :class="[
                             'cursor-pointer inline-block p-4 border-b-2 rounded-t-lg',
                             activeTab === index ? ' text-blue-500' : 'text-gray-500'
                         ]">
                            {{ tab.label }}
                        </button>

                    </li>
                </ul>
            </div>
        </nav> -->
        <div class="fixed top-0 left-0 right-0 bg-white  dark:bg-gray-900 shadow-md z-50">
            <div class="flex flex-1 items-center justify-center sm:items-stretch">
                <div class="flex flex-shrink-0 items-center">
                    <img class="h-20" src="../../../resources/assets/icons/icon_komjak.png" alt="Your Company" />
                </div>
            </div>
            <div class="flex flex-wrap -mb-px text-sm font-medium justify-center  text-center">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center">
                    <li class="me-2" v-for="(tab, index) in tabs" :key="index" role="presentation">
                        <button @click="activeTab = index" :class="[
                                'inline-block p-4 cursor-pointer ',
                                activeTab === index ? ' text-blue-500' : 'text-gray-500'
                            ]" role="tab">
                            {{ tab.label }}
                        </button>

                    </li>
                </ul>
            </div>
        </div>
        <!-- Space for fixed header -->
        <div class="h-16 mt-16"></div>
        <!-- Jumbotron -->
        <slot name="jumbotron"></slot>

        <!-- Tabs Content -->
        <div class="">
            <transition name="fade" mode="out-in">
                <component :is="tabs[activeTab].component" v-bind="tabs[activeTab].props"></component>
            </transition>
        </div>

    </div>
</template>

<script>
export default {
    data() {
        return {
            activeTab: 0,
        };
    },
    props: {
        tabs: {
            type: Array,
            required: true,
            validator(value) {
                return value.every(tab => 'label' in tab && 'component' in tab);
            },
        },
    },
};
</script>

<style scoped>
.tab-active {
    @apply border-b-2 border-blue-500 text-blue-500;
}

.tab-inactive {
    @apply text-gray-500;
}

.fade-enter-active,
.fade-leave-active {
    transition: opacity 0.5s;
}

.fade-enter, .fade-leave-to /* .fade-leave-active in <2.1.8 */
    {
    opacity: 0;
}
</style>
