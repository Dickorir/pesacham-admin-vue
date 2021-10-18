<template>
    <div class="layout-wrapper">
        <Header />
        <div class="content-wrapper">
            <Nav />
            <div class="content-body">
                <div class="content">
                    <router-view></router-view>

                </div>
                <Footer />
            </div>
        </div>
    </div>
</template>
<script>
import Header from './components/Header.vue'
import Nav from './components/Navigation.vue'
import Sidebar from './components/Sidebar.vue'
import Footer from './components/Footer.vue'
export default {
    components: {
        Header,
        Nav,
        Sidebar,
        Footer
    }
}
</script>
