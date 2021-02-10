<template>
    <div class="row">
        <div class="col-sm">
            <img class="img-fluid" src="../assets/images/contact.jpg" alt="photo">
        </div>

        <div class="col-sm text-center">
            <app-nav :menu='false'></app-nav>
            <h2 class="text-uppercase mt-5">Contact</h2>
            <p class="font-italic font-weight-bold my-4">
                I'm based in cheltenham in the UK, not far from Bristol,
                Birmingham, Oxford and Swindom. Drop me a line.
            </p>
            <form method="POST" action="send.php">
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Name" required>
                </div>

                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>

                <div class="form-group">
                    <textarea class="form-control" rows="5" name="text" placeholder="Message" required></textarea>
                </div>
                <button type="submit" class="btn btn-home border-dark">Send Message</button>
            </form>
        </div>
    </div>
</template>

<script>
import AppNav from '../components/Nav'

export default {
    name: "Contacts",
    components: {
        AppNav
    }
}
</script>

<style scoped>

</style>