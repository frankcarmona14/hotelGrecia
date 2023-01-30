<!--  REDES SOCIALES  -->

<footer class="pie-pag">

    <section class="redes">
        <div class="container-fluid  py-5 text-center">
            <h1 class="pb-3">SÍGUENOS</h1>
            <div class="row">
                <div class="col-md-12">
                    <a href="https://www.instagram.com">
                        <i class="fab fa-4x mr-4 fa-instagram"></i>
                    </a>
                    <a href="https://www.facebook.com">
                        <i class="fab fa-4x mr-4 fa-facebook"></i>
                    </a>

                    <a href="https://www.plus.google.com/">
                        <i class="fab fa-4x mr-4 fa-google-plus-g"></i>
                    </a>
                    <a href="https://www.twitter.com">
                        <i class="fab fa-4x mr-4 fa-twitter"></i>
                    </a>
                </div>
            </div>

        </div>
    </section>
</footer>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="js/popper.min.js"></script>
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" 
integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
crossorigin="anonymous"></script>-->
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>
<script>
    $('.dropdown-toggle').dropdown()
</script>
<?php if (basename($_SERVER['PHP_SELF']) == 'sesion.php' || basename($_SERVER['PHP_SELF']) == 'registro.php') : ?>
    <script>
        function mostrarPassword() {
            var cambio = document.getElementById("txtPassword");
            if (cambio.type == "password") {
                cambio.type = "text";
                $('.icon').removeClass('far fa-eye').addClass('far fa-eye-slash');
            } else {
                cambio.type = "password";
                $('.icon').removeClass('far fa-eye-slash').addClass('far fa-eye');
            }
        }

        document.getElementById('show_password').addEventListener('click', mostrarPassword, false);
    </script>
<?php endif; ?>
</body>

</html>