<<!-- Temporisation par le bais du buffer -->

    <?php ob_start(); ?>


    <p class="text-monospace m-4 p-4">ici ma page mentions légales</p>

    <!-- Start mention Area -->
    <section class="open-mention-area ">
        <div class="container">
            <div class="row justify-content-center  m-5 p-5">
                <div class="col-lg-12 open-mention-wrap ">
                    <h3 class="text-primary text-center mb-3 pb-3">Mentions légales</h3>

                    <p class="text-justify bg-dark">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                        unknown printer took a galley of type and scrambled it to make a type specimen book. It has
                        survived not only five centuries, but also the leap into electronic typesetting, remaining
                        essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets
                        containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus
                        PageMaker including versions of Lorem Ipsum.
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions of
                        Lorem Ipsum, <br>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions of
                        Lorem Ipsum<br>

                    </p>

                </div>
            </div>
        </div>
    </section>
    <!-- End mention Area -->


    <?php

    $content = ob_get_clean();
    $titre = "Mentions légales";
    require "template.php";
    ?>