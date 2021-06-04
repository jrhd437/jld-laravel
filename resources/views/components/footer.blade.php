<footer>
    <section>
        <div class="footer-title">Social</div>
        <div class="footer-body">
            <div class="footer-social"><a target="_blank" href="https://www.linkedin.com/in/jared-hd437">LinkedIn</a></div>
            <div class="footer-social"><a target="_blank" href="https://twitter.com/jaredsleach">Twitter</a></div>
            <div class="footer-social"><a target="_blank" href="https://github.com/jrhd437">GitHub</a></div>
        </div>
    </section>
    <section>
        <div class="footer-title">Sites I Love</div>
        <div class="footer-body">
            <div class="footer-social"><a href="/">Home</a></div>
            <div class="footer-social"><a target="_blank" href="https://laracasts.com/">LaraCasts</a></div>
            <div class="footer-social"><a target="_blank" href="https://www.vuemastery.com/">Vue Mastery</a></div>
            <div class="footer-social"><a target="_blank" href="https://www.digitalocean.com/">DigitalOcean</a></div>
        </div>
    </section>
    <section>
        <div id="footer_nav" class="footer-title">Navigation</div>
        <div class="footer-body">
            <div class="footer-social"><a href="/">Home</a></div>
            <div class="footer-social"><a href="/education">Education</a></div>
            <div class="footer-social"><a href="/skills">Skills</a></div>
            <div class="footer-social"><a target="_blank" href="https://github.com/jrhd437">Projects</a></div>
        </div>
    </section>
</footer>

<section id="menu" v-show="showNav">
    <div class="menu-title">Navigation</div>
    <div class="menu-body">
        <div class="menu-item"><a href="/">Home</a></div>
        <div class="menu-item"><a href="/education">Education</a></div>
        <div class="menu-item"><a href="/skills">Skills</a></div>
        <div class="menu-item"><a target="_blank" href="https://github.com/jrhd437">Projects</a></div>
    </div>
</section>


</div>
</div><!-- end of #app opened in header -->
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
<script>
    var app = new Vue({
        el: '#app',
        data: {
            showNav: false
        }
    })
</script>
</body>

</html>