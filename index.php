<!DOCTYPE html>
<html>

<head>
    <title>Facebook login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lora:wght@700&family=Merriweather+Sans&family=Open+Sans:ital,wght@0,300;1,700&family=Roboto&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <header>
        <div class="center">
            <div class="logo">
                <h2>Facebook</h2>
            </div><!--logo-->


            <form method="post" class="form-login">
                <div class="form-element">
                    <p>E-mail:</p>
                    <input type="email" />
                </div><!--form-element-->

                <div class="form-element">
                    <p>Senha:</p>
                    <input type="password" />
                </div><!--form-element-->

                <div class="form-element">
                    <input type="submit" name="acao" value="Enviar" />
                </div><!--form-element-->
            </form><!--form-login-->
            <div class="clear"></div>
        </div><!--center-->
    </header>

    <section class="main">
        <div class="center">
            <div class="img-pessoas">
                <img src="images/img1.png" />
            </div><!--img-pessoas-->

            <div class="abrir-conta">
                <h2>Abra sua conta</h2>
                <h3>É gratuito e sempre será.</h3>

                <form class="criar-conta">
                    <div class="w50">
                        <input placeholder="Nome" type="text">
                    </div><!--w50-->

                    <div class="w50">
                        <input placeholder="Sobrenome" type="text">
                    </div><!--w50-->

                    <div class="w100">
                        <input placeholder="E-mail" type="email">
                    </div><!--w100-->

                    <div class="w100">
                        <input placeholder="Senha" type="password">
                    </div><!--w100-->

                    <div class="w100">
                        <h2>Data de Nascimento:</h2>
                        <select name="nascimento-dia" class="nascimento">
                            <?php
                            for ($i = 1; $i <= 31; $i++) {
                                ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php } ?>
                        </select>
                        <select name="nascimento-mes" class="nascimento">
                            <?php
                            for ($i = 1; $i <= 12; $i++) {
                                ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php } ?>
                        </select>
                        <select name="nascimento-ano" class="nascimento">
                            <?php
                            for ($i = 1970; $i <= 2023; $i++) {
                                ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php } ?>
                        </select>
                        <div class="clear"></div>
                    </div><!--w100-->

                    <div class="w100">
                        <div class="input-radio">
                            <input type="radio" name="sexo" value="feminino">
                            <h2>Feminino</h2>
                        </div><!--radio-->
                        <div class="input-radio">
                            <input type="radio" name="sexo" value="masculino">
                            <h2>Masculino</h2>
                        </div><!--radio-->
                    </div><!--w100-->

                    <div class="w100">
                        <input type="submit" name="acao" value="Cadastre-se">
                    </div>
                    <div class="clear"></div>
                </form><!--criar-conta-->

            </div><!--abrir-conta-->

            <div class="clear"></div>
        </div><!--center-->
    </section><!--main-->

    <section class="linguas">
        <div class="center">
            <a class="selected-lingua" href="">Português (BR)</a>
            <a href="">Inglês (US)</a>
            <a href="">Espanhol (MX)</a>
            <a href="">Coreano (CS)</a>
            <a href="">Português (PT)</a>
            <a href="">Japonês (JP)</a>
            <a href="">Baekista (BS)</a>
            <a href="">Húngaro (HU)</a>
        </div><!--linguas-->
    </section><!--section-->
</body>

</html>