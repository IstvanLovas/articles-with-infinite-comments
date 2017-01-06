<footer id="app-footer">
    <div class="stay-updated-and-get-in-touch">
        <div class="left hidden-xs"></div>
        <div class="right hidden-xs"></div>
        <div class="container">
            <div class="row flex-wrapper">
                
                <div class="col-xs-12 col-md-6 stay-updated section">
                    <div>
                        <h2>Stay Updated</h2>
                        <h4>with our campaign <br>e-newsletter</h4>
                    </div>
                        
                    <div class="cta-button">
                        <a href="/login" class="text-center text-uppercase">Sign up</a>
                    </div>
                    
                    <div class="join-the-conversation">
                        @include('partials.join-the-conversation')
                    </div>
                </div>
    
                <div class="col-xs-12 col-md-6 get-in-touch section">
                    <h2>Get in touch</h2>
                    
                    <ul class="contact-links">
                        <li class="email">Email</li>
                        <li class="phone">Phone</li>
                        <li class="address">Address</li>
                    </ul>
                    
                    <footer class="text-uppercase">
                        <span>copyright / </span>
                        <span>privacy page / </span>
                        <span>designed by / </span>
                        <span>developed by / </span>
                    </footer>
                </div>
        
            </div>
        </div>
    </div>
</footer>

@section('customJS')
<script>
    const Footer = new Vue({
        el: '#app-footer',
        mounted() {
            this.$nextTick(() => {

                TweenLite.set($('.stay-updated-and-get-in-touch .get-in-touch'),{
                    x:$('.stay-updated-and-get-in-touch .flex-wrapper').offset().left
                })

                $(window).on('resize',() => {
                    TweenLite.set($('.stay-updated-and-get-in-touch .get-in-touch'),{
                        x:$('.stay-updated-and-get-in-touch .flex-wrapper').offset().left
                    })
                })
                
            })
        }
    })
</script>
@endsection