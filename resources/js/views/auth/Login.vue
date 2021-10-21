<template>
    <form>
        <div class="">
            <h1>
<!--                {{ count }}-->
            </h1>
        </div>
        <div class="form-group">
            <input id="username" type="email" v-model="user.email" class="form-control" name="username" required value="" placeholder="Email" autofocus>
        </div>
        <div class="form-group">
            <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password" placeholder="Password">
        </div>
        <div class="form-group d-flex justify-content-between">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" checked="" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember me</label>
            </div>
            <a href="#">Reset password</a>
        </div>
        <button type="submit" id="submit" name="submit" value="new"
                class="btn btn-primary btn-block"
                onclick="document.getElementById('loginForm').submit();"><span id="create">Sign in</span>
            <i id="spin" style="display: none" class="fa fa-spinner fa-pulse fa-fw"></i>
        </button>
    </form>
</template>
<script>
// import { mapState } from 'vuex';
export default {
    computed: {
        // ...mapState({
        //     count: state => state.count
        // }),
        user: {
            get() {
                return this.$store.state.currentUser.user;
            }
        }
    }
}
</script>
