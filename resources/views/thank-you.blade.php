<x-guest-layout>
    <x-slot name="style">
        <style>
            .counter-loader{
                margin: auto;
                transform:translate(-50%,-50%);
                width:75px;
                height:75px;
                background:transparent;
                border:3px solid #3c3c3c;
                border-radius:50%;
                text-align:center;
                line-height:75px;
                font-family:sans-serif;
                font-size:20px;
                color:#fff000;
                letter-spacing:4px;
                text-transform:uppercase;
                text-shadow:0 0 10px #fff000;
                box-shadow:0 0 20px rgba(0,0,0,.5);
            }
            .counter-loader:before{
                content:'';
                position:absolute;
                left:-3px;
                width:100%;
                height:100%;
                border:3px solid transparent;
                border-top:3px solid #fff000;
                border-right:3px solid #fff000;
                border-radius:50%;
                animation:animate 2s linear infinite;
            }

            @keyframes animate {
                0%
                {
                    transform:rotate(0deg);
                }
                100%
                {
                    transform:rotate(360deg);
                }
            }
        </style>
    </x-slot>
    <div id="content" class="site-content">
        <section class="wpb-content-wrapper">
            <section class="wpb_row vc_row-fluid section-padd bg-second vc_custom_1554172062065 vc_row-has-fill">
                <div class="container">
                    <div class="vc_row">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="counter-loader" counter>10</div>

                                    <h2 style="color: #ffffff;text-align: left"
                                        class="vc_custom_heading vc_custom_1686453095663">Thank you for your interest. Our Experts will get back to you shortly.
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="wpb_row vc_row-fluid bg-second vc_custom_1555470524461">
                <div class="container">
                    <div class="vc_row">
                        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-9">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="wpb_text_column wpb_content_element  vc_custom_1686453320942 text-light">
                                        <div class="wpb_wrapper">
                                            <h3>Now! Get a Free <span class="lighter">consultation for Your Home Loan<br /></span></h3>
                                        </div>
                                    </div>
                                    <div class="vc_empty_space  lg-hidden" style="height: 20px">
                                        <span class="vc_empty_space_inner"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-3">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="text-right mobile-left">
                                        <a class="btn" href="tel:+919891845151" style="">Get it now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </div>

    <x-slot name="script">
        <script>
            $(document).ready(function () {
                let time = 10;

                console.log(time);

                counter = setInterval(() => {
                    $('[counter]').text(time = time - 1);

                    if (time < 1) {
                        clearInterval(counter);

                        window.location.href = location.protocol + '//' + location.host;
                    }
                }, 1000);
            });
        </script>
    </x-slot>
</x-guest-layout>
